<?php

use idoit\Component\Helper\ArrayHelper;
use idoit\Component\Helper\Ip;
use idoit\Component\Helper\Purify;
use idoit\Component\Helper\Unserialize;
use idoit\Component\Logger;
use idoit\Component\Property\Property;
use idoit\Context\Context;
use idoit\Module\Cmdb\Component\CategoryChanges\Changes;
use idoit\Module\Cmdb\Component\SyncMerger\Config;
use idoit\Module\Cmdb\Component\SyncMerger\Merger;
use idoit\Module\Cmdb\Model\Matcher\Ci\CiIdentifiers;
use idoit\Module\Cmdb\Model\Matcher\Ci\CiMatcher;
use idoit\Module\Cmdb\Model\Matcher\Ci\MatchKeyword;
use idoit\Module\Cmdb\Model\Matcher\MatchConfig;
use idoit\Module\Cmdb\Search\Index\Signals;
use idoit\Module\CustomFields\PropertyTypes;
use League\Csv\Reader;
use League\Csv\Statement;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\TestHandler;
use Monolog\Level;
use Monolog\LogRecord;

/**
 * i-doit
 *
 * CSV Import
 *
 * @package    i-doit
 * @subpackage Modules
 * @author     Selcuk Kekec <skekec@synetics.de>
 * @copyright  synetics GmbH
 * @license    http://www.i-doit.com/license
 */
class isys_module_import_csv implements isys_module_interface
{
    /**
     * @see  self::get_csv().
     */
    const CL__GET__HEAD                = 'csv_head';
    const CL__GET__CONTENT             = 'csv_content';
    const CL__GET__HEAD_LENGTH         = 'csv_head_length';
    const CL__GET__CONTENT__FIRST_LINE = 'csv_content_firstline';
    const CL__GET__CONTENT__HEADSIZE   = 'csv_headsize';

    /**
     * @see  self::get_importable_categories().
     */
    const CL__MULTIVALUE_TYPE__COLUMN   = 'multivalue_column';
    const CL__MULTIVALUE_TYPE__ROW      = 'multivalue_row';
    const CL__MULTIVALUE_TYPE__COMMA    = 'multivalue_comma';
    const CL__MULTIVALUE_LINE_SEPARATOR = '#-separator-#';

    /**
     * @see  self::create_category_map().
     */
    const CL__CAT__ID                     = 'cat_id';
    const CL__CAT__TITLE                  = 'cat_title';
    const CL__CAT__PROPERTIES             = 'cat_properties';
    const CL__CAT__MULTIVALUE             = 'cat_multivalue';
    const CL__CAT__PARENT                 = 'cat_parent';
    const CL__CAT__TABLE                  = 'cat_table';
    const CL__CAT__CAT_TYPE               = 'cat_ctype';
    const CL__CAT__DATA_FIELD             = 'cat_data_field'; // GLOBAL, SPECIFIC, CUSTOM
    const CL__CAT__CONSTANT               = 'cat_constant';
    const CL__CAT__CLASS                  = 'cat_classname';
    const CL__CAT__TYPE                   = 'cat_type';
    const CL__CAT__PROPERTY__TITLE        = 'property_title'; // EDIT, READ, ASSIGN
    const CL__CAT__PROPERTY__ROW          = 'property_row';
    const CL__CAT__PROPERTY__MODE         = 'property_mode';
    const CL__CAT__PROPERTY__PARAM        = 'property_param';
    const CL__CAT__PROPERTY__TAG          = 'property_tag';
    const CL__CAT__PROPERTY__UI_PARAMS    = 'property_ui_params';
    const CL__CAT__PROPERTY__VISIBLE      = 'property_visible';
    const CL__CAT__PROPERTY__TYPE         = 'property_type';
    const CL__CAT__PROPERTY__ESSENTIALITY = 'property_essentiality';
    const CL__CAT__PROPERTY__FORMTAG      = 'property_formtag';
    const CL__CAT__PROPERTY__REFERENCES   = 'property_references';
    const CL__CAT__PROPERTY__IDENTIFIER   = 'property_identifier'; // @see ID-3183 This will be used for custom category dialog+ fields
    const CL__CAT__PROPERTY__TABLE        = 'property_table'; // @see ID-3188 Multiselects should be treated like dialog+
    const CL__CAT__PROPERTY__CALLBACK     = 'property_callback'; // @see ID-3188 Multiselects should be treated like dialog+
    const CL__CAT__PROPERTY__ARRAY_DATA   = 'property_array_data'; // @see ID-5022 Dialog fields which have there data only in p_arData as an array

    /**
     * @see  self::handle_multivalue_category();
     */
    const CL__MULTIVALUE_MODE__UNTOUCHED = 'm_untouched';
    const CL__MULTIVALUE_MODE__ADD       = 'm_add';
    const CL__MULTIVALUE_MODE__OVERWRITE = 'm_overwrite';

    /**
     * Constants for datastructur
     *
     * @see  $this->create_data_structure();
     */
    const CL__CAT__DATA           = 'category_data';
    const CL__OBJECT_TYPE         = 'object_type';
    const CL__OBJECT_TITLE        = 'object_title';
    const CL__OBJECT_PURPOSE      = 'object_purpose';
    const CL__OBJECT_CATEGORY     = 'object_category';
    const CL__OBJECT_TAGS         = 'object_tags';
    const CL__OBJECT_SYSID        = 'object_sysid';
    const CL__OBJECT_HOSTNAME     = 'object_hostname';
    const CL__OBJECT_CMDBSTATUS   = 'object_cmdbstatus';
    const CL__OBJECT_DESCRIPTION  = 'object_description';
    const CL__SYN_PROPERTY        = 'properties';
    const CL__HELPER__VALUE       = 'helper_value';
    const CL__HELPER__UNIT_ROW    = 'helper_unit_row';
    const CL__HELPER__UNIT_TAG    = 'helper_unit_tag';
    const CL__HELPER__UNIT_ID     = 'helper_unit_id';
    const CL__HELPER__IS_RESTRICTED_UNIT = 'is_restricted_unit';
    const CL__UNUSED__DATA        = 'unused_data';
    const CL__OBJECT_MODE__CREATE = 'object_create';
    const CL__OBJECT_MODE__UPDATE = 'object_update';

    /**
     * Some "import step" constants.
     */
    const CL__IMPORT_STEP__CONSTRUCT     = 'step_construct';
    const CL__IMPORT_STEP__INITIALIZE    = 'step_initialize';
    const CL__IMPORT_STEP__ARRANGE       = 'step_arrange';
    const CL__IMPORT_STEP__DATASTRUCTURE = 'step_datastructure';
    const CL__IMPORT_STEP__IMPORT        = 'step_import';
    const CL__IMPORT_STEP__FINISHED      = 'step_finished';

    /**
     * @var  boolean
     */
    protected static $m_licenced = true;

    /**
     * @var  boolean
     */
    private static $m_activate_caching = true;

    /**
     * Register methods on properties for addons:
     * In init.php
     * isys_register::factory('csv-import-properties')
     *   ->set('isys_cmdb_dao_category_g_x::property', 'MethodName');
     *
     * In isys_cmdb_dao_category_g_x.class.php
     * public function MethodName($value) {...}
     *
     * @var array
     */
    private static $addonMethods = [];

    /**
     * @var array
     */
    private static $addonMethodsInstances = [];

    /**
     * @var array
     */
    private static $createAllCategoryEntries = [];

    /**
     * List of supported helper.
     *
     * @see  self::create_category_map()
     * @var  array
     */
    private static $m_allowed_properties = [
        'LC__UNIVERSAL__YES_NO'                           => 'get_yes_or_no',
        'LC__UNIVERSAL__DIALOG'                           => 'dialog',
        'Dialog'                                          => 'model_title',
        'LC__UNIVERSAL__DIALOG_PLUS'                      => 'dialog_plus',
        'LC__CMDB__LOGBOOK__DATE'                         => 'date',
        'LC__UNIVERSAL__TIME_PERIOD'                      => 'timeperiod',
        'LC__CMDB__CATG__UNIT'                            => 'convert',
        'LC__CMDB__CATG__POWER_CONSUMER_CONNECTION'       => 'connection',
        'LC__CMDB__CATG__REFERENCED_VALUE'                => 'get_reference_value',
        'LC_UNIVERSAL__OBJECT'                            => 'object',
        'Position'                                        => 'location_property_pos',
        'Location'                                        => 'location',
        'Money'                                           => 'money_format',
        'LC__CMDB__CATG__GLOBAL_CONTACT'                  => 'contact',
        'Hostname'                                        => 'exportHostname',
        'LC__UNIVERSAL__CUSTOM_DIALOG_PLUS'               => 'exportCustomFieldDialogPlus',
        'LC__MODULE__CUSTOM_FIELDS__OBJECT_BROWSER'       => 'exportCustomFieldObject',
        'LC_UNIVERSAL__DATE'                              => 'exportCustomFieldCalendar',
        'LC__MODULE__CUSTOM_FIELDS__DATETIME'             => 'exportCustomFieldCalendarWithTime',
        'LC__MODULE__CUSTOM_FIELDS__YES_NO_FIELD'         => 'exportCustomFieldYesNoDialog',
        'LC__CATG__WAN__ROUTER'                           => 'wan_connected_router',
        'LC__CATG__WAN__NET'                              => 'wan_connected_net',
        'LC__CMDB__CATS__NET__LAYER2_NET'                 => 'exportLayer2Assignments',
        'LC__CMDB__LAYER2_NET'                            => 'port_assigned_layer2_nets',
        '_LC__CMDB__LAYER2_NET'                           => 'log_port',
        'LC__UNIVERSAL__CSV_MULTISELECT_VIA_SEMICOLON'    => 'dialog_multiselect',
        'LC__CMDB__CATG__ACCOUNTING_INVENTORY_NO'         => 'auto_inventory_no',
        'LC__CATG__CONNECTOR__INTERFACE'                  => 'interface_p',
        '_LC__UNIVERSAL__CSV_MULTISELECT_VIA_SEMICOLON'   => 'exportHostaddressAliases',
        'DBMS'                                            => 'database_instance',
        'LC__OBJTYPE__DATABASE_SCHEMA'                    => 'databaseSchema',
        'LC__CMDB__CATG__LOCATION_GPS_COORDINATE'         => 'property_callback_gps',
        'LC__CMDB__CATG__LOCATION_LATITUDE'               => 'property_callback_latitude',
        'LC__CMDB__CATG__LOCATION_LONGITUDE'              => 'property_callback_longitude',
        'LC__CMDB__CATG__LIC_ASSIGN__LICENSE'             => 'applicationLicence',
        'LC__CATG__VERSION_TITLE'                         => 'applicationAssignedVersion',
        'LC__CMDB__CATS__APPLICATION_VARIANT__VARIANT'    => 'applicationAssignedVariant',
        'LC__CMDB__CATS__LAYER2__LAYER3_NET'              => 'layer_3_assignment',
        'LC__CMDB__CATS__CHASSIS__ASSIGNED_SLOTS'         => 'chassis_slots',
        'LC__CATG__STORAGE_MODEL'                         => 'storageModel',
        'LC__LOGIN__PASSWORD'                             => 'password',
        'LC__CATG__DATABASE__ASSIGNED_DBMS'               => 'assignedDbms',
        'LC__CATG__DATABASE_SA__ASSIGNED_DBMS'            => 'assignedDbmsSa',
        'LC__CMDB__CATG__CARDS__TITLE'                    => 'assignedCards',
        'LC__CATG__CONNECTOR__SIBLING_IN_OR_OUT'          => 'connector',
        'LC__CMDB__CATS__DATABASE_SCHEMA'                 => 'applicationDatabaseSchema',
        'LC__CMDB__CATS__NET__DEF_GW'                     => 'exportGateway',
        'LC__CATG__IP__DEFAULT_GATEWAY_FOR_THE_NET'       => 'get_yes_or_no',
        'LC__CATG__APPLICATION_ASSIGNED_DATABASES_SCHEMA' => 'applicationDatabaseSchema',
        'LC_UNIVERSAL__DATETIME'                          => 'datetime'
    ];

    /**
     * contains all methods which are object browser fields
     *
     * @var string[]
     */
    public static $methodsAsObjectBrowserFields = [
        'contact',
        'connection',
        'object',
        'exportCustomFieldObject',
        'exportLayer2Assignments',
        'databaseSchema',
        'port_assigned_layer2_nets',
        'log_port',
        'applicationDatabaseSchema',
    ];

    /**
     * Callback Register.
     *
     * @var  array
     */
    private static $m_callback_register = [
        'C__CATG__IP'                   => 'callback_ip',
        'C__CATG__NETWORK_PORT'         => 'callback_port',
        'C__CMDB__SUBCAT__NETWORK_PORT' => 'callback_port', // @todo  Remove in i-doit 1.12
        'C__CATG__LOCATION'             => 'callback_location',
        'C__CATG__MODEL'                => 'callback_model',
        'C__CATG__STORAGE_DEVICE'       => 'callback_device',
        'C__CATG__CONTACT'              => 'callback_contact',
        'C__CATG__ASSIGNED_SIM_CARDS'   => 'callback_assigned_sim_cards'
    ];

    /**
     * Category blacklist.
     *
     * @var  array
     */
    private static $m_category_skip = [
        'C__CATG__GLOBAL',
        'C__CATG__RELATION',
        'C__CATG__CLUSTER_ROOT',
        'C__CATG__CLUSTER',
        'C__CATG__TICKETS',
        'C__CATS__RELATION_DETAILS',
        'C__CATS__PARALLEL_RELATION',
        'C__CATS__FILE',
        'C__CATS__PERSON_MASTER',
        'C__CATS__PERSON_GROUP_MASTER',
        'C__CATS__ORGANIZATION_MASTER_DATA',
        'C__CATS__APPLICATION_SERVICE_ASSIGNED_OBJ',
        'C__CATS__APPLICATION_DBMS_ASSIGNED_OBJ',
        'C__CATS__LAYER2_NET_ASSIGNED_PORTS',
        'C__CATS__LAYER2_NET_ASSIGNED_LOGICAL_PORTS',
        // 'C__CATS__NET_DHCP', // @see ID-3688
        'C__CATS__NET_IP_ADDRESSES',
        'C__CATS__PERSON_NAGIOS',
        'C__CATS__PERSON_GROUP_NAGIOS',
        'C__CATS__ENCLOSURE',
        'C__CATG__NAGIOS_HOST_TPL_FOLDER',
        'C__CATG__NAGIOS_HOST_FOLDER',
        'C__CATG__NAGIOS_SERVICE_TPL_FOLDER',
        'C__CATG__NAGIOS_SERVICE_FOLDER',
        'C__CATG__NET_CONNECTIONS_FOLDER',
        'C__CATG__FILE',
        'C__CATG__MANUAL',

    ];

    private static $m_category_include = [
        'C__CATS__APPLICATION',
        'C__CATS__MIDDLEWARE',
        'C__CATS__OPERATING_SYSTEM',
        'C__CATS__PERSON',
        'C__CATS__PERSON_GROUP',
        'C__CATS__WS',
        'C__CATS__ORGANIZATION',
        'C__CATS__LICENCE',
        'C__CATS__FILE',
        'C__CATS__EMERGENCY_PLAN',
        'C__CATS__CONTRACT',
        'C__CATS__CHASSIS',
        'C__CATG__SIM_CARD'
    ];

    /**
     * @var  integer
     */
    private static $m_current_object_id;

    /**
     * @var  integer
     */
    private static $m_current_object_type;

    /**
     * @var string|null
     */
    private $currentCategoryConstant = null;

    /**
     * @var int|null
     */
    private $currentRowIndex = null;

    /**
     * @var array
     */
    private $customDialogParentData = [];

    /**
     * CSV-Delimiter.
     *
     * @var  string
     */
    private static $m_delimiter;

    /**
     * Path to file.
     *
     * @var  string
     */
    private static $m_file;

    /**
     * @var  integer
     */
    private static int|null $m_global_object_type;

    /**
     * @var  integer
     */
    private static $m_global_step;

    /**
     * @var  boolean
     */
    private static $m_header = true;

    /**
     * @var bool
     */
    private $defaultTemplate = false;

    /**
     * @var  boolean
     */
    private static $m_live_category_skip = false;

    /**
     * @var  string
     */
    private static $m_log_essential;

    /**
     * @var  string
     */
    private static $m_log_objecttype;

    /**
     * @var  isys_module_logbook
     */
    private static $m_logb_dao;

    /**
     * Mulitvalue-Mode.
     *
     * @var  string
     */
    private static $m_multivalue_mode;

    /**
     * untouch | overwrite | add
     *
     * @var  string
     */
    private static $m_multivalue_update_mode = null;

    /**
     * @var  integer
     */
    private static $m_object_category;

    /**
     * @var integer
     */
    private static $m_object_tags;

    /**
     * @var  integer
     */
    private static $m_object_cmdbstatus;

    /**
     * @var  integer
     */
    private static $m_object_description;

    /**
     * @var  integer
     */
    private static $m_object_hostname;

    /**
     * @var  integer
     */
    private static $m_object_live_mode = isys_import_handler_cmdb::C__CREATE;

    /**
     * Object-Mode: create or update.
     *
     * @var  string
     */
    private static $m_object_mode = self::CL__OBJECT_MODE__CREATE;

    /**
     * @var  integer
     */
    private static $m_object_purpose;

    /**
     * @var  integer
     */
    private static $m_object_sysid;

    /**
     * @var  integer
     */
    private static $m_object_title;

    /**
     * @var  integer
     */
    private static $m_object_type;

    /**
     * @var  array
     */
    private static $m_object_type_skip = [];

    /**
     * @var  array
     */
    private static $m_prop_search;

    /**
     * Property rules.
     *
     * @var  array
     */
    private static $m_property_rules = [];

    /**
     * Hide properties by column.
     *
     * @see  self::create_category_map().
     * @var  array
     */
    private static $m_property_visibility = [
        'isys_catg_ip_list__isys_net_type__id',
        'isys_catg_ip_list__isys_ip_assignment__id',
        'isys_catg_ip_list__isys_cats_net_ip_addresses_list__id',
        'isys_catg_ip_list__isys_ipv6_assignment__id',
        'isys_catg_ip_list__isys_catg_port_list__id',
        'isys_catg_ip_list__isys_catg_log_port_list__id',
        'isys_catg_accounting_list__isys_guarantee_period_unit__id'
    ];

    /**
     * @var  isys_cmdb_dao
     */
    private static $m_s_dao;

    /**
     * Variable for deciding wether to overwrite or ignore empty values.
     *
     * @var  boolean
     */
    private static $m_singlevalue_overwrite_empty_values = true;

    /**
     * @var  boolean
     */
    private static $m_step_construct = false;

    /**
     * Contains the position which fields will be used for the identification of existing objects.
     *
     * @var  array
     */
    private $m_matching_csv_identifiers = [];

    /**
     * Contains identifiers which will be used to identify existing objects.
     *
     * @var  array
     */
    private $m_matching_identifiers = [];

    /**
     * Contains the number of minimum matches when using identification fields.
     *
     * @var integer
     */
    private $m_matching_min_match_limit = 1;

    /**
     * Supported unit tables.
     *
     * @see  self::csv_helper__convert().
     * @var  array
     */
    private static $m_valid_unit_tables = [
        'isys_ac_air_quantity_unit',
        'isys_ac_refrigerating_capacity_unit',
        'isys_depth_unit',
        'isys_frequency_unit',
        'isys_guarantee_period_unit',
        'isys_memory_unit',
        'isys_monitor_unit',
        'isys_san_capacity_unit',
        'isys_stor_unit',
        'isys_temp_unit',
        'isys_unit_of_time',
        'isys_volume_unit',
        'isys_wan_capacity_unit',
        'isys_weight_unit',
        'isys_port_speed'
    ];

    /**
     * @var  array
     */
    private $m_assignment_map = [];

    /**
     * @var  array
     */
    private $m_category_map;

    /**
     * @var  array
     */
    private $m_created_object_cache = [];

    /**
     * Instance of the dialog admin DAO.
     *
     * @var  isys_cmdb_dao_dialog_admin
     */
    private $m_dao_dialog;

    /**
     * @var  boolean
     */
    private $m_import_status = true;

    /**
     * The i-doit Logger instance
     *
     * @var  Logger
     */
    private $m_log = null;

    /**
     * The directory where the LOG file is to be found.
     *
     * @var  string
     */
    private $m_log_dir = '';

    /**
     * The name of the LOG file.
     *
     * @var  string
     */
    private $m_log_file = '';

    /**
     * The Monolog TestHandler.
     *
     * @var  TestHandler
     */
    private $m_log_handler = null;

    /**
     * This array will be used to define object relations (attached object type, create object if it could not be found).
     *
     * @var array
     */
    private $m_object_type_assignment = [];

    /**
     * @var  array
     */
    private $m_raw_data;

    /**
     * @var array
     */
    private $m_record_cycle = [
        C__RECORD_STATUS__NORMAL,
        C__RECORD_STATUS__ARCHIVED => 'C__LOGBOOK_EVENT__CATEGORY_ARCHIVED',
        C__RECORD_STATUS__DELETED  => 'C__LOGBOOK_EVENT__CATEGORY_DELETED',
        C__RECORD_STATUS__PURGE    => 'C__LOGBOOK_EVENT__CATEGORY_PURGED',
    ];

    /**
     * This will be set to true if the mapping does not contain a "object-title" but instead first- or lanstname (or "title" of organization / persongroup).
     *
     * @var  array
     */
    private $m_special_title = false;

    /**
     * This array will hold the current column index (used for the helper).
     *
     * @var  integer
     */
    private $m_tmp_index = null;

    /**
     * @var  array
     */
    private $m_transformed_data = [];

    /**
     * @var CiMatcher
     */
    private $m_object_matcher = null;

    /**
     * @var array
     */
    private $m_category_objtype_map = [];

    /**
     * List of updated categories as constants
     *
     * @var array
     */
    private $m_updated_categories = [];

    /**
     * @var array
     */
    private $currentCategoryDataForSync = [];

    /**
     * @var  integer
     */
    private static $currentRow;

    /**
     * @var isys_cache_keyvalue
     */
    private $cacheObject = null;

    /** @var array */
    private array $emptyValues = [];

    /**
     * @var array
     */
    private static $objectDataChanged = [];

    /**
     * @var int|null
     */
    private static ?int $importLogId = null;

    /**
     * @param string $str
     *
     * @return string
     * @see ID-10860 In PHP 8.3 'utf8_encode' is deprecated and should no longer be used.
     */
    private static function encode(string $str): string
    {
        if (function_exists('mb_convert_encoding')) {
            return mb_convert_encoding($str, 'UTF-8', 'ISO-8859-1');
        }

        if (PHP_VERSION_ID < 80300) {
            return utf8_encode($str);
        }

        return $str;
    }

    /**
     * @return isys_module_import_csv
     */
    public function setCacheObject(isys_cache_keyvalue $cacheObject)
    {
        $this->cacheObject = $cacheObject;
        return $this;
    }

    /**
     * @param $namespace
     */
    public function invalidateCache($namespace)
    {
        isys_cache::keyvalue()->ns($namespace)
            ->ns_invalidate($namespace);
    }

    /**
     * Returns the category map.
     *
     * @param   boolean $p_generate_new
     *
     * @return  array
     */
    public static function get_category_map($p_generate_new = false)
    {
        if (self::$m_activate_caching === false || $p_generate_new == true) {
            return self::create_category_map();
        } else {
            if (!file_exists(BASE_DIR . isys_module_import::$m_path_to_category_map)) {
                self::create_category_map();
            }

            return Unserialize::toArray(file_get_contents(BASE_DIR . isys_module_import::$m_path_to_category_map));
        }
    }

    /**
     * Get csv profiles.
     *
     * @param   integer $p_profile_id
     *
     * @return  array
     * @throws  Exception
     * @throws  isys_exception_database
     */
    public static function get_profiles($p_profile_id = null)
    {
        $l_result = [];
        $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);
        $l_sql = 'SELECT * FROM isys_csv_profile';

        if ($p_profile_id !== null && $p_profile_id > 0) {
            $l_sql .= ' WHERE isys_csv_profile__id = ' . $l_dao->convert_sql_id($p_profile_id) . ';';
        }

        $l_res = $l_dao->retrieve($l_sql);

        if (is_countable($l_res) && count($l_res)) {
            while ($l_row = $l_res->get_row()) {
                $l_result[] = [
                    'id'              => $l_row['isys_csv_profile__id'],
                    'title'           => $l_row['isys_csv_profile__title'],
                    'fileinformation' => $l_row['isys_csv_profile__fileinfo'],
                    'data'            => $l_row['isys_csv_profile__data'],
                    'description'     => $l_row['isys_csv_profile__description'],
                ];
            }
        }

        return $l_result;
    }

    /**
     * Save/Create a csv profile.
     *
     * @param   string  $p_title
     * @param   array   $p_data
     * @param   integer $p_id
     *
     * @return  boolean
     */
    public static function save_profile($p_title, $p_data, $p_id = null)
    {
        $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);

        if (empty($p_title) && $p_id > 0) {
            isys_module_import::getAuth()->check(isys_auth::EDIT, 'csv_import_profiles');

            $l_sql = 'UPDATE isys_csv_profile
				SET isys_csv_profile__data = ' . $l_dao->convert_sql_text(isys_format_json::encode($p_data)) . '
				WHERE isys_csv_profile__id = ' . $l_dao->convert_sql_id($p_id) . ';';
        } else {
            isys_module_import::getAuth()->check(isys_auth::CREATE, 'csv_import_profiles');

            $l_sql = 'INSERT INTO isys_csv_profile
				SET isys_csv_profile__title = ' . $l_dao->convert_sql_text($p_title) . ',
				isys_csv_profile__data = ' . $l_dao->convert_sql_text(isys_format_json::encode($p_data)) . ';';
        }

        return ($l_dao->update($l_sql) && $l_dao->apply_update());
    }

    /**
     * Delete profile.
     *
     * @param   integer $p_id
     *
     * @return  bool
     * @throws  isys_exception_dao
     */
    public static function delete_profile($p_id)
    {
        if ($p_id > 0) {
            /** @var isys_cmdb_dao $l_dao */
            $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);

            return ($l_dao->update('DELETE FROM isys_csv_profile WHERE isys_csv_profile__id = ' . $l_dao->convert_sql_id($p_id) . ';') && $l_dao->apply_update());
        }

        return true;
    }

    /**
     * @return isys_component_template_language_manager
     */
    private static function languageManager()
    {
        return isys_application::instance()->container->get('language');
    }

    /**
     * @param array $categoryMap
     * @param string $mapKey
     * @param string $tag
     * @param array $properties
     */
    private static function assignPropertyToCategoryMap(&$categoryMap, $mapKey, $tag, $properties)
    {
        $property = $properties[$tag];
        $languageManager = self::languageManager();

        /**
         * Prevent displaying explicitly disabled properties
         *
         * @see ID-6045
         */
        if (!in_array($property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD], self::$m_property_visibility)) {
            // @see ID-2617 if we support the method why should it not be visible?
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__VISIBLE] = true;
        }

        // We support the mehtod.
        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__MODE] = $property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1];
        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__TYPE] = $languageManager->get(ltrim(array_search($property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1], self::$m_allowed_properties), '_'));

        // @see ID-9045 Update the 'type' name, if we handle a multi-select object browser.
        if ($property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1] === 'exportCustomFieldObject'
            && isset($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['multiselection'])
            && $property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['multiselection']) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__TYPE] = $languageManager->get('LC__MODULE__CUSTOM_FIELDS__OBJECT_BROWSER_MULTISELECTION');
        }

        if (isset($property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][2])) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__PARAM] = $property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][2];

            /* Do we have an unit property */
            if (isset($property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__UNIT])) {
                $l_unit_property = $properties[$property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__UNIT]];
                $unitTable = ($l_unit_property[C__PROPERTY__DATA][C__PROPERTY__DATA__REFERENCES][0] ?: $l_unit_property[C__PROPERTY__DATA][C__PROPERTY__DATA__SOURCE_TABLE]);
                if (self::check_property_unit($unitTable)) {
                    $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__HELPER__IS_RESTRICTED_UNIT] = true;
                }
                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__PARAM] = [
                    'method'     => $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__PARAM][0],
                    'unit_table' => $unitTable,
                    'unit_row'   => $l_unit_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD],
                    'unit_tag'   => $property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__UNIT]
                ];
            }
        }

        if (isset($property[C__PROPERTY__DATA][C__PROPERTY__DATA__REFERENCES])) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__REFERENCES] = $property[C__PROPERTY__DATA][C__PROPERTY__DATA__REFERENCES];
        }

        if (isset($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_strTable'])) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__TABLE] = $property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_strTable'];
        }

        // ID-3524  Check for p_arData callback.
        if (isset($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData'])) {
            if (is_object($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData']) &&
                is_a($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData'], 'isys_callback')) {
                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__CALLBACK] = serialize($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData']);
            } elseif (is_array($property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData'])) { // @see ID-5022 We need the array data
                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__ARRAY_DATA] = $property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_arData'];
            }
        }
    }

    /**
     * @param array  $categoryMap
     * @param string $mapKey
     * @param string $tag
     * @param string $addonMethodIdentifier
     * @param array  $properties
     */
    private static function assignAddonPropertyToCategoryMap(&$categoryMap, $mapKey, $tag, $addonMethodIdentifier, $properties)
    {
        $propertyObject = $properties[$tag];
        $languageManager = self::languageManager();

        if (!$propertyObject instanceof Property) {
            $propertyObject = Property::createInstanceFromArray($propertyObject);
        }

        $propertyTitle = $propertyObject->getInfo()->getTitle();
        $callBack = $propertyObject->getFormat()->getCallback();

        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__MODE] = $addonMethodIdentifier;
        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__TYPE] = 'Addon-Method';

        $references = $propertyObject->getData()->getReferences();
        $uiParams = $propertyObject->getPropertyUiOffset(Property::C__PROPERTY__UI__PARAMS);

        if (!empty($references)) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__REFERENCES] = $references;
        }

        if (isset($uiParams['p_strTable'])) {
            $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__TABLE] = $uiParams['p_strTable'];
        }

        // ID-3524  Check for p_arData callback.
        if (isset($uiParams['p_arData'])) {
            if (is_object($uiParams['p_arData']) && is_a($uiParams['p_arData'], 'isys_callback')) {
                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__CALLBACK] = serialize($uiParams['p_arData']);
            }

            if (is_array($uiParams['p_arData'])) { // @see ID-5022 We need the array data
                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__ARRAY_DATA] = $uiParams['p_arData'];
            }
        }
    }

    /**
     * @param array                  $categoryMap
     * @param string                 $mapKey
     * @param int                    $categoryType
     * @param isys_cmdb_dao_category $categoryDao
     */
    private static function buildPropertyMap(&$categoryMap, $mapKey, $categoryType, $categoryDao)
    {
        $languageManager = self::languageManager();
        $propertiesFromAddon = self::$addonMethods;
        $properties = $categoryDao->get_properties();
        $daoClassName = get_class($categoryDao);

        // Walk through $m_data_information array.
        foreach ($properties as $tag => $l_property) {
            // Our first condition: Property have to be importable.
            if ($l_property[C__PROPERTY__PROVIDES][C__PROPERTY__PROVIDES__IMPORT] || $tag == 'contact_object') {
                $propertyTitle = $languageManager->get($l_property[C__PROPERTY__INFO][C__PROPERTY__INFO__TITLE]);

                // @see ID-9003 Escape custom category property titles.
                if ($categoryType == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                    $propertyTitle = isys_glob_htmlentities($propertyTitle);
                }

                $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag] = [
                    self::CL__CAT__PROPERTY__TITLE        => $propertyTitle,
                    self::CL__CAT__PROPERTY__ROW          => $l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD],
                    self::CL__CAT__PROPERTY__TAG          => $tag,
                    self::CL__CAT__PROPERTY__UI_PARAMS    => $l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS],
                    self::CL__CAT__PROPERTY__ESSENTIALITY => self::get_essentiality(
                        $categoryMap[$mapKey][self::CL__CAT__TABLE],
                        $l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD],
                        $categoryDao
                    ),
                    self::CL__CAT__PROPERTY__FORMTAG      => $l_property[C__PROPERTY__UI][C__PROPERTY__UI__ID],
                ];

                // @see ID-3183 This will be used for custom category dialog+ fields
                if ($categoryType == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                    if (isset($l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_identifier']) &&
                        !empty($l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_identifier'])) {
                        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__IDENTIFIER] = $l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['p_identifier'];
                    }

                    if (isset($l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['multiselect']) &&
                        $l_property[C__PROPERTY__UI][C__PROPERTY__UI__PARAMS]['multiselect'] === true) {
                        $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag]['multiselect'] = true;
                    }
                }

                // Visibility-Handling.
                if (in_array($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD], self::$m_property_visibility) ||
                    self::check_property_rules($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]) ||
                    self::check_property_unit($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]) ||
                    (isset($l_property[C__PROPERTY__PROVIDES][C__PROPERTY__PROVIDES__VIRTUAL]) &&
                        $l_property[C__PROPERTY__PROVIDES][C__PROPERTY__PROVIDES__VIRTUAL] === true)) {
                    $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__VISIBLE] = false;
                } else {
                    $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__VISIBLE] = true;
                }

                if (self::check_property_unit($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD])) {
                    $categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__HELPER__IS_RESTRICTED_UNIT] = true;
                }

                // Method-Handling.
                $callbackIdentifier = @$l_property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1];
                $addonCallbackIdentifier = $daoClassName . '::' . $tag;
                if (isset($callbackIdentifier)) {
                    // Our second condition: Do we support this Method.
                    if (in_array($l_property[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1], self::$m_allowed_properties)) {
                        self::assignPropertyToCategoryMap($categoryMap, $mapKey, $tag, $properties);
                        continue;
                    }

                    if (isset($propertiesFromAddon[$addonCallbackIdentifier])) {
                        self::assignAddonPropertyToCategoryMap($categoryMap, $mapKey, $tag, $addonCallbackIdentifier, $properties);
                        continue;
                    }
                    /* We don't support the method */

                    /* CASE:
                     * Helper is unsupported
                     * Row is essential
                     * Row is not the entryID row
                     * Row is not the isys_obj__id row
                     *
                     * We have to skip the whole category to prevent any SQL Exceptions while importing
                     */
                    if ($categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag][self::CL__CAT__PROPERTY__ESSENTIALITY] &&
                        !strstr($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD], '_list__id') &&
                        !strstr($l_property[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD], '_list__isys_obj__id')) {
                        unset($categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag]);
                        self::add_to_category_skip($mapKey);
                        break;
                    }
                    unset($categoryMap[$mapKey][self::CL__CAT__PROPERTIES][$tag]);
                }
            }
        }
    }

    /**
     * Creates the category map and saves it serialized in isys_module_import::$m_path_to_category_map.
     *
     * @return array
     */
    public static function create_category_map()
    {
        $languageManager = self::languageManager();
        self::$addonMethods = isys_register::factory('csv-import-properties')->get();

        Context::instance()
            ->setContextTechnical(Context::CONTEXT_IMPORT_CSV)
            ->setGroup(Context::CONTEXT_GROUP_IMPORT)
            ->setContextCustomer(Context::CONTEXT_IMPORT_CSV);

        /** @var isys_cmdb_dao $l_dao */
        $l_dao = isys_application::instance()->container->get('cmdb_dao');

        $l_all_categories = $l_dao->get_all_categories([
            isys_cmdb_dao_category::TYPE_FOLDER,
            isys_cmdb_dao_category::TYPE_EDIT,
            isys_cmdb_dao_category::TYPE_REAR,
            isys_cmdb_dao_category::TYPE_ASSIGN
        ]);

        $l_category_map = [];

        foreach ($l_all_categories as $l_category_type => $l_categories) {
            foreach ($l_categories as $l_category) {
                if (!class_exists($l_category['class_name'])) {
                    continue;
                }

                // Check whether the dao of category exists and if it should be skipped, or explicitly included.
                if ((!in_array($l_category['const'], self::$m_category_skip, true) && $l_category['type'] != isys_cmdb_dao_category::TYPE_FOLDER) ||
                    ($l_category['type'] == isys_cmdb_dao_category::TYPE_FOLDER && in_array($l_category['const'], self::$m_category_include, true))) {
                    // Get instance of dao and retrieve the $m_data_information array.
                    /** @var isys_cmdb_dao_category $l_category_dao */
                    $l_category_dao = new $l_category['class_name'](isys_application::instance()->database);

                    // Set id of custom category
                    if ($l_category_type == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                        /** @var isys_cmdb_dao_category_g_custom_fields $l_category_dao */
                        $l_category_dao->set_catg_custom_id($l_category['id']);
                    }

                    if ($l_category_type == C__CMDB__CATEGORY__TYPE_SPECIFIC) {
                        $l_parent_res = $l_category_dao->cats_get_parent_cats($l_category['id'], true);
                        if ($l_parent_res->num_rows() > 0) {
                            $l_parent_const = $l_parent_res->get_row_value('isysgui_cats__const');
                            if (
                                in_array($l_parent_const, self::$m_category_skip) ||
                                ($l_category['type'] == isys_cmdb_dao_category::TYPE_FOLDER && !in_array($l_category['const'], self::$m_category_include))
                            ) {
                                continue;
                            }
                        }
                    }

                    // Get properties of category.
                    $properties = $l_category_dao->get_properties();

                    // Check the count of $m_data_information.
                    if (is_countable($properties) && count($properties) > 0) {
                        $l_map_key = $l_category['const'];

                        $categoryTitle = $languageManager->get($l_category['title']);

                        // @see ID-9003 Escape custom category titles.
                        if ($l_category_type == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                            $categoryTitle = isys_glob_htmlentities($categoryTitle);
                        }

                        $l_category_map[$l_map_key] = [
                            self::CL__CAT__ID         => $l_category['id'],
                            self::CL__CAT__TITLE      => $categoryTitle,
                            self::CL__CAT__MULTIVALUE => (bool)$l_category['list_multi_value'],
                            self::CL__CAT__TABLE      => $l_category_dao->get_table(),
                            self::CL__CAT__CLASS      => $l_category['class_name'],
                            self::CL__CAT__CAT_TYPE   => $l_category_type,
                            self::CL__CAT__CONSTANT   => $l_category['const'],
                            self::CL__CAT__TYPE       => $l_category['type']
                        ];

                        if ($l_category_map[$l_map_key][self::CL__CAT__TABLE] == 'isys_person_2_group_list' || $l_category['source_table'] == 'isys_person_2_group') {
                            $l_category_map[$l_map_key][self::CL__CAT__TABLE] = 'isys_person_2_group';
                        }

                        // Check for parent and set data field
                        if ($l_category_type == C__CMDB__CATEGORY__TYPE_GLOBAL) {
                            $l_category_map[$l_map_key][self::CL__CAT__PARENT] = self::get_parent($l_category['id'], 'g', $l_category_dao);
                            $l_category_map[$l_map_key][self::CL__CAT__DATA_FIELD] = $l_category_map[$l_map_key][self::CL__CAT__TABLE] . '__id';
                        } elseif ($l_category_type == C__CMDB__CATEGORY__TYPE_SPECIFIC) {
                            $l_category_map[$l_map_key][self::CL__CAT__PARENT] = self::get_parent($l_category['id'], 's', $l_category_dao);
                            $l_category_map[$l_map_key][self::CL__CAT__DATA_FIELD] = $l_category_map[$l_map_key][self::CL__CAT__TABLE] . '__id';
                        } else {
                            $l_category_map[$l_map_key][self::CL__CAT__DATA_FIELD] = $l_category_map[$l_map_key][self::CL__CAT__TABLE] . '__data__id';
                        }

                        self::buildPropertyMap($l_category_map, $l_map_key, $l_category_type, $l_category_dao);
                    }
                }
            }
        }

        // Clean and modify
        self::clean_category_map($l_category_map);
        self::modify_category_map($l_category_map);
        // Save serialized
        isys_file_put_contents(isys_module_import::$m_path_to_category_map, serialize($l_category_map));

        return $l_category_map;
    }

    /**
     * Setter for the matching identifiers.
     *
     * @param $p_value
     */
    public function set_matching_identifiers($p_value)
    {
        $this->m_matching_identifiers = $p_value;
    }

    /**
     * Setter for the CSV matching identifiers.
     *
     * @param $p_value
     */
    public function set_matching_csv_identifiers($p_value)
    {
        $this->m_matching_csv_identifiers = $p_value;
    }

    /**
     * Method for setting the identification counter.
     *
     * @param integer $p_value
     *
     * @see   ID-4162
     */
    public function set_matching_min_match_limit($p_value)
    {
        $this->m_matching_min_match_limit = $p_value;
    }

    /**
     * Helper method to determine if a row (array of strings) contains UTF-8 data.
     *
     * @param array $csvRow
     *
     * @return bool
     */
    private static function rowContainsUtf8(array $csvRow): bool
    {
        // If at least one "non unicode" character was found (for example a UTF-8 Umlaut), we'll return 'true'.
        return !count(array_filter($csvRow, function ($column) {
            // Check if "non unicode" characters exist in the string.
            return !preg_match('//u', (string)$column);
        }));
    }

    /**
     * Reads the specified csv file and returns the delivered $p_mode area
     * @param string $p_filepath
     * @param string $p_delimiter
     * @param string $p_mode
     * @param int  $p_offset
     * @param int|null $p_limit
     *
     * @return mixed
     * @throws Exception
     */
    public static function get_csv($p_filepath, $p_delimiter, $p_mode, $p_offset = 0, $p_limit = null)
    {
        if (file_exists($p_filepath)) {
            // Enable automatic line ending detection
            ini_set('auto_detect_line_endings', true);
            $l_content = [];
            $l_is_utf8 = true;

            $l_file_res = fopen($p_filepath, 'r');

            if ($p_mode == self::CL__GET__HEAD) {
                $l_content = fgetcsv($l_file_res, 0, $p_delimiter);
                $l_is_utf8 = is_array($l_content) && self::rowContainsUtf8($l_content);
            } elseif ($p_mode == self::CL__GET__HEAD_LENGTH || $p_mode == self::CL__GET__CONTENT__HEADSIZE) {
                $l_row = fgetcsv($l_file_res, 0, $p_delimiter);

                fclose($l_file_res);

                return is_countable($l_row) ? count($l_row) : 0;
            } elseif ($p_mode == self::CL__GET__CONTENT__FIRST_LINE) {
                fgetcsv($l_file_res, 0, $p_delimiter);

                $l_content = fgetcsv($l_file_res, 0, $p_delimiter);
                $l_is_utf8 = is_array($l_content) && self::rowContainsUtf8($l_content);
            } elseif ($p_mode == self::CL__GET__CONTENT) {
                if (!$p_limit) {
                    while ($l_csv_line = fgetcsv($l_file_res, 0, $p_delimiter)) {
                        if (is_array($l_csv_line) && !self::rowContainsUtf8($l_csv_line)) {
                            $l_csv_line = array_map(fn ($line) => self::encode($line), $l_csv_line);
                        }

                        $l_content[] = $l_csv_line;
                    }
                    fclose($l_file_res);
                } else {
                    $csv = Reader::createFromStream($l_file_res);
                    $csv->setDelimiter($p_delimiter);
                    $csv->setHeaderOffset(0);

                    $header = $csv->getHeader();
                    if (count($header) !== count(array_unique($header))) {
                        $checkHeader = $header;
                        foreach ($header as $key => &$item) {
                            $checkHeader[$key] = '';
                            $counter = 0;
                            $newItem = $item;

                            while (in_array($newItem, $checkHeader)) {
                                $newItem = $item . $counter++;
                            }
                            $item = $checkHeader[$key] = $newItem;
                        }
                    }

                    $stmt = (new Statement())->offset($p_offset)
                        ->limit($p_limit);
                    $records = $stmt->process($csv, $header);

                    $l_content[] = $records->getHeader();

                    foreach ($records->getRecords() as $record) {
                        $record = array_values($record);

                        if (!self::rowContainsUtf8($record)) {
                            $record = array_map(fn ($line) => self::encode($line), $record);
                        }

                        $l_content[] = $record;
                    }

                    fclose($l_file_res);
                }

                if (count($l_content)) {
                    // Get the csv content without the header.
                    if (self::$m_header) {
                        unset($l_content[0]);
                    }

                    return array_values($l_content);
                } else {
                    throw new Exception("CSV-File empty");
                }
            }

            if (!$l_is_utf8) {
                $l_content = array_map(fn ($line) => self::encode($line), $l_content);
            }

            if (is_resource($l_file_res)) {
                fclose($l_file_res);
            }

            return $l_content;
        }

        return false;
    }

    /**
     * Returns all importable categories for smarty template (KEY=>CATGID and VALUE=>TITLE).
     *
     * @param   string $p_multivalue_type See constants
     * @param   mixed  $p_object_type
     *
     * @return  array
     */
    public static function get_importable_categories($p_multivalue_type, $p_object_type = false)
    {
        $language = isys_application::instance()->container->get('language');

        $l_return = [
            $language->get('LC__UNIVERSAL__EXTRAS')                 => [
                '-' => '-'
            ],
            $language->get('LC__UNIVERSAL__OBJECT_SPECIFIC_FIELDS') => [
                'object_title'        => $language->get('LC__UNIVERSAL__OBJECT_TITLE'),
                'object_type_dynamic' => $language->get('LC__UNIVERSAL__OBJECT_TYPE'),
                'object_sysid'        => $language->get('LC__UNIVERSAL__OBJECT_SYSID'),
                'object_cmdbstatus'   => $language->get('LC__UNIVERSAL__CMDB_STATUS'),
                'object_purpose'      => $language->get('LC__CMDB__CATG__PURPOSE'),
                'object_category'     => $language->get('LC__CMDB__CATG__CATEGORY'),
                'object_tags'         => $language->get('LC__CMDB__CATG__GLOBAL_TAG') . ' (' . $language->get('LC__UNIVERSAL__CSV_MULTISELECT_VIA_SEMICOLON') . ')',
                'object_description'  => $language->get('LC__UNIVERSAL__DESCRIPTION')
            ]
        ];

        $l_catg = $l_cats = $l_catc = [];
        $l_category_map = self::get_category_map();

        if (!is_object(self::$m_s_dao)) {
            self::$m_s_dao = isys_cmdb_dao::instance(isys_application::instance()->database);
        }

        if ($p_object_type !== false) {
            $l_catg = self::$m_s_dao->gui_get_catg_with_subcats_by_objtype_id($p_object_type);
            $l_cats = self::$m_s_dao->gui_get_cats_with_subcats_by_objtype_id($p_object_type);
            $l_catc_res = self::$m_s_dao->gui_get_catg_custom_by_objtype_id($p_object_type);

            if (is_countable($l_catc_res) && count($l_catc_res)) {
                while ($l_catc_row = $l_catc_res->get_row()) {
                    $l_catc[$l_catc_row['isysgui_catg_custom__id']] = true;
                }
            }
        }

        foreach ($l_category_map as $l_cat_const => $l_cat_data) {
            foreach ($l_cat_data[self::CL__CAT__PROPERTIES] as $l_prop_key => $l_prop_data) {
                if (!$l_prop_data[self::CL__CAT__PROPERTY__VISIBLE]) {
                    continue;
                }

                $l_objtypes = [];
                $l_parent_prefix = '';

                // Check if we need to skip any categories.
                if ($p_object_type !== false) {
                    if ($l_cat_data[self::CL__CAT__CAT_TYPE] == C__CMDB__CATEGORY__TYPE_GLOBAL && !isset($l_catg[$l_cat_data[self::CL__CAT__ID]])) {
                        continue;
                    }

                    if ($l_cat_data[self::CL__CAT__CAT_TYPE] == C__CMDB__CATEGORY__TYPE_SPECIFIC && !isset($l_cats[$l_cat_data[self::CL__CAT__ID]])) {
                        continue;
                    }

                    if ($l_cat_data[self::CL__CAT__CAT_TYPE] == C__CMDB__CATEGORY__TYPE_CUSTOM && !isset($l_catc[$l_cat_data[self::CL__CAT__ID]])) {
                        continue;
                    }
                }

                if (is_array($l_cat_data[self::CL__CAT__PARENT])) {
                    if (!empty($l_cat_data[self::CL__CAT__PARENT][0]['isysgui_catg__title'])) {
                        $l_parent_prefix = $language->get($l_cat_data[self::CL__CAT__PARENT][0]['isysgui_catg__title']) . ': ';
                    } elseif (!empty($l_cat_data[self::CL__CAT__PARENT][0]['isysgui_cats__title'])) {
                        foreach ($l_cat_data[self::CL__CAT__PARENT] as $parentCategory) {
                            $l_parent_prefix .= $language->get($parentCategory['isysgui_cats__title']) . ', ';
                        }
                        $l_parent_prefix = rtrim($l_parent_prefix, ', ') . ': ';
                    }
                }

                switch ($l_cat_data[self::CL__CAT__CAT_TYPE]) {
                    default:
                    case C__CMDB__CATEGORY__TYPE_GLOBAL:
                        $l_cat_type = $language->get('LC__CMDB__GLOBAL_CATEGORIES');
                        break;
                    case C__CMDB__CATEGORY__TYPE_SPECIFIC:
                        $l_cat_type = $language->get('LC__CMDB__SPECIFIC_CATEGORIES');

                        if ($p_object_type === false) {
                            $l_objtype_res = self::$m_s_dao->get_objtype_by_cats_id($l_cat_data[self::CL__CAT__ID]);

                            while ($l_objtype_row = $l_objtype_res->get_row()) {
                                $l_objtypes[] = $language->get($l_objtype_row['isys_obj_type__title']);
                            }
                        }
                        break;
                    case C__CMDB__CATEGORY__TYPE_CUSTOM:
                        $l_cat_type = $language->get('LC__CMDB__CUSTOM_CATEGORIES');
                        break;
                }

                $l_return[$l_cat_type][$l_cat_const . '::' . $l_prop_key] = $l_parent_prefix . $l_cat_data[self::CL__CAT__TITLE] . ' > ' .
                    $l_prop_data[self::CL__CAT__PROPERTY__TITLE] .
                    (!empty($l_prop_data[self::CL__CAT__PROPERTY__TYPE]) ? ' (' . $l_prop_data[self::CL__CAT__PROPERTY__TYPE] . ')' : '') .
                    (count($l_objtypes) > 1 ? ' (' . implode(', ', $l_objtypes) . ')' : '');
            }
        }

        foreach ($l_return as &$l_data) {
            if (is_array($l_data)) {
                asort($l_data);
            }
        }

        // Add Separator Entry to the extras optgroup if multivalue mode is equal LINE.
        if ('multivalue_' . $p_multivalue_type == self::CL__MULTIVALUE_TYPE__COLUMN) {
            $l_return[$language->get('LC__UNIVERSAL__EXTRAS')]['separator'] = 'Separator';
        }

        return $l_return;
    }

    /**
     * Returns objects specific categories as array
     *
     * @param int $p_object_type
     *
     * @return array
     */
    public static function get_specific_categories_of_object_type($p_object_type)
    {
        $l_specific_categories = [];

        // Global categories
        /** @var isys_cmdb_dao $l_dao */
        $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);
        $l_res = $l_dao->get_all_catg_by_obj_type_id($p_object_type);

        if ($l_res->num_rows()) {
            while ($l_row = $l_res->get_row()) {
                $l_specific_categories[] = $l_row['isysgui_catg__const'];
            }
        }

        // Custom categories
        $l_res = $l_dao->get_catg_custom_by_obj_type($p_object_type);

        if ($l_res->num_rows()) {
            while ($l_row = $l_res->get_row()) {
                $l_specific_categories[] = $l_row['isysgui_catg_custom__const'];
            }
        }

        // Specific categories
        $l_objtypes_specific_categories = $l_dao->gui_get_cats_with_subcats_by_objtype_id($p_object_type);
        if (is_countable($l_objtypes_specific_categories) && count($l_objtypes_specific_categories) > 0) {
            $l_specific_categories = array_merge($l_specific_categories, array_map(function ($l_arr) {
                return $l_arr['isysgui_cats__const'];
            }, $l_objtypes_specific_categories));
        }

        return $l_specific_categories;
    }

    /**
     * Get all objecttypes and their groups.
     *
     * @return  array
     * @throws  Exception
     * @throws  isys_exception_database
     */
    public static function get_objecttypes()
    {
        /** @var isys_cmdb_dao $l_dao */
        $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);

        $l_objgroups = [];
        $l_objtypes = [];
        $l_res_objgroup = $l_dao->retrieve("SELECT * FROM isys_obj_type_group WHERE TRUE;");

        if ($l_res_objgroup->num_rows()) {
            while ($l_row = $l_res_objgroup->get_row()) {
                $l_objgroups[$l_row['isys_obj_type_group__id']] = isys_application::instance()->container->get('language')
                    ->get($l_row['isys_obj_type_group__title']);
            }

            if (count($l_objgroups)) {
                $l_sql_objtype = 'SELECT isys_obj_type__const, isys_obj_type__title FROM isys_obj_type WHERE isys_obj_type__isys_obj_type_group__id = ';
                foreach ($l_objgroups as $l_obj_group_id => $l_obj_group_title) {
                    $l_res_objtype = $l_dao->retrieve($l_sql_objtype . $l_dao->convert_sql_id($l_obj_group_id));

                    if (count($l_res_objtype)) {
                        while ($l_row = $l_res_objtype->get_row()) {
                            if (!in_array($l_row['isys_obj_type__const'], self::$m_object_type_skip)) {
                                $l_objtypes[$l_obj_group_title][$l_row['isys_obj_type__const']] = isys_application::instance()->container->get('language')
                                    ->get($l_row['isys_obj_type__title']);
                            }
                        }
                    }

                    if (is_array($l_objtypes[$l_obj_group_title])) {
                        asort($l_objtypes[$l_obj_group_title]);
                    }
                }
            }
        }

        return $l_objtypes;
    }

    /**
     * Ajax-request handler
     *
     * @param string $p_action
     */
    public static function handle_ajax_request($p_action)
    {
        if (!empty($p_action)) {
            switch ($p_action) {
                case 'delete_import':
                    echo isys_format_json::encode((bool)unlink(C__IMPORT__DIRECTORY . $_POST['filename']));
                    break;

                case 'load_profiles':
                    header('Content-Type: application/json');

                    $profiles = [];
                    $auth = isys_module_import::getAuth();

                    if ($auth->is_allowed_to($auth::VIEW, 'csv_import_profiles')) {
                        $profiles = self::get_profiles();
                    }

                    echo isys_format_json::encode($profiles);
                    break;
                case 'save_profile':
                    $l_data = isys_format_json::decode($_POST['profileData'], true);

                    try {
                        if (self::save_profile($l_data['title'], $l_data['data'], $_POST['profileID'])) {
                            isys_notify::success(isys_application::instance()->container->get('language')
                                ->get(($_POST['profileID']) ? 'LC__MODULE__IMPORT__CSV__MSG__OVERWRITE' : 'LC__MODULE__IMPORT__CSV__MSG__SAVED'));
                        } else {
                            isys_notify::error(isys_application::instance()->container->get('language')
                                ->get('LC__MODULE__IMPORT__CSV__MSG__SAVE_FAIL'));
                        }
                    } catch (isys_exception_auth $e) {
                        isys_notify::error($e->getMessage(), ['sticky' => true]);
                    }

                    break;

                case 'file_exist':
                    echo isys_format_json::encode((bool)file_exists(C__IMPORT__DIRECTORY . $_POST['filename']));
                    break;

                case 'import':
                    // @see ID-10589 Unblock the session for other processes.
                    isys_application::instance()->container->get('session')->write_close();
                    header('Content-Type: application/json; charset=utf-8');

                    echo isys_format_json::encode(self::process_import());
                    die;
                    break;
            }
        } else {
            /**
             * @todo
             * If $p_action is empty we have to throw an exception
             */
        }
    }

    /**
     *
     * @return  array
     */
    public static function process_import()
    {
        $l_return = [
            'success' => true,
            'data'    => null,
            'message' => null
        ];

        try {
            switch ($_POST['csv-log-detail']) {
                case 'simple':
                    $l_log_level = Level::Error->value;
                    break;
                default:
                case 'normal':
                    $l_log_level = Level::Info->value;
                    break;
                case 'all':
                    $l_log_level = Level::Debug->value;
                    break;
            }

            if (defined($_POST['object_type'])) {
                $_POST['object_type'] = constant($_POST['object_type']);
            }

            $l_importer = new isys_module_import_csv(
                C__IMPORT__DIRECTORY . $_POST['csv_filename'],
                $_POST['csv_separator'],
                $_POST['multivalue'],
                // 'row', 'column', 'comma'
                $_POST['object_title'],
                $_POST['object_type'],
                $_POST['object_type_dynamic'],
                $_POST['object_purpose'],
                $_POST['object_category'],
                $_POST['object_sysid'],
                $_POST['object_cmdbstatus'],
                $_POST['object_description'],
                !!$_POST['csv_header'],
                !!$_POST['csv_default_template'],
                $_POST['prop_search'],
                $_POST['multivalue_mode'],
                $l_log_level,
                $_POST['singlevalue_overwrite_empty_values'],
                $_POST['object_tags']
            );

            if (isset($_POST['identificator_min_count']) && $_POST['identificator_min_count'] > 1) {
                $l_importer->set_matching_min_match_limit($_POST['identificator_min_count']);
            }

            if (isset($_POST['special-title'])) {
                $l_importer->set_special_title_index(explode(',', $_POST['special-title']));
            }

            $l_count = 0;

            if (!$_POST['csv-offset'] || $_POST['csv-offset'] == 0) {
                $reader = Reader::createFromPath(C__IMPORT__DIRECTORY . $_POST['csv_filename'], 'r');
                $l_count = $reader->count();
            }

            $cacheNamespace = "csv-import-info-" . date('Y-m-d');
            if ((int)$_POST['invalidateCache'] === 1) {
                $l_importer->invalidateCache($cacheNamespace);
            }

            $l_importer->initialize($_POST['assignment'], $_POST['obj_type_assignment'] ?: [], $_POST['csv-offset'] ?? 0, $_POST['csv-limit'] ?? null);
            $l_importer->setCacheObject(isys_cache::keyvalue()->ns($cacheNamespace));
            $l_importer->import();

            $l_return['data'] = [
                'csv_objects'  => array_values($l_importer->get_created_objects()),
                'csv_status'   => $l_importer->get_import_status(),
                'csv_log_path' => $l_importer->get_log_path(),
                'csv_log'      => array_values($l_importer->get_log_records($l_log_level)),
                'csv_count'    => $l_count
            ];
        } catch (Exception $e) {
            $l_return['success'] = false;
            $l_return['message'] = $e->getMessage();
        }

        return $l_return;
    }

    /**
     * Checks whether a rule of $m_property_rules get matched in the row string.
     *
     * @param   string $p_row
     *
     * @return  boolean
     */
    private static function check_property_rules($p_row)
    {
        if (is_array(self::$m_property_rules)) {
            foreach (self::$m_property_rules as $l_substring) {
                if (stristr($p_row, $l_substring)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Checks whether a rowstring includes any unit tables. It is used to set the visibility of properties.
     *
     * @param   string $p_row
     *
     * @return  boolean
     */
    private static function check_property_unit($p_row)
    {
        if (is_array(self::$m_valid_unit_tables)) {
            foreach (self::$m_valid_unit_tables as $l_substring) {
                if (stristr($p_row, $l_substring)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Gets the parent of the given category.
     *
     * @param   integer       $p_category_id
     * @param   string        $p_category_abbr
     * @param   isys_cmdb_dao $p_category_dao
     *
     * @return  mixed
     */
    private static function get_parent($p_category_id, $p_category_abbr, $p_category_dao)
    {
        switch ($p_category_abbr) {
            case 's':
                $resultSet = $p_category_dao->cats_get_parent_cats($p_category_id, true);
                $parentCategories = [];
                if (is_countable($resultSet) && count($resultSet) > 0) {
                    while ($categoryData = $resultSet->get_row()) {
                        $parentCategories[] = $categoryData;
                    }
                }

                return $parentCategories;
                break;
            case 'g':
            default:
                $l_sql = 'SELECT parent.* FROM isysgui_cat' . $p_category_abbr . ' AS child
                    INNER JOIN isysgui_cat' . $p_category_abbr . ' AS parent ON parent.isysgui_cat' . $p_category_abbr . '__id = child.isysgui_cat' . $p_category_abbr . '__parent
                    WHERE child.isysgui_cat' . $p_category_abbr . '__id = ' . $p_category_dao->convert_sql_id($p_category_id) . ' LIMIT 1;';

                return [
                    $p_category_dao->retrieve($l_sql)
                        ->get_row()
                ];
                break;
        }
    }

    /**
     * Handle category blacklist.
     *
     * @param  array $p_category_map
     */
    private static function clean_category_map(&$p_category_map)
    {
        // Walk through $m_category_skip.
        foreach (self::$m_category_skip as $l_category_const) {
            if (defined($l_category_const)) {
                if (isset($p_category_map[$l_category_const])) {
                    unset($p_category_map[$l_category_const]);
                }
            }
        }

        // Unset all categories without any properties.
        foreach ($p_category_map as $l_category_id => $l_category_data) {
            if (!is_countable($l_category_data[self::CL__CAT__PROPERTIES]) || !count($l_category_data[self::CL__CAT__PROPERTIES])) {
                unset($p_category_map[$l_category_id]);
            }
        }
    }

    /**
     * Virtual properties.
     *
     * @return  array
     */
    private static function virtual_properties()
    {
        return [
            'C__CATG__IP' => [
                'virtual_ip'              => [
                    self::CL__CAT__PROPERTY__TITLE   => isys_application::instance()->container->get('language')
                        ->get('LC__CATP__IP__ADDRESS'),
                    self::CL__CAT__PROPERTY__ROW     => 'virtual',
                    self::CL__CAT__PROPERTY__TAG     => 'virtual_ip',
                    self::CL__CAT__PROPERTY__VISIBLE => true,
                    self::CL__CAT__PROPERTY__MODE    => 'virtual'
                ],
                'virtual_ip_assignment'   => [
                    self::CL__CAT__PROPERTY__TITLE   => isys_application::instance()->container->get('language')
                        ->get('LC__CATP__IP__ASSIGN'),
                    self::CL__CAT__PROPERTY__ROW     => 'virtual',
                    self::CL__CAT__PROPERTY__TAG     => 'virtual_ip_assignment',
                    self::CL__CAT__PROPERTY__VISIBLE => true,
                    self::CL__CAT__PROPERTY__MODE    => 'virtual',
                    self::CL__CAT__PROPERTY__TYPE    => isys_application::instance()->container->get('language')
                        ->get('LC__UNIVERSAL__DIALOG')
                ],
                'virtual_port_assignment' => [
                    self::CL__CAT__PROPERTY__TITLE   => isys_application::instance()->container->get('language')
                        ->get('LC__CATG__IP__ASSIGNED_PORT'),
                    self::CL__CAT__PROPERTY__ROW     => 'virtual',
                    self::CL__CAT__PROPERTY__TAG     => 'virtual_port_assignment',
                    self::CL__CAT__PROPERTY__VISIBLE => true,
                    self::CL__CAT__PROPERTY__MODE    => 'virtual',
                    self::CL__CAT__PROPERTY__TYPE    => isys_application::instance()->container->get('language')
                        ->get('LC__UNIVERSAL__DIALOG')
                ]
            ]
        ];
    }

    /**
     * Default categorymap manipulating method. Currently adds virtual properties.
     *
     * @param  array &$p_category_map
     */
    private static function modify_category_map(&$p_category_map)
    {
        $l_virtual_properties = self::virtual_properties();

        if (count($l_virtual_properties)) {
            foreach ($l_virtual_properties as $l_catg_id => $l_vproperties) {
                foreach ($l_vproperties as $l_vkey => $l_vprop) {
                    $p_category_map[$l_catg_id][self::CL__CAT__PROPERTIES][$l_vkey] = $l_vprop;
                }
            }
        }
    }

    /**
     * Adds an category to $m_category_skip.
     * $p_const have to be the category constant as string
     *
     * @param  string $p_const
     */
    private static function add_to_category_skip($p_const)
    {
        self::$m_category_skip[] = $p_const;
    }

    /**
     * Check whether the row is nullable in the mysql table to get its essentiality. Only rows of %int% are important.
     *
     * @param   string        $p_table
     * @param   array         $p_column
     * @param   isys_cmdb_dao $p_dao
     *
     * @return  mixed
     */
    private static function get_essentiality($p_table, $p_column, $p_dao)
    {
        if ($p_table) {
            // This will happen very often occur when handling object browser fields.
            if ($p_column === $p_table . '__id') {
                return false;
            }

            try {
                $l_res = $p_dao->retrieve("SHOW COLUMNS FROM " . $p_table . " WHERE Field LIKE " . $p_dao->convert_sql_text($p_column) . " AND Type LIKE '%int%';");

                if (is_countable($l_res) && count($l_res)) {
                    return $l_res->get_row_value('Null') == 'NO';
                }
            } catch (Exception $e) {
                return false;
            }
        }

        return false;
    }

    /**
     * Prepares the given value for the unit handler.
     *
     * @param   string $p_value
     *
     * @return  string
     */
    private static function prepare_value($p_value)
    {
        return str_replace('_', '', preg_replace('/[\W\d]/', '', strtolower(trim($p_value))));
    }

    /**
     * Set step
     *
     * @param int $p_step
     */
    private static function set_step($p_step)
    {
        self::$m_global_step = $p_step;
    }

    /**
     * Get current step.
     *
     * @return  integer
     */
    private static function get_step()
    {
        return self::$m_global_step;
    }

    /**
     * Live category skipper.
     */
    private static function skip_category()
    {
        self::$m_live_category_skip = true;
    }

    /**
     * Reset live category skipper
     */
    private static function reset_category_skip()
    {
        self::$m_live_category_skip = false;
    }

    /**
     * Get Status of the live category skipper
     *
     * @return mixed
     */
    private static function get_category_skip()
    {
        return self::$m_live_category_skip;
    }

    /**
     * Returns the Object mode
     *
     * @return mixed
     */
    private static function get_object_mode()
    {
        return self::$m_object_mode;
    }

    /**
     * Returns Index of Hostname Row.
     *
     * @param   array $p_assignment_map
     *
     * @return  integer
     */
    private static function get_hostname_index($p_assignment_map)
    {
        $l_category_map = self::get_category_map();
        $l_hostname_property_exists = false;
        $l_hostname_csv_index = null;

        // @todo  Is it ever possible, that the "hostname" property is missing here?
        foreach ($l_category_map['C__CATG__IP'][self::CL__CAT__PROPERTIES] as $l_index => $l_property) {
            if ($l_property[self::CL__CAT__PROPERTY__ROW] == 'isys_catg_ip_list__hostname') {
                $l_hostname_property_exists = true;
                continue;
            }
        }

        if ($l_hostname_property_exists) {
            if (self::$m_multivalue_mode == self::CL__MULTIVALUE_TYPE__COLUMN && is_countable($p_assignment_map) && count($p_assignment_map)) {
                foreach ($p_assignment_map as $l_index => $l_catg) {
                    if ($l_catg['catg'] == 'C__CATG__IP' && $l_catg['property'] == 'hostname') {
                        $l_hostname_csv_index = $l_index;
                        continue;
                    }
                }
            } else {
                if (isset($p_assignment_map['C__CATG__IP']['hostname'])) {
                    $l_hostname_csv_index = $p_assignment_map['C__CATG__IP']['hostname'];
                }
            }
        }

        return $l_hostname_csv_index;
    }

    /**
     * Checks
     *
     * @param  int $p_obj_type_id
     *
     * @return mixed
     */
    private static function is_container($p_obj_type_id)
    {
        /** @var isys_cmdb_dao $l_dao */
        $l_dao = isys_cmdb_dao::instance(isys_application::instance()->database);
        $l_sql = "SELECT isys_obj_type__container
            FROM isys_obj_type
            WHERE isys_obj_type__id = " . $l_dao->convert_sql_id($p_obj_type_id) . "
            AND isys_obj_type__container = 1;";

        $l_res = $l_dao->retrieve($l_sql);

        return (bool)$l_res->num_rows();
    }

    /**
     * Count non empty arguments
     *
     * @return int
     */
    private static function counter()
    {
        $l_vals = func_get_args();
        $l_counter = 0;

        foreach ($l_vals as $l_value) {
            if (!empty($l_value)) {
                $l_counter++;
            }
        }

        return $l_counter;
    }

    /**
     * Set live object mode
     */
    private static function live_object_update()
    {
        self::$m_object_live_mode = isys_import_handler_cmdb::C__UPDATE;
    }

    /**
     * Set live object mode
     */
    private static function live_object_create()
    {
        self::$m_object_live_mode = isys_import_handler_cmdb::C__CREATE;
    }

    /**
     * Checks live object mode is equal UPDATE
     *
     * @return bool
     */
    private static function is_update()
    {
        return (self::$m_object_live_mode == isys_import_handler_cmdb::C__UPDATE);
    }

    /**
     * Object live mode GETTER
     *
     * @return mixed object live mode
     */
    private static function get_live()
    {
        return self::$m_object_live_mode;
    }

    /**
     * Save the current object id
     *
     * @param int $p_object_id
     */
    private static function set_current_object($p_object_id)
    {
        if (!empty($p_object_id)) {
            self::$m_current_object_id = $p_object_id;
        }
    }

    /**
     * Get the current object id
     *
     * @return mixed
     */
    private static function get_current_object()
    {
        return self::$m_current_object_id;
    }

    /**
     * Save the current object id
     *
     * @param int $p_object_id
     */
    private static function set_current_object_type($p_obj_type_id = null)
    {
        self::$m_current_object_type = (($p_obj_type_id !== null) ? $p_obj_type_id : (self::$m_global_object_type > 0 ? self::$m_global_object_type : null));
    }

    /**
     * Get the current object id
     *
     * @return mixed
     */
    private static function get_current_object_type()
    {
        return self::$m_current_object_type;
    }

    /**
     * @param int $p_objecttype_id
     * @param int $p_category_id
     * @param int $p_category_type
     *
     * @return bool
     * @throws Exception
     * @throws isys_exception_database
     */
    private static function includes_category($p_objecttype_id = null, $p_category_id = null, $p_category_type = null)
    {
        $l_suffix = ($p_category_type == C__CMDB__CATEGORY__TYPE_GLOBAL ? 'g' : ($p_category_type == C__CMDB__CATEGORY__TYPE_SPECIFIC ? 's' : 'g_custom'));
        if (!empty($p_objecttype_id) && !empty($p_category_id)) {
            if ($p_category_type == C__CMDB__CATEGORY__TYPE_SPECIFIC) {
                $l_res = self::$m_s_dao->get_objtype_by_cats_id($p_category_id);

                if ($l_res->num_rows() > 0) {
                    return true;
                } else {
                    // child category
                    $l_parent_category_id = self::$m_s_dao->cats_get_parent_cats($p_category_id)
                        ->get_row_value('isysgui_cats_2_subcategory__isysgui_cats__id__parent');
                    $l_res = self::$m_s_dao->get_objtype_by_cats_id($l_parent_category_id);

                    if ($l_res->num_rows() > 0) {
                        return true;
                    }
                }
            } else {
                /* is category directly assigned to the objecttype ?? */
                $l_sql = "SELECT * FROM isys_obj_type_2_isysgui_cat{$l_suffix} " . "WHERE isys_obj_type_2_isysgui_cat{$l_suffix}__isys_obj_type__id = " . $p_objecttype_id .
                    " AND " . "isys_obj_type_2_isysgui_cat{$l_suffix}__isysgui_cat{$l_suffix}__id = " . $p_category_id . ";";
                $l_res = self::$m_s_dao->retrieve($l_sql);
                if ($l_res->num_rows()) {
                    return (bool)$l_res->num_rows();
                } else {
                    if ($p_category_type == C__CMDB__CATEGORY__TYPE_GLOBAL) {
                        /* is category a child */
                        $l_sql = "SELECT isysgui_cat{$l_suffix}__parent FROM isysgui_cat{$l_suffix} WHERE isysgui_cat{$l_suffix}__id = " .
                            self::$m_s_dao->convert_sql_id($p_category_id) . ";";
                        $l_res2 = self::$m_s_dao->retrieve($l_sql);
                        $l_row2 = $l_res2->get_row();
                        if ($l_res2->num_rows() && !empty($l_row2["isysgui_cat{$l_suffix}__parent"])) {
                            $l_sql = "SELECT * FROM isys_obj_type_2_isysgui_cat{$l_suffix} " . "WHERE isys_obj_type_2_isysgui_cat{$l_suffix}__isys_obj_type__id = " .
                                $p_objecttype_id . " AND " . "isys_obj_type_2_isysgui_cat{$l_suffix}__isysgui_cat{$l_suffix}__id = " .
                                $l_row2["isysgui_cat{$l_suffix}__parent"] . ";";
                            $l_res3 = self::$m_s_dao->retrieve($l_sql);
                            if ($l_res3->num_rows()) {
                                return (bool)$l_res3->num_rows();
                            }
                        }
                    }
                }
            }
        }

        return false;
    }

    /**
     * Method for initializing the module.
     *
     * @param   isys_module_request $p_req
     *
     * @return  void
     */
    public function init(isys_module_request $p_req)
    {
        ;
    }

    /**
     * Signal Slot initialization.
     *
     * @return  void
     * @deprecated
     */
    public function initslots()
    {
        ;
    }

    /**
     * Method for starting the process of a module.
     *
     * @return  void
     */
    public function start()
    {
        ;
    }

    /**
     * Gets the global import status
     *
     * @return mixed
     */
    public function get_import_status()
    {
        return $this->m_import_status;
    }

    /**
     * Returns the global object or the line object
     *
     * @param array $p_csv_line
     *
     * @return int|null
     */
    private function getObjectTypeFromRow(array $p_csv_line): ?int
    {
        $overwriteGlobalObjectType = (bool)isys_tenantsettings::get('import.csv.overwrite-objecttype', 0);

        $rowObjectType = trim($p_csv_line[self::$m_object_type] ?? '');

        // @see ID-11390 Prioritize the given object type over the global object type.
        if (($overwriteGlobalObjectType && $rowObjectType !== '') || (!self::$m_global_object_type && $rowObjectType !== '')) {
            self::$m_log_objecttype = $rowObjectType;

            return $this->m_dao_dialog->get_objtype_id_by_const_string($rowObjectType);
        }

        if (self::$m_global_object_type) {
            return self::$m_global_object_type;
        }

        return null;
    }

    /**
     * Initialize the Import
     * @param array $p_assignment_map
     * @param array $p_obj_type_assignment
     * @param int   $p_offset
     * @param int|null $p_limit
     *
     * @throws Exception
     */
    public function initialize($p_assignment_map, array $p_obj_type_assignment = [], $p_offset = 0, $p_limit = null)
    {
        $logger = $this->m_log;

        // Start location fix after every csv import:
        isys_component_signalcollection::get_instance()
            ->connect('mod.import_csv.afterImport', function ($csvImport, $transformedData, $objects, $categoryMap) use ($logger) {
                if (!is_array($transformedData) || !count($transformedData)) {
                    return;
                }

                $firstItem = min($transformedData);

                if (isset($firstItem['category_data']['C__CATG__LOCATION']) && $firstItem['category_data']['C__CATG__LOCATION']) {
                    if ($logger) {
                        $logger->notice('Start location fix.');
                    }

                    // @see ID-9432 Skip 'regenerate_missing_relation_objects' because it's already part of the location fix.
                    isys_cmdb_dao_location::instance(isys_application::instance()->container->get('database'))->_location_fix();

                    // Clear cache as well.
                    isys_cache::keyvalue()->flush();

                    if ($logger) {
                        $logger->notice('Location fix executed.');
                    }
                }
            });

        $this->m_object_type_assignment = $p_obj_type_assignment;

        if ($this->get_import_status()) {
            self::set_step(self::CL__IMPORT_STEP__INITIALIZE);
            $this->m_log->info('Initialize ...');
            if (!is_array($p_assignment_map) || count($p_assignment_map) === 0) {
                $this->m_log->notice('No assignments has been made.');
            }

            $this->m_assignment_map = $p_assignment_map;
            self::$m_object_hostname = self::get_hostname_index($p_assignment_map);

            // Getting category map, raw data, prepare raw data and create data structure.
            $this->m_category_map = self::get_category_map(true);

            $this->m_raw_data = self::get_csv(self::$m_file, self::$m_delimiter, self::CL__GET__CONTENT, $p_offset, $p_limit);

            if (is_array($this->m_raw_data) && count($this->m_raw_data)) {
                // Create the object matcher instance.
                $l_object_matcher_config = new MatchConfig(isys_application::instance()->container);
                $l_bits = 0;

                if (empty($this->m_matching_identifiers)) {
                    $this->m_matching_identifiers = $_POST['identificator'];

                    if (empty($this->m_matching_identifiers)) {
                        $this->m_matching_identifiers = [];
                    } elseif (count($this->m_matching_identifiers) === 1 && current($this->m_matching_identifiers) === 'objectTitle' && !empty(self::$m_global_object_type)) {
                        // @See ID-4693 Object title matching is not enough we need at least the object type
                        $this->m_matching_identifiers[] = 'objectTypeConst';
                        $this->set_matching_min_match_limit(2);
                    }
                }

                if (is_array($this->m_matching_identifiers) && count($this->m_matching_identifiers)) {
                    $l_identifiers = (new CiIdentifiers())->getIdentifiers();

                    foreach ($l_identifiers as $l_key => $l_identifier) {
                        if (in_array($l_key, $this->m_matching_identifiers)) {
                            $l_bits += $l_identifier->getBit();
                        }
                    }
                }

                // See ID-4162
                $l_object_matcher_config->setBits($l_bits)
                    ->setMinMatch($this->m_matching_min_match_limit);

                $this->m_object_matcher = new CiMatcher($l_object_matcher_config);

                if (empty($this->m_matching_csv_identifiers)) {
                    $this->m_matching_csv_identifiers = $_POST['csv_ident'];

                    if (empty($this->m_matching_csv_identifiers)) {
                        $this->m_matching_csv_identifiers = [];
                    }
                }

                $this->arrange_raw_data();
                $this->create_data_structure();

                if (!is_array($this->m_transformed_data) && !count($this->m_transformed_data)) {
                    $this->set_import_status(false);
                    $this->m_log->error("Unable to create data structure.");
                    $this->m_log->info('Aborting import !');
                }
            } else {
                $this->set_import_status(false);
                $this->m_log->error('CSV-Content empty.');
                $this->m_log->info('Aborting import !');
            }
        }
    }

    /**
     * Sorting the raw data in consideration of our multivalue mode.
     */
    public function arrange_raw_data()
    {
        self::set_step(self::CL__IMPORT_STEP__ARRANGE);
        $this->m_log->info('Arranging raw data');

        if (self::$m_multivalue_mode != self::CL__MULTIVALUE_TYPE__COLUMN) {
            // Use the row method for "row" and "comma" mode.
            $this->arrange_raw_data_for_row();
        } else {
            $this->arrange_raw_data_for_line();
        }
    }

    /**
     * Sorting the raw data for Multivalue: ROW
     */
    public function arrange_raw_data_for_row()
    {
        $l_arranged_array = [];

        foreach ($this->m_raw_data as $l_line) {
            // @see  ID-6968  No longer skipping rows if no "title" field was configured.

            // It can be possible that objects with the same title exist but in different object types.
            if (self::$m_object_sysid !== null) {
                $l_identifier = $l_line[self::$m_object_sysid];
            } elseif (self::$m_object_type) {
                $l_identifier = $l_line[self::$m_object_title] . '|&|' . $l_line[self::$m_object_type];
            } else {
                $l_identifier = $l_line[self::$m_object_title];
            }

            if ($this->m_special_title !== false) {
                $l_identifier = [];

                foreach ($this->m_special_title as $l_index) {
                    $l_identifier[] = $l_line[$l_index];
                }

                $l_identifier = implode(' ', $l_identifier);
            }

            // Fix / Option for ID-4349.
            if (isys_tenantsettings::get('import.csv.identifier-case-insensitive', 1)) {
                $l_identifier = strtolower($l_identifier);
            }

            $l_arranged_array[$l_identifier][] = $l_line;
        }

        $this->m_raw_data = $l_arranged_array;
    }

    /**
     * Sorting the raw data for Multivalue: Line
     * and creates the data structure
     */
    public function arrange_raw_data_for_line()
    {
        $l_transformed = [];
        $l_multivalue_cache = [];
        self::set_step(self::CL__IMPORT_STEP__DATASTRUCTURE);

        if ($this->get_import_status()) {
            $this->m_log->info('Creating data structure');
            if (is_array($this->m_raw_data)) {
                foreach ($this->m_raw_data as $l_index_of_line => $l_line) {
                    // @see ID-8961 Record the 'current row index' for callbacks.
                    $this->currentRowIndex = (int)$l_index_of_line;
                    $this->m_log->debug('Index of line: ' . $l_index_of_line);
                    if (($l_object_type = $this->getObjectTypeFromRow($l_line))) {
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_TITLE] = trim($l_line[self::$m_object_title]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_TYPE] = trim($l_object_type);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_CATEGORY] = trim($l_line[self::$m_object_category]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_TAGS] = trim($l_line[self::$m_object_tags]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_PURPOSE] = trim($l_line[self::$m_object_purpose]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_SYSID] = trim($l_line[self::$m_object_sysid]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_CMDBSTATUS] = trim($l_line[self::$m_object_cmdbstatus]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_DESCRIPTION] = trim($l_line[self::$m_object_description]);
                        $l_transformed[$l_index_of_line][self::CL__OBJECT_HOSTNAME] = trim($l_line[self::$m_object_hostname]);
                        $l_transformed[$l_index_of_line]['matching'] = $this->build_match_array($l_line);

                        if (is_array($this->m_assignment_map)) {
                            foreach ($this->m_assignment_map as $l_header_index => $l_target) {
                                if ($l_target['category'] == 'separator') {
                                    $l_multivalue_cache = [];
                                } else {
                                    // @see ID-5748 Check will consider "overwrite empty values" option now
                                    // @see ID-8874 Instead of trusting 'empty()' we check for a real empty value.
                                    if ($l_line[$l_header_index] === '' && !self::$m_singlevalue_overwrite_empty_values) {
                                        // @see ID-10126 Collect empty values to process them later.
                                        if (!isset($this->emptyValues[(int)$l_index_of_line])) {
                                            $this->emptyValues[(int)$l_index_of_line] = [];
                                        }

                                        $this->emptyValues[(int)$l_index_of_line][] = (int)$l_header_index;

                                        $this->m_log->notice('Empty value for ' . $this->m_category_map[$l_target['category']][self::CL__CAT__TITLE] . " [" .
                                            $this->m_category_map[$l_target['category']][self::CL__CAT__PROPERTIES][$l_target['property']][self::CL__CAT__PROPERTY__TITLE] .
                                            "]");
                                        continue;
                                    }

                                    $this->m_log->debug('Current source: ' . $this->m_category_map[$l_target['category']][self::CL__CAT__TITLE] . " [" .
                                        $this->m_category_map[$l_target['category']][self::CL__CAT__PROPERTIES][$l_target['property']][self::CL__CAT__PROPERTY__TITLE] .
                                        "]  " . "Current value: " . $l_line[$l_header_index]);

                                    $this->m_tmp_index = $l_header_index;
                                    $l_line[$l_header_index] = $this->universal_helper($l_target['category'], $l_target['property'], $l_line[$l_header_index]);
                                    $this->m_tmp_index = null;

                                    if ($this->m_category_map[$l_target['category']][self::CL__CAT__MULTIVALUE]) {
                                        // @see ID-2529
                                        if (is_string($l_line[$l_header_index])) {
                                            $l_line[$l_header_index] = trim($l_line[$l_header_index]);
                                        }

                                        if ($this->m_category_map[$l_target['category']][self::CL__CAT__TYPE] == isys_cmdb_dao_category::TYPE_ASSIGN &&
                                            $l_target['category'] !== 'C__CATG__CONTACT') {
                                            if (isset($l_multivalue_cache[$l_target['category']])) {
                                                $l_multivalue_cache[$l_target['category']]++;
                                            } else {
                                                $l_multivalue_cache[$l_target['category']] = 0;
                                            }

                                            $l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][$l_multivalue_cache[$l_target['category']]][$l_target['property']] = $l_line[$l_header_index];
                                        } else {
                                            if (isset($l_multivalue_cache[$l_target['category']])) {
                                                // @See ID-3254
                                                if (isset($l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][$l_multivalue_cache[$l_target['category']]][$l_target['property']])) {
                                                    $l_multivalue_cache[$l_target['category']]++;
                                                }
                                                $l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][$l_multivalue_cache[$l_target['category']]][$l_target['property']] = $l_line[$l_header_index];
                                            } else {
                                                $l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][][$l_target['property']] = $l_line[$l_header_index];
                                                end($l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']]);
                                                $l_multivalue_cache[$l_target['category']] = key($l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']]);
                                            }
                                        }
                                    } else {
                                        if (is_string($l_line[$l_header_index])) {
                                            $l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][$l_target['property']] = trim($l_line[$l_header_index]);
                                        } else {
                                            $l_transformed[$l_index_of_line][self::CL__CAT__DATA][$l_target['category']][$l_target['property']] = $l_line[$l_header_index];
                                        }
                                    }

                                    unset($this->m_raw_data[$l_index_of_line][$l_header_index]);
                                }
                            }
                        }

                        $l_transformed[$l_index_of_line][self::CL__UNUSED__DATA] = $this->m_raw_data[$l_index_of_line];
                    } else {
                        $this->m_log->notice('Given object type could not be found: ' . self::$m_log_objecttype);
                    }
                    $this->currentRowIndex = null;
                }
            }
            $this->m_transformed_data = $l_transformed;
        }
    }

    /**
     * Creates the specific array data structure for the Import and assigns it to $this->m_transformed_data.
     */
    public function create_data_structure()
    {
        //xdebug_break();
        if (self::$m_multivalue_mode == self::CL__MULTIVALUE_TYPE__COLUMN) {
            return;
        }

        self::set_step(self::CL__IMPORT_STEP__DATASTRUCTURE);
        $l_multivalue_cache = [];
        $l_data_structure = [];

        if ($this->get_import_status()) {
            $this->m_log->info('Creating data structure');

            if (is_array($this->m_raw_data) && count($this->m_raw_data)) {
                $count = 0;
                foreach ($this->m_raw_data as $l_identifier => $l_collected_lines) {
                    foreach ($l_collected_lines as $l_line) {
                        if (($l_object_type = $this->getObjectTypeFromRow($l_line))) {
                            $l_title = $l_line[self::$m_object_title];

                            if ($this->m_special_title !== false) {
                                $l_title = $l_identifier;
                            }
                            $previousIdentifier = $identifier ?? $l_identifier;
                            $identifier = $l_identifier . $count++;

                            $l_data_structure[$identifier][self::CL__OBJECT_TITLE] = trim($l_title);
                            $l_data_structure[$identifier][self::CL__OBJECT_TYPE] = trim($l_object_type);
                            $l_data_structure[$identifier][self::CL__OBJECT_CATEGORY] = !empty($l_line[self::$m_object_category]) ?
                                $l_line[self::$m_object_category] : ($l_data_structure[$previousIdentifier][self::CL__OBJECT_CATEGORY] ?? null);
                            $l_data_structure[$identifier][self::CL__OBJECT_TAGS] = !empty($l_line[self::$m_object_tags]) ?
                                $l_line[self::$m_object_tags] : ($l_data_structure[$previousIdentifier][self::CL__OBJECT_TAGS] ?? null);
                            $l_data_structure[$identifier][self::CL__OBJECT_PURPOSE] = !empty($l_line[self::$m_object_purpose]) ?
                                $l_line[self::$m_object_purpose] : ($l_data_structure[$previousIdentifier][self::CL__OBJECT_PURPOSE] ?? null);
                            $l_data_structure[$identifier][self::CL__OBJECT_SYSID] = !empty($l_line[self::$m_object_sysid]) ?
                                $l_line[self::$m_object_sysid] : null;
                            $l_data_structure[$identifier][self::CL__OBJECT_CMDBSTATUS] = !empty($l_line[self::$m_object_cmdbstatus]) ?
                                $l_line[self::$m_object_cmdbstatus] : ($l_data_structure[$previousIdentifier][self::CL__OBJECT_CMDBSTATUS] ?? null);
                            $l_data_structure[$identifier][self::CL__OBJECT_DESCRIPTION] = !empty($l_line[self::$m_object_description]) ?
                                $l_line[self::$m_object_description] : ($l_data_structure[$previousIdentifier][self::CL__OBJECT_DESCRIPTION] ?? null);
                            $l_data_structure[$identifier][self::CL__OBJECT_HOSTNAME] = !empty($l_line[self::$m_object_hostname]) ?
                                $l_line[self::$m_object_hostname] : null;
                            $l_data_structure[$identifier]['matching'] = $this->build_match_array($l_line);

                            if (is_array($this->m_assignment_map) && count($this->m_assignment_map) > 0) {
                                foreach ($this->m_assignment_map as $l_cat_const => $l_properties) {
                                    foreach ($l_properties as $l_prop_key => $l_index) {
                                        // ID-8389 allow empty values
                                        if (isset($l_line[$l_index])) {
                                            /*
                                             * @see  ID-8037 this reverted the changes from ID-7497.
                                             *
                                             * In ID-7497 the bug was that 'multivalue' attributes like object browsers and dialog+ fields could not be filled
                                             * with multiple values, because the CSV import would create two entries (in case of a multi-value category and the
                                             * set option "Multi-valued categories = Comma-separated").
                                             *
                                             * It is impossible to determine if the value is supposed to be part of a
                                             * multivalue attribute or as its own category entry. ID-8037 reverted this change.
                                             */
                                            if ($this->m_category_map[$l_cat_const][self::CL__CAT__MULTIVALUE] &&
                                                self::$m_multivalue_mode == self::CL__MULTIVALUE_TYPE__COMMA
                                            ) {
                                                // @see ID-6000  Only explode "not escaped" commas.
                                                $objects = $this->splitNonEscapedCommas((string) $l_line[$l_index]);
                                                array_walk($objects, function (&$value) {
                                                    $value = trim(str_replace("\\", '', $value));
                                                });
                                                $l_line[$l_index] = $objects;
                                            } else {
                                                $l_line[$l_index] = [$l_line[$l_index]];
                                            }

                                            foreach ($l_line[$l_index] as $l_value) {
                                                $this->m_tmp_index = $l_index;
                                                $l_value = $this->universal_helper($l_cat_const, $l_prop_key, $l_value);
                                                $this->m_tmp_index = null;

                                                if ($this->m_category_map[$l_cat_const][self::CL__CAT__MULTIVALUE]) {
                                                    if (!isset($l_multivalue_cache[$l_cat_const]) || self::$m_multivalue_mode == self::CL__MULTIVALUE_TYPE__COMMA) {
                                                        /*
                                                         * ID-3189 Instead of splitting each value into its own "category entry" we try to merge together as good as possible.
                                                         *
                                                         * Before:
                                                         * [
                                                         *   'C__CATG__CONTACT' => [
                                                         *     0 => [
                                                         *       'contact_object' => '12'
                                                         *     ],
                                                         *     1 => [
                                                         *       'contact_object' => '23'
                                                         *     ],
                                                         *     2 => [
                                                         *       'role' => 12
                                                         *     ],
                                                         *     3 => [
                                                         *       'role' => 23
                                                         *     ]
                                                         *   ]
                                                         * ]
                                                         *
                                                         * After:
                                                         * [
                                                         *   'C__CATG__CONTACT' => [
                                                         *     0 => [
                                                         *       'contact_object' => '12',
                                                         *       'role' => 12
                                                         *     ],
                                                         *     1 => [
                                                         *       'contact_object' => '23',
                                                         *       'role' => 23
                                                         *     ]
                                                         *   ]
                                                         * ]
                                                         */
                                                        $l_assigned = false;

                                                        if (!isset($l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const])) {
                                                            $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const] = [];
                                                        }

                                                        foreach ($l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const] as &$l_item) {
                                                            if (isset($l_item[$l_prop_key])) {
                                                                continue;
                                                            }

                                                            $l_item[$l_prop_key] = $l_value;
                                                            $l_assigned = true;
                                                            break;
                                                        }

                                                        if (!$l_assigned) {
                                                            $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const][] = [$l_prop_key => $l_value];
                                                        }

                                                        $l_multivalue_cache[$l_cat_const] = true;
                                                    } else {
                                                        // @todo  Check if there is a better way.
                                                        end($l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const]);
                                                        $l_last_index = key($l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const]);
                                                        $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const][$l_last_index][$l_prop_key] = $l_value;
                                                    }
                                                } else {
                                                    $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const][$l_prop_key] = $l_value;
                                                }
                                            }
                                        }
                                    }

                                    if ($this->m_category_map[$l_cat_const][self::CL__CAT__MULTIVALUE] === false &&
                                        isset($l_data_structure[$previousIdentifier][self::CL__CAT__DATA][$l_cat_const])
                                    ) {
                                        $previousData = array_filter($l_data_structure[$previousIdentifier][self::CL__CAT__DATA][$l_cat_const], fn ($item) => !empty($item));

                                        /*
                                         * @see ID-10749 Swap 'previous + current' to 'current + previous'
                                         * in order to update the previous value with current data (instead of the other way around).
                                         */
                                        $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const] = $l_data_structure[$identifier][self::CL__CAT__DATA][$l_cat_const] + $previousData;
                                    }
                                }
                            }

                            $l_multivalue_cache = [];
                        }
                    }
                }
            }

            $this->m_transformed_data = $l_data_structure;
        }
    }

    /**
     * Calls the helper specified in the category map.
     *
     * @param   string  $p_category_const
     * @param   integer $p_property_id
     * @param   string  $p_value
     *
     * @return  string
     */
    public function universal_helper($p_category_const, $p_property_id, $p_value)
    {
        // @see  ID-5243  Contacts use the "connection" callback, but that won't work - so we implement this special sausage.
        if (($p_category_const === 'C__CATG__CONTACT' && $p_property_id === 'contact_object') || ($p_category_const === 'C__CATG__CPU' && $p_property_id === 'frequency')) {
            return $p_value;
        }

        // @see  ID-6901  Hardcoded hack because property type is "dialog" but needs specific logic.
        if ($p_category_const === 'C__CATG__VIRTUAL_MACHINE' && $p_property_id === 'virtual_machine') {
            return $this->csv_helper__virtualMachine($p_value, $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES][$p_property_id]);
        }

        // @see ID-7400 Special handling in csv import to not affect the default handling in i-doit itself
        if ($p_category_const === 'C__CATG__ASSIGNED_SIM_CARDS' && $p_property_id === 'isys_catg_cards_list__id') {
            return $this->csv_helper__assignedSimcard($p_value, $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES][$p_property_id]);
        }

        $method = $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES][$p_property_id][self::CL__CAT__PROPERTY__MODE];

        if (isset(self::$addonMethods[$method])) {
            [$class, $property] = explode('::', $method);
            $addonMethod = self::$addonMethods[$method];

            if (!isset(self::$addonMethodsInstances[$class])) {
                $database = isys_application::instance()->container->get('database');
                $reflection = (new ReflectionClass($class));

                if (!$reflection->hasMethod($addonMethod)) {
                    $this->m_log->debug('Addon Helper: ' . $addonMethod . ' from category ' . $class . ' does not exist.');
                    return $p_value;
                }

                if ($reflection->isSubclassOf('isys_cmdb_dao_category')) {
                    self::$addonMethodsInstances[$class] = new $class($database);
                } else {
                    $constructor = $reflection->getConstructor();
                    $parameters = $constructor->getParameters();

                    $args = [];

                    foreach ($parameters as $parameter) {
                        $defaultValue = null;

                        $parameterClass = $parameter->getClass();
                        if ($parameterClass !== null && $parameterClass->getName() === 'isys_component_database') {
                            $defaultValue = $database;
                        }

                        if ($defaultValue === null && $parameter->isDefaultValueAvailable()) {
                            $defaultValue = $parameter->getDefaultValue();
                        }

                        $args[$parameter->getName()] = $defaultValue;
                    }

                    if (!empty($args)) {
                        self::$addonMethodsInstances[$class] = $reflection->newInstanceArgs($args);
                    }
                }
            }

            if (isset(self::$addonMethodsInstances[$class])) {
                $this->m_log->debug('Calling Addon Helper: ' . $addonMethod . ' from category ' . $class);

                return self::$addonMethodsInstances[$class]->$addonMethod(
                    $p_value,
                    self::get_current_object(),
                    self::get_step(),
                    $this->currentCategoryDataForSync,
                    $this->m_log  // @see ID-7937
                );
            }

            return $p_value;
        }

        if (isset($method)) {
            $l_helper_method = 'csv_helper__' . $method;

            if (method_exists($this, $l_helper_method)) {
                $this->m_log->debug('Calling Helper: ' . $l_helper_method);

                // @see ID-8961 Set and unset the current category constant.
                $this->currentCategoryConstant = $p_category_const;
                $returnValue = $this->$l_helper_method($p_value, $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES][$p_property_id]);
                $this->currentCategoryConstant = null;

                return $returnValue;
            }

            $this->m_log->notice('CSV-Helper (' . $l_helper_method . ') for attribute ' . $p_category_const . '::' . $p_property_id . ' does not exist - will use the raw value');
        }

        return $p_value;
    }

    /**
     * @param $value
     * @param $p_property_data
     *
     * @return int
     */
    private function csv_helper__assignedDbms($value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $value;
        }

        return isys_cmdb_dao_category_g_database::instance(isys_application::instance()->database)
            ->findOrCreateAssignedDbms($value);
    }

    /**
     * @param $value
     * @param $p_property_data
     *
     * @return int
     * @throws isys_exception_dao
     * @throws isys_exception_database
     * @throws isys_exception_general
     */
    private function csv_helper__assignedDbmsSa($value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $value;
        }

        return isys_cmdb_dao_category_g_database_sa::instance(isys_application::instance()->database)
            ->findOrCreateAssignedDbms($value, self::get_current_object());
    }

    /**
     * Helper: Assigned sim card
     *
     * @param   string $value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__assignedSimcard($value, $p_property_data)
    {
        // Prevent overwriting the raw rules here - the job will be done by callback_assigned_sim_cards instead
        return $value;
    }

    /**
     * Helper: Assigned sim card
     *
     * @param string $value
     * @param array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__connector($value, $p_property_data)
    {
        if (is_numeric($value) || !self::get_current_object()) {
            return $value;
        }
        $dao = isys_cmdb_dao_category_g_connector::instance(isys_application::instance()->container->get('database'));
        $connector = $dao->get_connector_by_name_as_result($value, self::get_current_object())->get_row();
        if ($connector !== null) {
            return $connector['isys_catg_connector_list__id'];
        }

        $this->m_log->warning("Could not find connector with title {$value}.");

        return null;
    }

    /**
     * Validate user data.
     *
     * @param   isys_cmdb_dao_category $dao
     * @param   array                  $sync_array
     * @param   bool                   $is_sync
     *
     * @return  mixed  A array of error messages or true
     */
    public function validate(isys_cmdb_dao_category $dao, $sync_array, $is_sync = true)
    {
        $validation_array = [];

        if (is_array($sync_array) && count($sync_array) > 0) {
            if ($is_sync) {
                // Transform $sync_array first.
                foreach ($sync_array[self::CL__SYN_PROPERTY] as $property_tag => $property) {
                    $validation_array[$property_tag] = $property[C__DATA__VALUE];
                }
            } else {
                $validation_array = $sync_array;
            }

            // Now validate data
            $validation_messages = $dao->validate($validation_array);

            if (is_array($validation_messages) && count($validation_messages)) {
                foreach ($validation_messages as $property_tag => $validation_message) {
                    $validation_messages[$property_tag] = $property_tag . ': ' . $validation_message;
                }
            }

            return $validation_messages;
        }

        return false;
    }

    /**
     * Handle multivalue category.
     *
     * @param  string                 $p_category_const
     * @param  isys_cmdb_dao_category $p_category_dao
     * @param  array                  $p_properties
     */
    public function handle_multivalue_category($p_category_const, isys_cmdb_dao_category $p_category_dao, array $p_properties)
    {
        // Set vars.
        $l_properties = $p_properties;
        $l_object_id = self::get_current_object();
        // Instantiate category dao.
        $l_category_dao = $p_category_dao;

        $alreadyDeletedCategories = $this->cacheObject->get($l_object_id);
        if (!is_array($alreadyDeletedCategories)) {
            $alreadyDeletedCategories = [];
        }

        // Is live-update?
        if (self::is_update()) {
            // Multivalue-Update-Mde; Untouched.
            if (self::$m_multivalue_update_mode == self::CL__MULTIVALUE_MODE__UNTOUCHED) {
                $data = $l_category_dao->get_data(null, $l_object_id, '', null, C__RECORD_STATUS__NORMAL);

                if (is_countable($data) && count($data) && !isset(self::$createAllCategoryEntries[$l_object_id][get_class($l_category_dao)])) {
                    // There is nothing to do in this case. Let us simply return.
                    $this->m_log->info('Multivalue-Update-Mode is \'untouch\'. Let us skip creating entries.');

                    return;
                } else {
                    self::$createAllCategoryEntries[$l_object_id][get_class($l_category_dao)] = true;
                    // There are no entries for this object. So let us create it.
                    $this->m_log->info('Multivalue-Update-Mode is \'untouch\'. No entries found. Continue creating the entries.');
                }
            } elseif (self::$m_multivalue_update_mode == self::CL__MULTIVALUE_MODE__OVERWRITE && !in_array($p_category_const, $alreadyDeletedCategories)) {
                // Overwrite: Purge all existing entries and create logbook entries.

                // Remember that we do not delete this category for this object
                $alreadyDeletedCategories[] = $p_category_const;

                // Multivalue-Update-Mde; Overwrite.
                $this->m_log->info('Multivalue-Update-Mode is \'overwrite\'. Let us delete existing category entries.');

                // Retrieve category entries.
                $l_category_data = $this->get_data($l_category_dao->get_data(null, $l_object_id), $p_category_const);
                $this->m_log->info('There are ' . count($l_category_data) . ' entries in category to delete.');

                if (count($l_category_data)) {
                    // Iterate through category entries.
                    foreach ($l_category_data as $l_key => $l_res) {
                        // Get current entries status.
                        $l_entry_status = $l_res[$this->m_category_map[$p_category_const][self::CL__CAT__TABLE] . '__status'];

                        if ($l_entry_status) {
                            // Get statuses until purge.
                            $l_status_cycle = array_slice($this->m_record_cycle, $l_entry_status - 1);

                            if (is_array($l_status_cycle)) {
                                // Iterate through status until purge.
                                foreach ($l_status_cycle as $s_status) {
                                    // Generate logbook entries.
                                    isys_event_manager::getInstance()->triggerImportEvent(
                                        $s_status,
                                        isys_application::instance()->container->get('language')
                                            ->get('LC__UNIVERSAL__CSV_IMPORT'),
                                        $l_object_id,
                                        self::$m_current_object_type,
                                        $this->m_category_map[$p_category_const][self::CL__CAT__TITLE],
                                        null,
                                        null,
                                        null,
                                        null,
                                        self::$importLogId,
                                        0
                                    );
                                }
                            }
                        }

                        // Finish: Delete category entry from DB.
                        if (isset($this->m_category_map[$p_category_const][self::CL__CAT__TABLE])) {
                            // @note VQH: use delete_entry because relation object also needs to be removed if exists
                            if ($this->m_category_map[$p_category_const][self::CL__CAT__TABLE] == 'isys_catg_custom_fields_list') {
                                // Simulate purge for custom category using rank method
                                $l_category_dao->rank_record($l_key, C__CMDB__RANK__DIRECTION_DELETE, 'isys_catg_custom_fields_list', null, true);
                            } else {
                                $this->m_dao_dialog->delete_entry(
                                    $l_res[$this->m_category_map[$p_category_const][self::CL__CAT__TABLE] . "__id"],
                                    $this->m_category_map[$p_category_const][self::CL__CAT__TABLE]
                                );
                            }

                            $this->m_log->info('Entry #' . $l_res[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]] . " deleted successfully.");
                        }

                        $l_category_entries[] = $l_res[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]];
                    }
                }
            } else {
                if (self::$m_multivalue_update_mode == self::CL__MULTIVALUE_MODE__ADD) {
                    $this->m_log->info('Multivalue-Update-Mode: \'add\'. Let us add the given entries to the existing ones.');
                }
            }
        } else {
            self::$createAllCategoryEntries[$l_object_id][get_class($l_category_dao)] = true;
            $alreadyDeletedCategories[] = $p_category_const;
        }

        $this->cacheObject->set($l_object_id, $alreadyDeletedCategories);
        // Create entries if needed.
        if (is_array($l_properties)) {
            // Iterate through entries array.
            foreach ($l_properties as $l_cat_data) {
                // Build the sync array.
                $l_sync_array = $this->build_for_sync($p_category_const, $l_cat_data);

                if ($l_sync_array) {
                    $this->sync($p_category_const, self::get_current_object(), $p_category_dao, $l_sync_array, isys_import_handler_cmdb::C__CREATE);
                    $this->addUpdatedCategory($p_category_const);
                    continue;
                }

                if (!empty(self::$m_log_essential)) {
                    $this->m_log->error('An essential information is not set: ' . self::$m_log_essential);
                    $this->m_log->info('Have to skip data.');
                    continue;
                }

                $this->m_log->notice('SyncArray is empty. There is nothing to import !');
                $this->m_log->info('Have to skip data.');
            }
        }
    }

    /**
     * Imports the Data
     */
    public function import()
    {
        // Set the memory limit to 2G (if necessary).
        if (isys_convert::to_bytes(ini_get('memory_limit')) < isys_convert::to_bytes('2G')) {
            ini_set('memory_limit', '2G');
        }

        $language = isys_application::instance()->container->get('language');

        $l_import_dao = new isys_module_dao_import_log(isys_application::instance()->container->get('database'));
        self::$importLogId = $l_import_dao->add_import_entry(
            $l_import_dao->get_import_type_by_const('C__IMPORT_TYPE__CSV'),
            $_POST['csv_filename'],
            null // (((bool) $_POST['profile_loaded']) ? $_POST['profile_sbox'] : null) // What is this field for?
        );

        // Emit beforeImport signal.
        isys_component_signalcollection::get_instance()
            ->emit('mod.import_csv.beforeImport', $this, $this->m_transformed_data, $this->m_created_object_cache, $this->m_category_map);

        self::set_step(self::CL__IMPORT_STEP__IMPORT);
        $this->m_log->info('Starting import.');

        // @see ID-8972 In order to fix this bug we might need to update the CSV profile "on-the-fly".
        foreach ($this->m_assignment_map as $columnIndex => $configuration) {
            // First of all we need to check, if we have assigned any object browsers in custom categories.
            if (strpos($configuration['category'], 'C__CATG__CUSTOM_FIELDS_') !== 0 || strpos($configuration['property'], 'f_popup_') !== 0) {
                continue;
            }

            // Then we check if the UI-Params of the assigned property can be found.
            if (!isset($this->m_category_map[$configuration['category']][self::CL__CAT__PROPERTIES][$configuration['property']][self::CL__CAT__PROPERTY__UI_PARAMS])) {
                continue;
            }

            $uiParams = $this->m_category_map[$configuration['category']][self::CL__CAT__PROPERTIES][$configuration['property']][self::CL__CAT__PROPERTY__UI_PARAMS];

            // Because 'f_popup' could also be something else (dialog+) we need further checks - we find the necessary data in the UI-Params.
            if ($uiParams['popup'] !== 'browser_object' || $uiParams['p_strPopupType'] !== 'browser_object_ng') {
                continue;
            }

            $propSearchKey = $configuration['category'] . '_' . $columnIndex;

            // Set the default 'search type' if nothing else was found
            if (!isset(self::$m_prop_search[$propSearchKey]) || empty(self::$m_prop_search[$propSearchKey])) {
                self::$m_prop_search[$propSearchKey] = '{"select":"isys_obj__id","search":"isys_obj__title","table":"isys_obj"}';
            }
        }

        foreach ($this->m_transformed_data as $key => $l_object) {
            // Indicate import success of this object.
            $l_success = false;

            try {
                self::$currentRow = $key;

                // @see  ID-6968  Don't create an object if the title is empty.
                $hasTitle = trim($l_object[self::CL__OBJECT_TITLE]) !== '';

                // Emit beforeImportObject.
                isys_component_signalcollection::get_instance()
                    ->emit('mod.import_csv.beforeImportObject', $this, $l_object);

                if ($l_object[self::CL__OBJECT_TYPE]) {
                    $l_created = true;
                    $l_object_id = false;
                    // Create/Retrieve object id.
                    if ($hasTitle && self::get_object_mode() == self::CL__OBJECT_MODE__CREATE) {
                        self::live_object_create();
                        $l_object_id = $this->_create_object(
                            $l_object[self::CL__OBJECT_TYPE],
                            $l_object[self::CL__OBJECT_TITLE],
                            $l_object[self::CL__OBJECT_SYSID],
                            C__RECORD_STATUS__NORMAL,
                            $l_object[self::CL__OBJECT_HOSTNAME],
                            $l_object[self::CL__OBJECT_CATEGORY],
                            $l_object[self::CL__OBJECT_PURPOSE],
                            $l_object[self::CL__OBJECT_CMDBSTATUS],
                            $l_object[self::CL__OBJECT_DESCRIPTION],
                            $l_object[self::CL__OBJECT_TAGS]
                        );
                    } elseif (self::get_object_mode() == self::CL__OBJECT_MODE__UPDATE) {
                        // Try to find object
                        if (isset($l_object['matching']) && count($l_object['matching'])) {
                            $this->m_log->debug("Searching for Object by identification keys...");
                            $l_object_id = $this->m_object_matcher->match($l_object['matching'])
                                ->getId();
                        } elseif ($hasTitle) {
                            // default search object title + object type
                            $this->m_log->debug("No identification keys set. Searching Object with default search Object title + Objecttype...");
                            $l_object_id = self::$m_s_dao->get_obj_id_by_title($l_object[self::CL__OBJECT_TITLE], $l_object[self::CL__OBJECT_TYPE], C__RECORD_STATUS__NORMAL);
                        }

                        // Create if necessary (@see  ID-6968  and a title exists)
                        if ($hasTitle && !$l_object_id) {
                            // Object not found. Lets create it
                            self::live_object_create();
                            $this->m_log->debug("Object not found. Will create a new one.");

                            $l_object_id = $this->_create_object(
                                $l_object[self::CL__OBJECT_TYPE],
                                $l_object[self::CL__OBJECT_TITLE],
                                $l_object[self::CL__OBJECT_SYSID],
                                C__RECORD_STATUS__NORMAL,
                                $l_object[self::CL__OBJECT_HOSTNAME],
                                $l_object[self::CL__OBJECT_CATEGORY],
                                $l_object[self::CL__OBJECT_PURPOSE],
                                $l_object[self::CL__OBJECT_CMDBSTATUS],
                                $l_object[self::CL__OBJECT_DESCRIPTION],
                                $l_object[self::CL__OBJECT_TAGS]
                            );
                        } elseif ($l_object_id) {
                            /* We found an object */
                            self::live_object_update();
                            $l_created = false;
                            $this->_update_object(
                                $l_object_id,
                                $l_object[self::CL__OBJECT_HOSTNAME],
                                $l_object[self::CL__OBJECT_CATEGORY],
                                $l_object[self::CL__OBJECT_PURPOSE],
                                $l_object[self::CL__OBJECT_CMDBSTATUS],
                                $l_object[self::CL__OBJECT_DESCRIPTION],
                                $l_object[self::CL__OBJECT_TITLE],
                                $l_object[self::CL__OBJECT_TAGS],
                                $l_object[self::CL__OBJECT_SYSID],
                                $l_object[self::CL__OBJECT_TYPE]
                            );
                        }
                    }

                    if ($l_object_id) {
                        // @see  ID-6968  Receive the title to go on from here
                        if (!$hasTitle) {
                            $l_object[self::CL__OBJECT_TITLE] = $this->m_dao_dialog->get_obj_name_by_id_as_string($l_object_id);
                        }

                        self::set_current_object($l_object_id);
                        $this->m_log->info(sprintf(
                            'Object "%s" of type %s with ID %s successfully ' . ($l_created ? 'created' : 'found') . '!',
                            $l_object[self::CL__OBJECT_TITLE],
                            $language->get(self::$m_s_dao->get_obj_type_name_by_obj_id($l_object_id)),
                            $l_object_id
                        ));

                        if (isset($l_object[self::CL__CAT__DATA]) && is_array($l_object[self::CL__CAT__DATA])) {
                            foreach ($l_object[self::CL__CAT__DATA] as $l_category_id => $l_properties) {
                                self::reset_category_skip();

                                $this->m_log->info('Validating data for import in category: ' . $this->m_category_map[$l_category_id][self::CL__CAT__TITLE]);

                                if (defined($l_category_id) && self::includes_category(
                                    $l_object[self::CL__OBJECT_TYPE],
                                    constant($l_category_id),
                                    $this->m_category_map[$l_category_id][self::CL__CAT__CAT_TYPE]
                                )) {
                                    $this->m_log->debug("Category " . $l_category_id . " found in object type.");

                                    $l_category_dao = $this->get_category_dao($l_category_id)
                                        ->set_object_id($l_object_id)
                                        ->set_object_type_id(self::get_current_object_type());

                                    if ($this->m_category_map[$l_category_id][self::CL__CAT__MULTIVALUE]) {
                                        // Current category is multivalued.
                                        $this->handle_multivalue_category($l_category_id, $l_category_dao, $l_properties);
                                    } else {
                                        // Category is singlevalued.
                                        $this->handle_singlevalue_category($l_category_id, $l_category_dao, $l_properties);
                                    }
                                } else {
                                    if ($l_category_id !== '-') {
                                        $this->m_log->error('Object type "' . $language->get(self::$m_s_dao->get_obj_type_name_by_obj_id($l_object_id)) .
                                            '" does not include Category "' . $this->m_category_map[$l_category_id][self::CL__CAT__TITLE] . '". We have to skip it !');
                                    }
                                }
                            }
                        } else {
                            // We have to do this here to insert the created object permanently because isys_cmdb_dao::insert_new_obj not close the mysql transaction.
                            $this->m_dao_dialog->apply_update();
                        }

                        // @see ID-10886 Add 'created' and 'updated' flags to distinguish later.
                        $this->m_created_object_cache[$l_object_id] = [
                            'title' => $l_object[self::CL__OBJECT_TITLE],
                            'type'  => $language->get(self::$m_s_dao->get_obj_type_name_by_obj_id($l_object_id)),
                            'id'    => $l_object_id,
                            'created' => self::get_object_mode() == self::CL__OBJECT_MODE__CREATE,
                            'updated' => self::get_object_mode() == self::CL__OBJECT_MODE__UPDATE,
                        ];
                    } elseif ($hasTitle) {
                        // @see  ID-6968  If a title exists, we output the same error as in the past.
                        $this->m_log->error(sprintf(
                            'Unable to create Object "%s" of type %s with ID %s.',
                            $l_object[self::CL__OBJECT_TITLE],
                            $language->get(self::$m_s_dao->get_objtype_name_by_id_as_string($l_object[self::CL__OBJECT_TYPE])),
                            $l_object_id
                        ));
                    } else {
                        // @see ID-6968 If no title exists, we output a new warning.
                        // @see ID-10397 Raise message from WARNING to ERROR so that it is clear to the user.
                        $this->m_log->error(sprintf(
                            $language->get('LC__MODULE__IMPORT__CSV__OBJECT_NOT_CREATED'),
                            $language->get(self::$m_s_dao->get_objtype_name_by_id_as_string($l_object[self::CL__OBJECT_TYPE]))
                        ));
                    }

                    // Mark category global as updated
                    $this->addUpdatedCategory('C__CATG__GLOBAL');
                } else {
                    $this->m_log->error(sprintf(
                        'Unable to create Object "%s" of type %s.',
                        $l_object[self::CL__OBJECT_TITLE],
                        $language->get(self::$m_s_dao->get_objtype_name_by_id_as_string($l_object[self::CL__OBJECT_TYPE]))
                    ));

                    $this->m_log->info('Please check the object type constant of object.');
                }

                $l_success = true;
            } catch (Exception $e) {
                $this->m_log->error($e->getMessage());
            }

            // Emit afterImportObject
            isys_component_signalcollection::get_instance()
                ->emit('mod.import_csv.afterImportObject', $this, $l_object, $l_success);
        }

        // @see ID-10886 Run logic for all changed objects, not only for created ones.
        if (count(self::$objectDataChanged)) {
            // @see ID-10336 Skip objects that have been created during the import.
            $createdObjects = array_keys(array_filter($this->m_created_object_cache, fn ($object) => $object['created']));
            $updatedObjects = array_keys(self::$objectDataChanged);

            // Fetch only updated objects, skip created ones.
            $onlyUpdatedObjects = ArrayHelper::difference($updatedObjects, $createdObjects);

            if (!empty($onlyUpdatedObjects)) {
                $this->m_dao_dialog->object_changed($onlyUpdatedObjects, null, true);
            }
        }

        // Emit afterImport signal
        isys_component_signalcollection::get_instance()
            ->emit('mod.import_csv.afterImport', $this, $this->m_transformed_data, $this->m_created_object_cache, $this->m_category_map, $this->getUpdatedCategories());

        self::set_step(self::CL__IMPORT_STEP__FINISHED);
    }

    /**
     * Returns all created objects.
     *
     * @return  mixed
     */
    public function get_created_objects()
    {
        return $this->m_created_object_cache;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        // Clear all found "auth-*" cache-files. So that it is not necessary to trigger it manually in Cache/Database
        if (self::get_step() === self::CL__IMPORT_STEP__FINISHED) {
            try {
                $l_cache_files = isys_caching::find('auth-*');

                array_map(function ($l_cache) {
                    $l_cache->clear();
                }, $l_cache_files);
            } catch (Exception $e) {
                $this->m_log->warning(sprintf('Could not clear cache files for %sauth-* with message: ' . $e->getMessage(), isys_glob_get_temp_dir()));
            }
        }
    }

    /**
     * Get the Logger instance.
     *
     * @return  Logger
     * @author  Leonard Fischer <lfischer@i-doit.com>
     */
    public function get_log()
    {
        return $this->m_log;
    }

    /**
     * Get path to the log file.
     *
     * @return  string
     * @author  Leonard Fischer <lfischer@i-doit.com>
     */
    public function get_log_path()
    {
        return $this->m_log_dir . $this->m_log_file;
    }

    /**
     * This will return the log handler to get all records.
     *
     * @param   integer $p_log_level
     *
     * @return  array
     * @author  Leonard Fischer <lfischer@i-doit.com>
     */
    public function get_log_records($p_log_level)
    {
        $records = $this->m_log_handler->getRecords();

        $records = array_map(fn (LogRecord $record) => $record->toArray(), $records);

        return array_filter($records, function ($p_record) use ($p_log_level) {
            return ($p_record['level'] >= $p_log_level);
        });
    }

    /**
     * Method for setting the special title indexes.
     *
     * @param   array $p_indexes
     *
     * @return  $this
     * @author  Leonard Fischer <lfischer@i-doit.com>
     */
    public function set_special_title_index(array $p_indexes)
    {
        $this->m_special_title = $p_indexes;

        return $this;
    }

    /**
     * Builds the SQL condition for the quiery to identify existing objects.
     *
     * @param   array $p_line
     *
     * @return  string
     * @author  Leonard Fischer <lfischer@i-doit.com>
     */
    private function build_match_array($p_line)
    {
        $l_matching = [];

        if (is_array($this->m_matching_identifiers) && count($this->m_matching_identifiers)) {
            foreach ($this->m_matching_identifiers as $l_key => $l_identifier) {
                if ($l_identifier === 'objectTypeConst' && !isset($this->m_matching_csv_identifiers[$l_key])) {
                    $l_matching[] = new MatchKeyword($l_identifier, self::$m_s_dao->get_objtype(self::$m_global_object_type)
                        ->get_row_value('isys_obj_type__const'));
                    continue;
                }
                $l_matching[] = new MatchKeyword($l_identifier, trim($p_line[$this->m_matching_csv_identifiers[$l_key]]));
            }
        }

        return $l_matching;
    }

    /**
     * Sets the global import status.
     *
     * @param  boolean $p_bool
     */
    private function set_import_status($p_bool)
    {
        $this->m_import_status = !!$p_bool;
    }

    /**
     * Get assigned license to an application assignment
     *
     * @param string    $p_value | Valid format: LICENSE_OBJECT_TITLE;LICENSE_KEY
     * @param array     $p_property_data
     *
     * @return mixed
     * @throws Exception
     */
    private function csv_helper__applicationLicence($p_value, $p_property_data)
    {
        $licenseDao = isys_cmdb_dao_category_s_lic::instance(isys_application::instance()->container->get('database'));

        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        if (empty($p_value)) {
            return null;
        }

        // Check for valid value format: LICENSE_OBJECT_TITLE;LICENSE_KEY
        if (strpos($p_value, ';')) {
            // Destruct it
            [$objectTitle, $licenseKey] = explode(';', $p_value);

            // Try to retrieve an license object based on its title
            $objectId = $this->m_dao_dialog->get_obj_id_by_title($objectTitle, defined_or_default('C__OBJTYPE__LICENCE'));

            // Validate values
            if (is_numeric($objectId) && !empty($licenseKey)) {
                // Try to retrieve a license key in license object
                $resource = $licenseDao->get_data(null, $objectId, ' AND isys_cats_lic_list__key = ' . $licenseDao->convert_sql_text($licenseKey));

                // Check for results and return it
                if ($resource->num_rows()) {
                    $p_value = $resource->get_row_value('isys_cats_lic_list__id');
                }
            }
        } else {
            // Only the licence-key is available
            $resource = $licenseDao->get_data(null, null, ' AND isys_cats_lic_list__key = ' . $licenseDao->convert_sql_text($p_value));
            $foundMatches = $resource->count();

            if ($foundMatches === 0) {
                $this->m_log->warning('The license object for license Key "' . $p_value . '" could not be found. Skipping license reference.');
                return null;
            }

            if ($foundMatches > 1) {
                $this->m_log->warning('The license Key "' . $p_value . '" is not unique.');
            }

            $licenceData = $resource->get_row();
            $this->m_log->debug('Using license object "' . $licenceData['isys_obj__title'] . '" as referenced license object.');

            $p_value = $licenceData['isys_cats_lic_list__id'];
        }

        return $p_value;
    }

    /**
     * Application assignment version resolver
     *
     * @param mixed $value
     * @param array $propertyData
     *
     * @return mixed
     */
    private function csv_helper__applicationAssignedVersion($value, $propertyData)
    {
        if (isset($this->currentCategoryDataForSync['application'][C__DATA__VALUE])) {
            $return = (int) isys_cmdb_dao_dialog::instance(isys_application::instance()->container->get('database'))
                ->set_table('isys_catg_version_list')
                ->setAdditionFieldsToCondition([
                    'isys_obj__id' => $this->currentCategoryDataForSync['application'][C__DATA__VALUE],
                ])
                ->reset()
                ->check_dialog('isys_catg_version_list', $value, null, null, [
                    'isys_obj__id' => $this->currentCategoryDataForSync['application'][C__DATA__VALUE],
                ]);

            return $return;
        }

        return $value;
    }

    /**
     * @param $value
     * @param $properytData
     *
     * @return mixed
     */
    private function csv_helper__applicationAssignedVariant($value, $properytData)
    {
        $value = trim($value);

        if (isset($this->currentCategoryDataForSync['application'][C__DATA__VALUE])) {
            $additionalFields = [
                'isys_obj__id' => $this->currentCategoryDataForSync['application'][C__DATA__VALUE],
            ];

            // @see ID-11083 Split up values like "<variant> (<title>)" into two parts.
            if (preg_match('/^(.*?) \((.*?)\)$/', $value, $matches)) {
                $variant = $matches[1];
                $value = $matches[2];

                $additionalFields['variant'] = $variant;
            }

            $dao = (int) isys_cmdb_dao_dialog::instance(isys_application::instance()->container->get('database'))
                ->set_table('isys_cats_app_variant_list')
                ->setAdditionFieldsToCondition($additionalFields)
                ->reset()
                ->check_dialog('isys_cats_app_variant_list', $value, null, null, $additionalFields);
        }

        return $value;
    }

    /**
     * Wrapper method for "csv_helper__object". This is necessary, because the CSV import only handle its own helper...
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__wan_connected_router($p_value, $p_property_data)
    {
        return $this->csv_helper__object($p_value, $p_property_data);
    }

    /**
     * Wrapper method for "csv_helper__object". This is necessary, because the CSV import only handle its own helper...
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__exportLayer2Assignments($p_value, $p_property_data)
    {
        $objectID = $this->csv_helper__object($p_value, $p_property_data);
        if (is_numeric($objectID)) {
            // Create specific category if it does not exist
            $dao = isys_cmdb_dao_category_s_layer2_net::instance(isys_application::instance()->container->get('database'));
            if (!$dao->get_data(null, $objectID)
                ->count()) {
                $dao->create($objectID);
            }
        }

        return $objectID;
    }

    /**
     * Wrapper method for csv_helper__connection. For property 'instance' from specific category database instance
     *
     * @param $value
     * @param $propertyData
     *
     * @return mixed
     * @author   Van Quyen Hoang <qhoang@i-doit.com>
     */
    private function csv_helper__database_instance($value, $propertyData)
    {
        return $this->csv_helper__connection($value, $propertyData);
    }

    /**
     * Wrapper method for csv_helper__connection. For property 'database_instance' from specific category database instance
     *
     * @param $value
     * @param $propertyData
     *
     * @return mixed
     * @author   Van Quyen Hoang <qhoang@i-doit.com>
     */
    private function csv_helper__databaseSchema($value, $propertyData)
    {
        $return = [];

        // @see ID-7569 Implement the "split" logic.
        $objects = $this->splitNonEscapedCommas((string) $value);

        foreach ($objects as $object) {
            $objectId = $this->csv_helper__connection(str_replace('\,', ',', $object), $propertyData);

            if ($objectId) {
                $return[] = $objectId;
            }
        }

        // @see ID-6523  Return values according to the results.
        if (count($return) === 0) {
            return null;
        }

        if (count($return) === 1) {
            return $return[0];
        }

        return $return;
    }

    /**
     * Wrapper method for "csv_helper__object". This is necessary, because the CSV import only handle its own helper...
     *
     * @param $p_value
     * @param $p_property_data
     *
     * @return mixed
     * @author   Van Quyen Hoang <qhoang@i-doit.com>
     */
    private function csv_helper__port_assigned_layer2_nets($p_value, $p_property_data)
    {
        return $this->csv_helper__log_port($p_value, $p_property_data);
    }

    /**
     * @param $value
     * @param $propertyData
     *
     * @return array|bool|mixed|string|null
     * @throws isys_exception_database
     */
    private function csv_helper__log_port($value, $propertyData)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $value;
        }

        if (!defined('C__CATS__LAYER2_NET')) {
            return false;
        }

        if (strpos($value, ',')) {
            $value = explode(',', $value);
        }

        if (!isset($this->m_category_objtype_map[C__CATS__LAYER2_NET])) {
            $this->m_category_objtype_map[C__CATS__LAYER2_NET] = $this->m_dao_dialog->get_object_types_by_category(C__CATS__LAYER2_NET, 's');
        }

        if (is_array($value) && !empty($value)) {
            $return = [];
            foreach ($value as $item) {
                $id = $this->csv_helper__object($item, $propertyData, $this->m_category_objtype_map[C__CATS__LAYER2_NET]);

                if (!$id) {
                    continue;
                }

                $return[] = $id;
            }
            return $return;
        }

        return $this->csv_helper__object($value, $propertyData, $this->m_category_objtype_map[C__CATS__LAYER2_NET]);
    }

    /**
     * Wrapper method for "csv_helper__object". This is necessary, because the CSV import only handle its own helper...
     *
     * @param $p_value
     * @param $p_property_data
     *
     * @return bool|mixed
     * @throws isys_exception_database
     */
    public function csv_helper__layer_3_assignment($p_value, $p_property_data)
    {
        if (!defined('C__CATS__NET')) {
            return false;
        }

        if (!isset($this->m_category_objtype_map[C__CATS__NET])) {
            $this->m_category_objtype_map[C__CATS__NET] = $this->m_dao_dialog->get_object_types_by_category(C__CATS__NET, 's');
        }

        return $this->csv_helper__object($p_value, $p_property_data, $this->m_category_objtype_map[C__CATS__NET]);
    }

    /**
     * Wrapper method for "csv_helper__object". This is necessary, because the CSV import only handle its own helper...
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__wan_connected_net($p_value, $p_property_data)
    {
        return $this->csv_helper__object($p_value, $p_property_data);
    }

    /**
     * Retrieve layer3net for ip
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  bool|mixed
     * @throws  Exception
     * @throws  isys_exception_database
     */
    private function csv_helper__ip_net($p_value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        if (isset($p_value) && !empty($p_value)) {
            $this->m_log->debug('Search for Layer-3-Net "' . $p_value . '"...');

            // Use the specific category to find a "layer 3 net" object instead of the object type.
            $l_sql = "SELECT isys_obj__id FROM isys_obj
                LEFT JOIN isys_obj_type ON isys_obj_type__id = isys_obj__isys_obj_type__id
	            WHERE isys_obj__title = " . $this->m_dao_dialog->convert_sql_text($p_value) . "
	            AND isys_obj_type__isysgui_cats__id = " . $this->m_dao_dialog->convert_sql_id(defined_or_default('C__CATS__NET')) . "
	            LIMIT 1;";

            $l_res = $this->m_dao_dialog->retrieve($l_sql);

            if (is_countable($l_res) && count($l_res)) {
                // We found a Layer-3-Net with the given name.
                $this->m_log->debug("Layer-3-Net found.");

                return $l_res->get_row_value('isys_obj__id');
            }
        }

        return false;
    }

    /**
     * Handle Slot assignment between property assigned_device and assigned_slots from category C__CATS__CHASSIS_DEVICES
     *
     * @param $value
     * @param $propertyData
     *
     * @return array
     * @throws isys_exception_database
     */
    private function csv_helper__chassis_slots($value, $propertyData)
    {
        if (empty(self::get_current_object()) || empty($value)) {
            return $value;
        }

        if (!empty($this->currentCategoryDataForSync['assigned_device']) && isset($this->currentCategoryDataForSync['assigned_device'][C__DATA__VALUE])) {
            $slotsArr = explode(',', $value);
            $assignedObject = $this->currentCategoryDataForSync['assigned_device'][C__DATA__VALUE];
            $dao = isys_cmdb_dao_category_s_chassis::instance(isys_application::instance()->container->get('database'));

            $slotsResult = $dao->get_slots_by_assiged_object($assignedObject, self::get_current_object());
            $alreadyAssignedSlots = [];
            if ($slotsResult instanceof isys_component_dao_result && count($slotsResult)) {
                while ($row = $slotsResult->get_row()) {
                    $alreadyAssignedSlots[$row['isys_cats_chassis_slot_list__title']] = [
                        'id' => $row['isys_cats_chassis_slot_list__id']
                    ];
                }
            }

            foreach ($slotsArr as $slot) {
                if (isset($alreadyAssignedSlots[$slot])) {
                    $this->m_log->debug('Slot ' . $slot . ' is already assigned.');
                    continue;
                }

                $query = 'SELECT isys_cats_chassis_slot_list__id FROM isys_cats_chassis_slot_list
                WHERE isys_cats_chassis_slot_list__isys_obj__id = ' . $dao->convert_sql_id(self::get_current_object()) . '
                AND isys_cats_chassis_slot_list__title = ' . $dao->convert_sql_text($slot);

                $result = $dao->retrieve($query);
                if ($result instanceof isys_component_dao_result && count($result)) {
                    $slotId = $result->get_row_value('isys_cats_chassis_slot_list__id');
                    $alreadyAssignedSlots[$slot] = [
                        'id' => $slotId
                    ];
                }
            }

            return $alreadyAssignedSlots;
        }

        return $value;
    }

    /**
     * Helper: Virtual Machine
     *
     * @param   string $value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__virtualMachine($value, $p_property_data)
    {
        // Transform to "lower case" and trim whitespaces.
        $value = strtolower(trim($value));

        // Don't use "empty()" since it will evaluate '0' as empty.
        if ($value === '') {
            $this->m_log->debug('Empty value provided, skip.');
            return null;
        }

        $typeVmGuest = defined_or_default('C__VM__GUEST', 2);
        $typeVmNo = defined_or_default('C__VM__NO', 3);

        if (is_numeric($value)) {
            if ($value == $typeVmGuest) {
                $this->m_log->debug('Value matches as "virtual machine"');
                return $value;
            }

            if ($value == $typeVmNo) {
                $this->m_log->debug('Value matches as "no virtual machine"');
                return $value;
            }

            $this->m_log->debug($value ? 'Numeric value matches as "virtual machine"' : 'Numeric value matches as "no virtual machine"');

            return $value
                ? $typeVmGuest
                : $typeVmNo;
        }

        // @see  ID-6901  We use a hardcoded list of "positive" answers - Daniel approved.
        $positiveAnswers = [
            'ja',
            'yes',
            'virtuelle maschine',
            'virtual machine',
        ];

        if (in_array($value, $positiveAnswers, true)) {
            $this->m_log->debug('Value matches as "virtual machine"');
            return $typeVmGuest;
        }

        $this->m_log->debug('Value matches as "no virtual machine"');
        return $typeVmNo;
    }

    /**
     * Helper: Dialog
     *
     * @param string $p_value
     * @param array  $p_property_data
     * @param bool   $p_force
     *
     * @return mixed
     */
    private function csv_helper__dialog($p_value, $p_property_data, $p_force = false)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE && !$p_force) {
            return $p_value;
        }

        $p_value = trim($p_value);

        if (empty($p_value) && strlen($p_value) === 0) {
            return null;
        }

        if (isset($p_property_data[self::CL__CAT__PROPERTY__PARAM]) && !isset($p_property_data[self::CL__CAT__PROPERTY__REFERENCES])) {
            $p_property_data[self::CL__CAT__PROPERTY__REFERENCES] = [
                $p_property_data[self::CL__CAT__PROPERTY__PARAM],
                $p_property_data[self::CL__CAT__PROPERTY__PARAM] . "__id",
            ];
        }

        $l_table_content = [];

        if (isset($p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0])) {
            $l_res = $this->m_dao_dialog->get_data($p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0]);

            if ($l_res->num_rows()) {
                while ($l_row = $l_res->get_row()) {
                    // Handling for custom category dialogs
                    if (isset($p_property_data[self::CL__CAT__PROPERTY__IDENTIFIER])) {
                        if ($l_row[$p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0] . "__identifier"] == $p_property_data[self::CL__CAT__PROPERTY__IDENTIFIER]) {
                            $l_table_content[$l_row[$p_property_data[self::CL__CAT__PROPERTY__REFERENCES][1]]] = isys_application::instance()->container->get('language')
                                ->get($l_row[$p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0] . "__title"]);
                        }
                    } else {
                        $l_table_content[$l_row[$p_property_data[self::CL__CAT__PROPERTY__REFERENCES][1]]] = isys_application::instance()->container->get('language')
                            ->get($l_row[$p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0] . "__title"]);
                    }
                }

                // @see  ID-6827  Use array_search with lowercase values because it works case-sensitive.
                $l_id = array_search(mb_strtolower($p_value), array_map('mb_strtolower', $l_table_content), true);

                if ($l_id) {
                    $this->m_log->debug('Value \'' . $p_value . '\' matched in table');
                } else {
                    $this->m_log->debug('Value not matched in table');
                }

                /*
                // @see  ID-6385  Substrings should not be used to determine a value.
                $this->m_log->debug('Trying to parse it again');

                foreach ($l_table_content as $l_table_id => $l_table_title) {
                    if (stristr($l_table_title, $p_value)) {
                        $this->m_log->debug("Value exists only as substring in '" . $l_table_title . "'");
                        $l_id = $l_table_id;
                    }
                }
                */

                return $l_id;
            }

            $this->m_log->debug('Value not matched in table');

            return false;
        } elseif (isset($p_property_data[self::CL__CAT__PROPERTY__CALLBACK]) && is_string($p_property_data[self::CL__CAT__PROPERTY__CALLBACK])) {
            // ID-3524  Check for p_arData callback.
            $l_callback = null;

            // Check if we have a fitting string BEFORE unserializing.
            if (preg_match('~^O:(\d+):~', $p_property_data[self::CL__CAT__PROPERTY__CALLBACK])) {
                $l_callback = Unserialize::toObject($p_property_data[self::CL__CAT__PROPERTY__CALLBACK], [isys_callback::class]);
            }

            if ($l_callback instanceof isys_callback) {
                $l_data = $l_callback->execute();
                $language = isys_application::instance()->container->get('language');
                foreach ($l_data as $key => $entry) {
                    $l_data[$key] = $language->get($entry);
                }

                // @see  ID-6827  Use array_search with lowercase values because it works case-sensitive.
                $l_id = array_search(mb_strtolower($language->get($p_value)), array_map('mb_strtolower', $l_data), true);

                if ($l_id) {
                    $this->m_log->debug('Value \'' . $p_value . '\' matched in table');
                } else {
                    $this->m_log->debug('Value not matched in table');
                }

                /*
                // @see  ID-6385  Substrings should not be used to determine a value.
                $this->m_log->debug('Trying to parse it again');

                foreach ($l_data as $l_data_id => $l_data_value) {
                    if (stristr($l_data_value, $p_value)) {
                        $this->m_log->debug("Value exists only as substring in '" . $l_data_value . "'");
                        $l_id = $l_data_id;
                    }
                }
                */

                return $l_id;
            }
        } elseif (isset($p_property_data[self::CL__CAT__PROPERTY__ARRAY_DATA])) {
            // @see ID-5022 In case that we only have an array data
            $dialogData = $p_property_data[self::CL__CAT__PROPERTY__ARRAY_DATA];
            if (is_string($p_value)) {
                foreach ($dialogData as $dialogId => $dialogVaue) {
                    // @see  ID-6827  Use lowercase values.
                    if (mb_strtolower($p_value) === mb_strtolower(isys_application::instance()->container->get('language')->get($dialogVaue))) {
                        return $dialogId;
                    }
                }
            }
        }

        return $p_value;
    }

    /**
     * Helper: Dialog Plus.
     *
     * @param   string  $p_value
     * @param   array   $p_property_data
     * @param   boolean $p_force
     *
     * @return  mixed
     */
    private function csv_helper__dialog_plus($p_value, $p_property_data, $p_force = false, $parentId = null)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE && !$p_force) {
            return $p_value;
        }

        if (empty($p_value) && strlen($p_value) === 0) {
            return null;
        }

        if (($l_id = $this->csv_helper__dialog($p_value, $p_property_data, $p_force))) {
            return $l_id;
        }

        if ($p_property_data[self::CL__HELPER__IS_RESTRICTED_UNIT] === true) {
            $this->m_log->info("Avoiding creating new entry for '$p_value' in limited units list category");
            return null;
        }

        $this->m_log->info("Creating new entry for '$p_value'");
        $l_custom_identifier = null;

        if (isset($p_property_data[self::CL__CAT__PROPERTY__IDENTIFIER])) {
            $l_custom_identifier = $p_property_data[self::CL__CAT__PROPERTY__IDENTIFIER];
        }

        // @see ID-8866 Creating a CMDB-Status needs a little different logic.
        if ($p_property_data[self::CL__CAT__PROPERTY__PARAM] === 'isys_cmdb_status' || $p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0] === 'isys_cmdb_status') {
            $daoStatus = isys_cmdb_dao_status::instance(isys_application::instance()->container->get('database'));
            $constant = Purify::formatConstant("C__CMDB_STATUS__{$p_value}");

            $statusId = $daoStatus->get_cmdb_status_by_const($constant)->get_row_value('isys_cmdb_status__id');

            if (is_numeric($statusId)) {
                return $statusId;
            }

            return $daoStatus->create(
                $constant,
                $p_value,
                'FFFFFF'
            );
        }

        return $this->m_dao_dialog->create($p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0], $p_value, 50, null, C__RECORD_STATUS__NORMAL, $parentId, $l_custom_identifier);
    }

    /**
     * Import helpfer for interfaces.
     *
     * @param string  $p_value
     * @param array   $p_property_data
     * @param boolean $p_force
     *
     * @return mixed|null
     */
    private function csv_helper__interface_p($p_value, $p_property_data, $p_force = false)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $p_value;
        }

        if (empty($p_value) && strlen($p_value) === 0) {
            return null;
        }

        $l_interface_dao = isys_cmdb_dao_category_g_network_interface::instance(isys_application::instance()->database);

        // @see  ID-7986  Fix the query condition by double-escaping backslashes.
        $l_res = $l_interface_dao->get_data(
            null,
            self::get_current_object(),
            'AND isys_catg_netp_list__title LIKE ' . $l_interface_dao->convert_sql_text('%' . str_replace('\\', '\\\\', $p_value) . '%'),
            null,
            C__RECORD_STATUS__NORMAL
        );

        if (is_countable($l_res) && count($l_res)) {
            return $l_res->get_row_value('isys_catg_netp_list__id');
        }

        return $l_interface_dao->create(self::get_current_object(), $p_value, null, null, null, null, null, C__RECORD_STATUS__NORMAL);
    }

    /**
     * Import helpfer for hostaddress aliases.
     *
     * @param string  $p_value
     * @param array   $p_property_data
     * @param boolean $p_force
     *
     * @return mixed|null
     */
    private function csv_helper__exportHostaddressAliases($p_value, $p_property_data, $p_force = false)
    {
        $l_return = [];
        $l_items = array_map('trim', explode(';', $p_value));

        foreach ($l_items as $l_item) {
            $l_domain = explode('.', $l_item);
            $l_hostname = array_shift($l_domain);

            $l_return[] = [
                'host'   => $l_hostname,
                'domain' => implode('.', $l_domain)
            ];
        }

        return [self::CL__HELPER__VALUE => $l_return];
    }

    /**
     * Helper: Custom dialog+
     *
     * @param      $p_value
     * @param      $p_property_data
     * @param bool $p_force
     *
     * @return mixed
     */
    private function csv_helper__exportCustomFieldDialogPlus($p_value, $p_property_data, $p_force = false)
    {
        $parentProp = null;
        $isChild = isset($p_property_data['property_ui_params']['dialogDependency']) && $p_property_data['property_ui_params']['dialogDependency'] === PropertyTypes::DEPENDENCY_SECONDARY;
        $isParent = isset($p_property_data['property_ui_params']['dialogDependency']) && $p_property_data['property_ui_params']['dialogDependency'] === PropertyTypes::DEPENDENCY_PRIMARY;

        if ($isChild && isset($p_property_data['property_ui_params']['dialogLinkedTo'])) {
            $parentProp = $this->m_category_map[$this->currentCategoryConstant][self::CL__CAT__PROPERTIES]['f_popup_' . $p_property_data['property_ui_params']['dialogLinkedTo']];
        }

        if ($p_property_data['multiselect']) {
            $l_items = array_map('trim', explode(';', $p_value));
            $l_return = [];

            foreach ($l_items as $l_item) {
                $l_item_id = $this->csv_helper__dialog($l_item, $p_property_data, true);

                if (!$l_item_id) {
                    $this->m_log->debug("Creating value '" . $l_item . "' in table '" . $p_property_data['property_table'] . "'!");
                    $l_return[] = $this->m_dao_dialog->create(
                        $p_property_data[self::CL__CAT__PROPERTY__REFERENCES][0],
                        $l_item,
                        50,
                        null,
                        C__RECORD_STATUS__NORMAL,
                        null,
                        $p_property_data[self::CL__CAT__PROPERTY__IDENTIFIER]
                    );
                } else {
                    $this->m_log->debug("Found value '" . $l_item . "' in table '" . $p_property_data['property_table'] . "'!");
                    $l_return[] = $l_item_id;
                }
            }

            return [self::CL__HELPER__VALUE => $l_return];
        }

        $parentFieldValue = null;

        // @see ID-8961 Specific handling for 'child' dialog fields.
        if ($isChild && $parentProp) {
            if (isset($this->customDialogParentData[$this->currentRowIndex][$parentProp['property_tag']])) {
                $parentFieldValue = $this->customDialogParentData[$this->currentRowIndex][$parentProp['property_tag']];
            } else {
                foreach ($this->m_assignment_map as $index => $config) {
                    if ($config['category'] === $this->currentCategoryConstant && $config['property'] === $parentProp['property_tag']) {
                        $parentFieldValue = $this->csv_helper__exportCustomFieldDialogPlus($this->m_raw_data[$this->currentRowIndex][$index], $parentProp, $p_force);
                    }
                }
            }
        }

        $dialogValue = $this->csv_helper__dialog_plus($p_value, $p_property_data, $p_force, $parentFieldValue);

        if ($isParent) {
            $this->customDialogParentData[$this->currentRowIndex][$p_property_data['property_tag']] = $dialogValue;
        }

        return $dialogValue;
    }

    /**
     * Decide if the passed value represents 'yes' or 'no'.
     *
     * @param mixed $value
     * @param array $propertyData
     *
     * @return null|int
     * @throws Exception
     */
    private function csv_helper__get_yes_or_no($value, $propertyData): ?int
    {
        $value = strtolower(trim($value));

        if ($value === '') {
            return null;
        }

        $yes = isys_application::instance()->container->get('language')->get('LC__UNIVERSAL__YES');

        if (strpos($value, 'yes') !== false || strpos($value, 'ja') !== false || strpos($value, $yes) !== false) {
            return 1;
        }

        $no = isys_application::instance()->container->get('language')->get('LC__UNIVERSAL__NO');

        if (strpos($value, 'no') !== false || strpos($value, 'nein') !== false || strpos($value, $no) !== false) {
            return 0;
        }

        return $value ? 1 : 0;
    }

    /**
     * Helper: Date
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return mixed
     */
    private function csv_helper__date($p_value, $p_property_data, $p_format = 'Y-m-d H:i:s')
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        /**
         * @see  ID-6321  Do not try to convert empty values into dates
         * @see  ID-7513  Check if the given data can be converted to a date, before further processing it (might result in error)
         */
        if (empty($p_value) || !strtotime($p_value)) {
            return '';
        }

        $datetime = DateTime::createFromFormat('d.m.y', $p_value) ?: new DateTime($p_value);

        $this->m_log->debug(sprintf("Delivered value '%s' (%s) converted to '%s'.", $p_value, $datetime->getTimestamp(), $datetime->format('Y-m-d H:i:s')));

        return $datetime->format($p_format);
    }

    /**
     * Helper: Date
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return mixed
     */
    private function csv_helper__exportCustomFieldCalendar($p_value, $p_property_data)
    {
        return $this->csv_helper__date($p_value, $p_property_data, 'Y-m-d');
    }

    /**
     * Helper: Date
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return mixed
     */
    private function csv_helper__exportCustomFieldCalendarWithTime($p_value, $p_property_data)
    {
        return $this->csv_helper__date($p_value, $p_property_data, 'Y-m-d H:i:s');
    }

    /**
     * Helper for custom yes-no field.
     *
     * @param mixed $p_value
     * @param array $p_property_data
     *
     * @return string
     */
    private function csv_helper__exportCustomFieldYesNoDialog($p_value, $p_property_data): string
    {
        if ($p_value === 'LC__UNIVERSAL__YES' || $p_value === 'LC__UNIVERSAL__NO') {
            return $p_value;
        }

        return $this->csv_helper__get_yes_or_no($p_value, $p_property_data) ? 'LC__UNIVERSAL__YES' : 'LC__UNIVERSAL__NO';
    }

    /**
     * Helper: Timeperiod.
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__timeperiod($p_value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        $l_convert = new isys_convert;
        $l_value = (int)$p_value;
        $l_unit = self::prepare_value($p_value);

        if (!empty($l_value) && !empty($l_unit)) {
            $this->m_log->debug(sprintf("Delivered value '%s' splitted to unit '%s' and value '%s'.", $p_value, $l_unit, $l_value));

            $l_unit_table = $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_table'];
            $l_method = $p_property_data[self::CL__CAT__PROPERTY__PARAM][0];

            $l_unit_table_content = [];

            if ($l_unit_table) {
                $l_res = $this->m_dao_dialog->retrieve("SELECT * FROM $l_unit_table WHERE TRUE;");

                if (is_countable($l_res) && count($l_res)) {
                    while ($l_row = $l_res->get_row()) {
                        $l_unit_table_content[$l_row[$l_unit_table . '__const']] = [
                            str_replace([
                                '(',
                                ')'
                            ], '', isys_application::instance()->container->get('language')
                                ->get($l_row[$l_unit_table . '__title'])),
                            $l_row[$l_unit_table . '__id']
                        ];
                    }

                    if (is_array($l_unit_table_content)) {
                        foreach ($l_unit_table_content as $l_unit_const => $l_unit_data) {
                            if (stristr($l_unit_data[0], $l_unit) || stristr($l_unit, $l_unit_data[0])) {
                                $p_value = [
                                    self::CL__HELPER__VALUE    => (!empty($l_method)) ? $l_convert->$l_method(0, $l_value, $l_unit_const) : $l_value,
                                    self::CL__HELPER__UNIT_ID  => $l_unit_data[1],
                                    self::CL__HELPER__UNIT_ROW => $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_row'],
                                    self::CL__HELPER__UNIT_TAG => $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_tag'],
                                ];
                            }
                        }
                    }
                }
            }
        } else {
            $this->m_log->debug("Unable to split value '" . $p_value . "'. No unit found in '{$p_value}' returning value.");
            return $l_value;
        }

        return (is_array($p_value)) ? $p_value : null;
    }

    /**
     * Helper: Convert
     *
     * @param $p_value
     * @param $p_property_data
     *
     * @return mixed
     * @throws isys_exception_database
     */
    private function csv_helper__convert($p_value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        $l_value = (float)str_replace(',', '.', $p_value);
        $l_unit = self::prepare_value($p_value);

        if (empty($l_unit)) {
            $this->m_log->debug("Unable to split value '" . $p_value . "'.");

            return null;
        }

        $this->m_log->debug(sprintf("Delivered value '%s' splitted to unit '%s' and value '%s'.", $p_value, $l_unit, $l_value));

        $l_unit_table_content = [];

        // Compare unit with tables title row.
        $l_unit_table = $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_table'];

        // Retrieve unit table content.
        if ($l_unit_table) {
            $l_sql = "SELECT * FROM $l_unit_table WHERE TRUE";
            $l_res = $this->m_dao_dialog->retrieve($l_sql);

            if ($l_res->num_rows()) {
                while ($l_row = $l_res->get_row()) {
                    $l_translation = trim(str_replace('/', '', isys_application::instance()->container->get('language')
                        ->get($l_row[$l_unit_table . "__title"])));
                    $l_unit_table_content[$l_row[$l_unit_table . "__const"]] = [
                        $l_translation,
                        $l_row[$l_unit_table . '__id'],
                        strtolower($l_translation)
                    ];
                }

                // Comparison parsed unit == unit-table-title.
                if (is_array($l_unit_table_content)) {
                    foreach ($l_unit_table_content as $l_unit_title) {
                        if ($l_unit_title[2] === $l_unit) {
                            $p_value = [
                                self::CL__HELPER__VALUE    => $l_value,
                                self::CL__HELPER__UNIT_ID  => $l_unit_title[1],
                                self::CL__HELPER__UNIT_ROW => $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_row'],
                                self::CL__HELPER__UNIT_TAG => $p_property_data[self::CL__CAT__PROPERTY__PARAM]['unit_tag'],
                            ];
                            break;
                        }
                    }
                }
            }
        }

        if (!is_array($p_value)) {
            $this->m_log->debug("Unable to find unit '" . $l_unit . "'.");

            return null;
        }

        return $p_value;
    }

    /**
     * Get object type by ui param 'catFilter' if its set.
     *
     * @param $category
     * @param $property
     */
    private function getObjectTypeByUiCatFilter($category, $property): iterable
    {
        if (isset($this->m_category_map[$category][self::CL__CAT__PROPERTIES][$property][self::CL__CAT__PROPERTY__UI_PARAMS]['catFilter'])) {
            $categories = explode(';', $this->m_category_map[$category][self::CL__CAT__PROPERTIES][$property][self::CL__CAT__PROPERTY__UI_PARAMS]['catFilter']);


            $globalCategories = filter_array_by_value_of_defined_constants(
                array_filter($categories, function ($categoryConst) {
                    return strpos($categoryConst, 'CATG') !== false;
                })
            );

            $specificCategories = filter_array_by_value_of_defined_constants(
                array_filter($categories, function ($categoryConst) {
                    return strpos($categoryConst, 'CATS') !== false;
                })
            );
            $result = null;

            // We only need the first object type
            if (!empty($globalCategories)) {
                $result = $this->m_dao_dialog->get_obj_type_by_catg($globalCategories);
            } elseif (!empty($specificCategories)) {
                $result = $this->m_dao_dialog->get_objtype_by_cats_id(current($specificCategories));
            }

            if ($result === null) {
                return [];
            }

            while ($row = $result->get_row()) {
                yield $row['isys_obj_type__id'];
            }
        }
        return [];
    }

    /**
     * @param string $objectTitle
     *
     * @return int|false
     */
    private function getObjectIdByCategoryFilter(string $objectTitle)
    {
        $category = $this->m_assignment_map[$this->m_tmp_index]['category'];
        $property = $this->m_assignment_map[$this->m_tmp_index]['property'];

        $objectTypes = $this->getObjectTypeByUiCatFilter($category, $property);
        $firstObjectType = null;

        foreach ($objectTypes as $objectType) {
            if ($firstObjectType === null) {
                $firstObjectType = $objectType;
            }

            $this->m_log->notice('Search for object with name "' . $objectTitle . '" and type "' . isys_application::instance()->container->get('language')
                    ->get($this->m_dao_dialog->get_objtype_name_by_id_as_string($objectType)) . '"');
            $objectId = $this->search_object_by_title($objectTitle, $objectType) ?: false;

            if ($objectId) {
                $this->m_log->debug(" > Found {$objectId}");
                return (int) $objectId;
            }
        }
        $this->m_log->debug(" > Found nothing.");
        if ($firstObjectType > 0 && $this->m_object_type_assignment[$this->m_tmp_index]['create-object'] == 1) {
            $this->m_log->info(' > A new object will be created!');
            return $this->m_dao_dialog->insert_new_obj($firstObjectType, null, $objectTitle, null, C__RECORD_STATUS__NORMAL, null, null, true);
        }

        return false;
    }

    /**
     * Helper for Connections.
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     */
    private function csv_helper__connection($p_value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__DATASTRUCTURE) {
            return $p_value;
        }

        if ($this->m_tmp_index === null || !isset($this->m_object_type_assignment[$this->m_tmp_index])) {
            $this->m_log->notice('Simple search for object with name "' . $p_value . '"');
            $l_obj_id = $this->search_object_by_title($p_value);
            $this->m_log->debug(' > Found ' . ($l_obj_id ? ' a result!' : ' nothing.'));

            return $l_obj_id;
        }

        $l_object_type = null;

        if ($this->m_object_type_assignment[$this->m_tmp_index]['object-type'] != -1 && defined($this->m_object_type_assignment[$this->m_tmp_index]['object-type'])) {
            $l_object_type = constant($this->m_object_type_assignment[$this->m_tmp_index]['object-type']);
        }

        // If no object type has been found search object in all types which the category is assigned to
        if ($l_object_type === null && isset($this->m_assignment_map[$this->m_tmp_index])) {
            return $this->getObjectIdByCategoryFilter($p_value);
        }

        $this->m_log->notice('Search for object with name "' . $p_value . '" and type "' . isys_application::instance()->container->get('language')
                ->get($this->m_dao_dialog->get_objtype_name_by_id_as_string($l_object_type)) . '"');
        $l_obj_id = $this->search_object_by_title($p_value, $l_object_type) ?: false;
        $this->m_log->debug(' > Found ' . ($l_obj_id ? ' a result!' : ' nothing.'));

        if (!$l_obj_id && $l_object_type > 0 && $this->m_object_type_assignment[$this->m_tmp_index]['create-object'] == 1) {
            $this->m_log->info(' > A new object will be created!');
            $l_obj_id = $this->m_dao_dialog->insert_new_obj($l_object_type, null, $p_value, null, C__RECORD_STATUS__NORMAL, null, null, true);
        }

        return $l_obj_id;
    }

    /**
     * Helper for referenced Values
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return mixed
     */
    private function csv_helper__get_reference_value($p_value, $p_property_data)
    {
        $objID = self::get_current_object();
        if ($objID > 0 && isset($p_property_data[self::CL__CAT__PROPERTY__CALLBACK])) {
            if (is_string($p_property_data[self::CL__CAT__PROPERTY__CALLBACK]) && preg_match('~^O:(\d+):~', $p_property_data[self::CL__CAT__PROPERTY__CALLBACK])) {
                $p_property_data[self::CL__CAT__PROPERTY__CALLBACK] = Unserialize::toObject($p_property_data[self::CL__CAT__PROPERTY__CALLBACK], [isys_callback::class]);
            }

            try {
                if ($p_property_data[self::CL__CAT__PROPERTY__CALLBACK] instanceof isys_callback) {
                    $request = isys_request::factory()
                        ->set_object_id($objID);
                    $data = $p_property_data[self::CL__CAT__PROPERTY__CALLBACK]->execute($request);
                    if (is_array($data)) {
                        return array_search($p_value, $data) ?: $p_value;
                    }
                }
            } catch (Exception $e) {
                throw new Exception('Property helper method for property \'' . $p_property_data[self::CL__CAT__PROPERTY__TAG] . '\' could not be handled. Skipping helper.');
            }
        }

        return $p_value;
    }

    /**
     * Helper for position
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return mixed
     */
    private function csv_helper__location_property_pos($p_value, $p_property_data)
    {
        // See ID-4473
        return trim(preg_replace('/(\D)/', '', $p_value));
    }

    /**
     * Helper for formating money values
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return int
     */
    private function csv_helper__money_format($p_value, $p_property_data)
    {
        return isys_helper::filter_number($p_value);
    }

    /**
     * Helper for creating contact bundles
     *
     * @param string $p_value
     * @param array  $p_property_data
     *
     * @return boolean
     */
    private function csv_helper__contact($p_value, $p_property_data)
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $p_value;
        }

        /** @var isys_contact_dao_reference $l_dao_contact */
        $l_dao_contact = isys_contact_dao_reference::factory($this->m_dao_dialog->get_database_component());
        $l_dao_contact->clear();

        $l_object_id = $this->csv_helper__object($p_value, $p_property_data);

        if ($l_object_id) {
            $l_dao_contact->insert_data_item($l_object_id);
            $l_dao_contact->save();

            return $l_dao_contact->get_id();
        }

        return false;
    }

    /**
     * Search for object by title.
     *
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  mixed
     * @throws  Exception
     * @throws  isys_exception_database
     */
    private function csv_helper__object($p_value, $p_property_data, array $p_objtypes = [])
    {
        if (self::get_step() != self::CL__IMPORT_STEP__IMPORT) {
            return $p_value;
        }

        if (trim($p_value) === '') {
            $this->m_log->notice('Got an empty value, skipping...');

            return null;
        }

        if ($this->m_tmp_index !== null && isset($this->m_object_type_assignment[$this->m_tmp_index])) {
            $l_obj_type_id = null;

            if (isset($this->m_object_type_assignment[$this->m_tmp_index]['object-type']) && defined($this->m_object_type_assignment[$this->m_tmp_index]['object-type'])) {
                $l_obj_type_id = constant($this->m_object_type_assignment[$this->m_tmp_index]['object-type']);
                $this->m_log->notice('Search for object with name "' . $p_value . '" and type "' . isys_application::instance()->container->get('language')
                        ->get($this->m_dao_dialog->get_objtype_name_by_id_as_string($l_obj_type_id)) . '"');
            }

            // If no object type has been found search object in all types which the category is assigned to
            if ($l_obj_type_id === null && isset($this->m_assignment_map[$this->m_tmp_index])) {
                return $this->getObjectIdByCategoryFilter($p_value);
            }

            $l_obj_id = $this->search_object_by_title($p_value, $l_obj_type_id) ?: false;
            $this->m_log->debug(' > Found ' . ($l_obj_id ? ' a result!' : ' nothing.'));

            if (!$l_obj_id && $this->m_object_type_assignment[$this->m_tmp_index]['create-object'] == 1) {
                $this->m_log->info(' > A new object will be created!');

                if ($l_obj_type_id === null) {
                    $l_obj_type_id = defined_or_default('C__OBJTYPE__MIGRATION_OBJECT');
                }

                $l_obj_id = $this->m_dao_dialog->insert_new_obj($l_obj_type_id, null, $p_value, null, C__RECORD_STATUS__NORMAL, null, null, true);
            }

            return $l_obj_id;
        }

        $l_object_id = false;

        $this->m_log->notice('Simple search for object with name "' . $p_value . '"');

        $l_search_query = 'SELECT isys_obj__id, isys_obj__isys_obj_type__id FROM isys_obj WHERE TRIM(isys_obj__title) = BINARY ' .
            $this->m_dao_dialog->convert_sql_text($p_value);
        if (count($p_objtypes) > 0) {
            $l_search_query .= ' AND isys_obj__isys_obj_type__id ' . $this->m_dao_dialog->prepare_in_condition($p_objtypes);
        }

        $l_res = $this->m_dao_dialog->retrieve($l_search_query);

        if (is_countable($l_res) && count($l_res) === 1) {
            $l_row = $l_res->get_row();

            $l_object_id = $l_row['isys_obj__id'];
            $this->m_log->debug(' > Found one result, proceding... (#' . $l_object_id . ')');

            // Location ROW.
            if ($p_property_data[self::CL__CAT__PROPERTY__ROW] == 'isys_catg_location_list__parentid') {
                $this->m_log->debug('We have to check whether the found object is an Container');

                if (self::is_container($l_row['isys_obj__isys_obj_type__id']) || $l_row['isys_obj__id'] == defined_or_default('C__OBJ__ROOT_LOCATION')) {
                    $this->m_log->debug('Found Object is a container');
                } else {
                    $this->m_log->warning('Object is not a container');
                    unset($l_object_id);
                }
            }
        } else {
            if (is_countable($l_res) && count($l_res) > 1) {
                $this->m_log->debug(' > Found more than one result, skipping...');
            } else {
                $this->m_log->debug(' > No results...');
            }
        }

        return $l_object_id;
    }

    /**
     * Wrapper for csv_helper__object
     *
     * @param string $value
     * @param array  $propertyData
     *
     * @return mixed
     */
    private function csv_helper__exportCustomFieldObject($value, $propertyData)
    {
        if (self::get_step() !== self::CL__IMPORT_STEP__IMPORT) {
            return $value;
        }

        // @see ID-8591 We need to return the original value, because we have some follow-up logic that will look the object reference up!
        foreach ($this->m_assignment_map as $item) {
            if ($propertyData['property_tag'] === $item['property']) {
                return $value;
            }
        }

        // @see ID-6000  Only explode "not escaped" commas.
        $return = [];
        $objects = $this->splitNonEscapedCommas((string) $value);

        foreach ($objects as $object) {
            $objectId = $this->csv_helper__object(str_replace('\,', ',', $object), $propertyData);

            if ($objectId) {
                $return[] = $objectId;
            }
        }

        // @see ID-6523  Return values according to the results.
        if (count($return) === 0) {
            return null;
        }

        if (count($return) === 1) {
            return $return[0];
        }

        return $return;
    }

    /**
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  array
     */
    private function csv_helper__dialog_multiselect($p_value, $p_property_data)
    {
        // Check whether provided value is empty
        if (mb_strlen($p_value) == 0) {
            return false;
        }

        $l_return = $l_items = array_map('trim', explode(';', $p_value));

        if (isset($p_property_data['property_table'])) {
            $l_return = [];

            foreach ($l_items as $l_item) {
                $p_property_data[self::CL__CAT__PROPERTY__REFERENCES] = [$p_property_data['property_table'], $p_property_data['property_table'] . '__id'];

                $l_item_id = $this->csv_helper__dialog($l_item, $p_property_data, true);

                if (!$l_item_id) {
                    $this->m_log->debug("Creating value '" . $l_item . "' in table '" . $p_property_data['property_table'] . "'!");
                    $l_return[] = $this->m_dao_dialog->create($p_property_data['property_table'], $l_item, 50, null, C__RECORD_STATUS__NORMAL);
                } else {
                    $this->m_log->debug("Found value '" . $l_item . "' in table '" . $p_property_data['property_table'] . "'!");
                    $l_return[] = $l_item_id;
                }
            }
        }

        return [self::CL__HELPER__VALUE => $l_return];
    }

    /**
     * @param   string $p_value
     * @param   array  $p_property_data
     *
     * @return  string
     */
    private function csv_helper__password($p_value, $p_property_data)
    {
        return $p_value;
    }

    /**
     * @param $value
     * @param $propertyData
     *
     * @return mixed
     */
    private function csv_helper__applicationDatabaseSchema($value, $propertyData)
    {
        return $this->csv_helper__object($value, $propertyData);
    }

    /**
     * @param $value
     * @param $propertyData
     *
     * @return mixed
     */
    private function csv_helper__exportGateway($value, $propertyData)
    {
        if (self::get_current_object() !== null) {
            $this->m_log->debug('Searching for gateway "' . $value . '".');
            $dao = isys_cmdb_dao_category_s_net::instance(isys_application::instance()->container->get('database'));
            $condition = 'AND isys_cats_net_ip_addresses_list__title = ' . $dao->convert_sql_text($value);
            $host = $dao->get_assigned_hosts(self::get_current_object(), $condition)->get_row();

            if (isset($host['isys_catg_ip_list__id'])) {
                $this->m_log->debug('Found gateway "' . $host['isys_obj__title'] . '".');
                $value = $host['isys_catg_ip_list__id'];
            } else {
                $this->m_log->debug('No gateway found for "' . $value . '".');
                $value = null;
            }
        }

        return $value;
    }

    /**
     * Search for object by title.
     *
     * @param   string  $p_title
     * @param   integer $p_obj_type
     *
     * @return  mixed
     */
    private function search_object_by_title($p_title, $p_obj_type = null)
    {
        if (!empty($p_title)) {
            return $this->m_dao_dialog->get_obj_id_by_title($p_title, $p_obj_type);
        }

        return false;
    }

    /**
     * Builds the specific array structure for SYNC.
     *
     * @param   string $p_category_const
     * @param   array  $p_properties
     *
     * @return  mixed
     */
    private function build_for_sync($p_category_const, $p_properties)
    {
        $l_property_array = [];

        if (is_array($p_properties)) {
            $this->currentCategoryDataForSync = $p_properties;

            foreach ($p_properties as $l_property_id => $l_property_value) {
                // @see ID-5748 Allow empty values depending on setting
                $tag = $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES][$l_property_id][self::CL__CAT__PROPERTY__TAG];

                if ($l_property_value !== '' || self::$m_singlevalue_overwrite_empty_values) { // @see ID-4203 value can be 0
                    if (is_array($l_property_value)) {
                        // @see ID-11080 Fix follow-up bug, if the value is '0'.
                        $l_property_array[self::CL__SYN_PROPERTY][$tag][C__DATA__VALUE] = $l_property_value[self::CL__HELPER__VALUE] ?? $l_property_value;
                        $l_property_array[self::CL__SYN_PROPERTY][$tag]['id'] = $l_property_value;

                        if (isset($l_property_value[self::CL__HELPER__UNIT_TAG]) && !empty($l_property_value[self::CL__HELPER__UNIT_TAG])) {
                            $l_unit_tag = $l_property_value[self::CL__HELPER__UNIT_TAG];
                            $l_property_array[self::CL__SYN_PROPERTY][$l_unit_tag][C__DATA__VALUE] = $l_property_value[self::CL__HELPER__UNIT_ID];
                            $l_property_array[self::CL__SYN_PROPERTY][$l_unit_tag]['id'] = $l_property_value[self::CL__HELPER__UNIT_ID];
                        }
                    } else {
                        // Try finding out the original mapping-index.
                        if (isset($this->m_assignment_map[$p_category_const][$l_property_id])) {
                            $this->m_tmp_index = $this->m_assignment_map[$p_category_const][$l_property_id];
                        } else {
                            foreach ($this->m_assignment_map as $l_index => $l_assignment) {
                                if ($l_assignment['category'] === $p_category_const && $l_assignment['property'] === $l_property_id) {
                                    // Index found
                                    $this->m_tmp_index = $l_index;
                                    break;
                                }
                            }
                        }

                        $l_property_value = $this->universal_helper($p_category_const, $l_property_id, $l_property_value);
                        $this->m_tmp_index = null;

                        $l_property_array[self::CL__SYN_PROPERTY][$tag][C__DATA__VALUE] = $l_property_value;
                        $l_property_array[self::CL__SYN_PROPERTY][$tag]['id'] = $l_property_value;
                    }
                }

                $this->currentCategoryDataForSync[$l_property_id] = $l_property_array[self::CL__SYN_PROPERTY][$tag];
            }
        }

        $this->execute_callback($p_category_const, $l_property_array);

        return $this->check_essential_properties($p_category_const, $l_property_array);
    }

    /**
     * Execute registered callbacks
     *
     * @param string $p_category_const
     * @param array  $p_property_array
     */
    private function execute_callback($p_category_const, &$p_property_array)
    {
        if (isset(self::$m_callback_register[$p_category_const])) {
            $l_func_str = self::$m_callback_register[$p_category_const];
            if (method_exists($this, $l_func_str)) {
                $this->m_log->debug("Executing callback: '" . $l_func_str . "'");
                $this->$l_func_str($this->m_category_map[$p_category_const], $p_property_array);
            } else {
                $this->m_log->error("Unable to execute callback '" . $l_func_str . "'. Method does not exist.");
            }
        }

        // @see ID-8591 Add generic logic for custom fields.
        if (strpos($p_category_const, 'C__CATG__CUSTOM_FIELDS_') === 0) {
            $assignments = array_filter($this->m_assignment_map, function ($item) use ($p_category_const) {
                return $item['category'] === $p_category_const;
            });

            if (empty($assignments)) {
                return;
            }

            foreach ($assignments as $index => $item) {
                if (!isset(self::$m_prop_search[$p_category_const . '_' . $index])) {
                    continue;
                }

                $field = $item['property'];

                $searchPhrase = $p_property_array['properties'][$field]['value'];

                if (trim($searchPhrase) === '') {
                    return;
                }

                $searchParameter = isys_format_json::decode(self::$m_prop_search[$p_category_const . '_' . $index]);
                $multiselection = isset($this->m_category_map[$p_category_const]['cat_properties'][$field][self::CL__CAT__PROPERTY__UI_PARAMS]['multiselection'])
                    && $this->m_category_map[$p_category_const]['cat_properties'][$field][self::CL__CAT__PROPERTY__UI_PARAMS]['multiselection'];

                // @see ID-9039 We need to process single- and multivalue fields differently.
                if ($multiselection) {
                    $data = [];
                    $searchPhraseArray = $this->splitNonEscapedCommas($searchPhrase);

                    foreach ($searchPhraseArray as $searchPhrase) {
                        if (trim($searchPhrase) === '') {
                            continue;
                        }

                        $foundObject = $this->handleSpecialObjectSearch($index, $searchPhrase, $searchParameter);

                        if ($foundObject !== null) {
                            $data[] = $foundObject;
                        }
                    }

                    $p_property_array['properties'][$field]['value'] = null;

                    if (count($data)) {
                        $p_property_array['properties'][$field]['value'] = $data;
                    }
                } else {
                    $p_property_array['properties'][$field]['value'] = $this->handleSpecialObjectSearch($index, $searchPhrase, $searchParameter);
                }
            }
        }
    }

    /**
     * @param int    $index
     * @param string $searchPhrase
     * @param array  $searchParameter
     *
     * @return int|null
     * @throws isys_exception_cmdb
     * @throws isys_exception_dao
     * @throws isys_exception_database
     */
    private function handleSpecialObjectSearch(int $index, string $searchPhrase, array $searchParameter)
    {
        $this->m_log->debug('Searching object via "' . $searchPhrase . '" in ' . $searchParameter['search'] . '.');

        $objectTypeId = null;
        $join = '';
        $conditions = [
            ' AND isys_obj__status = ' . $this->m_dao_dialog->convert_sql_int(C__RECORD_STATUS__NORMAL)
        ];

        if ($searchParameter['table'] !== 'isys_obj' && strpos($searchParameter['table'], '_list') !== false) {
            $join = ' INNER JOIN isys_obj ON isys_obj__id = ' . $searchParameter['table'] . '__isys_obj__id ';
        }

        if ($this->m_object_type_assignment[$index]['object-type'] != -1 && defined($this->m_object_type_assignment[$index]['object-type'])) {
            $objectTypeId = constant($this->m_object_type_assignment[$index]['object-type']);
        }

        if ($objectTypeId && is_numeric($objectTypeId)) {
            $conditions[] = ' AND isys_obj__isys_obj_type__id = ' . $this->m_dao_dialog->convert_sql_id($objectTypeId);
        }
        $additionConditions = implode(' ', $conditions);

        $sql = "SELECT {$searchParameter['select']}
            FROM {$searchParameter['table']}
            {$join}
            WHERE {$searchParameter['search']} = {$this->m_dao_dialog->convert_sql_text($searchPhrase)} {$additionConditions}";

        $foundObjectId = self::$m_s_dao->retrieve($sql)->get_row_value($searchParameter['select']);

        if (!$foundObjectId) {
            $this->m_log->info('Could not find object!');

            if ($this->m_object_type_assignment[$index]['create-object'] == 1 && $objectTypeId > 0) {
                $this->m_log->info(' > A new object will be created!');
                $foundObjectId = $this->m_dao_dialog->insert_new_obj(
                    $objectTypeId,
                    null,
                    $searchPhrase,
                    null,
                    C__RECORD_STATUS__NORMAL,
                    null,
                    null,
                    true
                );

                if (isset($searchParameter['select'])) {
                    if ($searchParameter['select'] === 'isys_catg_accounting_list__isys_obj__id') {
                        $this->createAccountingEntryForLocation($foundObjectId, $searchPhrase);
                    }
                }
                return (int)$foundObjectId;
            } else {
                return null;
            }
        } else {
            $this->m_log->info('Object found: "' . $searchPhrase . '" (' . $foundObjectId . ')');
            return (int)$foundObjectId;
        }
    }

    /**
     * Callback for port
     *
     * @param array $p_category_structure
     * @param array $p_category_data
     */
    private function callback_port($p_category_structure, &$p_category_data)
    {
        if (isset($p_category_data['properties']['virtual_interface']['value'])) {
            $l_object_id = self::get_current_object();
            $l_interface_title = $p_category_data['properties']['virtual_interface']['value'];

            $l_dao = isys_cmdb_dao_category_g_network_interface::instance(isys_application::instance()->database);

            // @see  ID-7986  Fix the query condition by double-escaping backslashes.
            $l_interface_id = $l_dao->get_data(
                null,
                $l_object_id,
                ' AND isys_catg_netp_list__title LIKE ' . $l_dao->convert_sql_text(str_replace('\\', '\\\\', $l_interface_title)) . ' ',
                null,
                C__RECORD_STATUS__NORMAL
            )
                ->get_row_value('isys_catg_netp_list__id');

            if (!$l_interface_id) {
                $l_interface_id = $l_dao->create($l_object_id, $l_interface_title, null, null, null, null, null, C__RECORD_STATUS__NORMAL);
            }

            if ($l_interface_id > 0) {
                $p_category_data['properties']['interface'] = [
                    "value" => $l_interface_id,
                    "id"    => $l_interface_id,
                ];
            } else {
                $this->m_log->error("Unable to find and/or create a interface named '" . $p_category_data['properties']['virtual_interface']['value'] . "'.");
            }
        }
    }

    /**
     * Callback for model
     *
     * @param array $p_category_structure
     * @param array $p_category_data
     *
     * @throws Exception
     * @throws isys_exception_dao
     * @throws isys_exception_database
     */
    private function callback_model($p_category_structure, &$p_category_data)
    {
        if (isset($p_category_data['properties']['manufacturer']['value']) && isset($p_category_data['properties']['title']['value'])) {
            $l_title = $p_category_data['properties']['title']['value'];
            $l_manufacturer_id = $p_category_data['properties']['manufacturer']['value'];

            $l_sql = "SELECT isys_model_title__id FROM isys_model_title " . "WHERE isys_model_title__title = " . $this->m_dao_dialog->convert_sql_text($l_title) . " AND " .
                "isys_model_title__isys_model_manufacturer__id = " . $this->m_dao_dialog->convert_sql_id($l_manufacturer_id) . ";";

            $l_res = $this->m_dao_dialog->retrieve($l_sql);

            if (!$l_res->num_rows()) {
                $l_sql = "INSERT INTO isys_model_title SET
                    isys_model_title__title = " . $this->m_dao_dialog->convert_sql_text($l_title) . ",
                    isys_model_title__status = " . $this->m_dao_dialog->convert_sql_id(C__RECORD_STATUS__NORMAL) . ",
                    isys_model_title__isys_model_manufacturer__id = " . $this->m_dao_dialog->convert_sql_id($l_manufacturer_id) . ";";

                $this->m_dao_dialog->update($l_sql) && $this->m_dao_dialog->apply_update();

                $p_category_data['properties']['title']['value'] = $p_category_data['properties']['title']['id'] = $this->m_dao_dialog->get_last_insert_id();
            } else {
                $l_row = $l_res->get_row();
                $p_category_data['properties']['title']['value'] = $p_category_data['properties']['title']['id'] = $l_row['isys_model_title__id'];
            }
        }
    }

    /**
     * Callback for storage device
     *
     * @param array $categoryStructure
     * @param array $categoryData
     *
     * @throws Exception
     * @throws isys_exception_dao
     * @throws isys_exception_database
     */
    private function callback_device($categoryStructure, &$categoryData)
    {
        if (isset($categoryData['properties']['manufacturer']['value']) && isset($categoryData['properties']['model']['value'])) {
            $title = $categoryData['properties']['model']['value'];
            $manufacturerId = $categoryData['properties']['manufacturer']['value'];

            $sql = "SELECT isys_stor_model__id FROM isys_stor_model " . "WHERE isys_stor_model__title = " . $this->m_dao_dialog->convert_sql_text($title) . " AND " .
                "isys_stor_model__isys_stor_manufacturer__id = " . $this->m_dao_dialog->convert_sql_id($manufacturerId) . ";";

            $res = $this->m_dao_dialog->retrieve($sql);

            if (!$res->num_rows()) {
                $sql = "INSERT INTO isys_stor_model SET
                    isys_stor_model__title = " . $this->m_dao_dialog->convert_sql_text($title) . ",
                    isys_stor_model__status = " . $this->m_dao_dialog->convert_sql_id(C__RECORD_STATUS__NORMAL) . ",
                    isys_stor_model__isys_stor_manufacturer__id = " . $this->m_dao_dialog->convert_sql_id($manufacturerId) . ";";
                $this->m_dao_dialog->update($sql) && $this->m_dao_dialog->apply_update();

                $categoryData['properties']['model']['value'] = $categoryData['properties']['model']['id'] = $this->m_dao_dialog->get_last_insert_id();
            } else {
                $row = $res->get_row();
                $categoryData['properties']['model']['value'] = $categoryData['properties']['model']['id'] = $row['isys_stor_model__id'];
            }
        }
    }

    /**
     * Callback: Assigned sim cards
     *
     * @param array $p_category_structure
     * @param array $p_category_data
     *
     * @throws Exception
     */
    private function callback_assigned_sim_cards($p_category_structure, &$p_category_data)
    {
        try {
            // Extract simcards objectId and title
            $objectId = (int)$p_category_data['properties']['isys_obj__id'][C__DATA__VALUE];
            $cardTitle = $p_category_data['properties']['isys_catg_cards_list__id'][C__DATA__VALUE];
            $dao = isys_cmdb_dao_category_g_cards::instance(isys_application::instance()->container->get('database'));

            // If we have no object ID then we can not assign/create the card
            if ($objectId === 0) {
                $p_category_data = null;
                $this->m_log->warning('Object for the sim card assignment for card "' . $cardTitle . '" is not set');
                return;
            }

            // Try to find a valid candidate with the given informations
            $p_category_data['properties']['isys_catg_cards_list__id'][C__DATA__VALUE] = $dao->getSimcardByTitle($objectId, $cardTitle);

            // Check whether simcard was fount by its id
            if (empty($p_category_data['properties']['isys_catg_cards_list__id'][C__DATA__VALUE])) {
                // We create the card in the assigned object
                $this->m_log->info('Card "' . $cardTitle . '" is not set in object with ID "' . $objectId . '". Creating card.');
                $p_category_data['properties']['isys_catg_cards_list__id'][C__DATA__VALUE] = $dao->create_data([
                    'isys_obj__id' => $objectId,
                    'title' => $cardTitle,
                    'status' => C__RECORD_STATUS__NORMAL
                ]);
            }

            // Reset object id to current object because of backward view
            $p_category_data['properties']['isys_obj__id'] = [
                'id' => self::get_current_object(),
                C__DATA__VALUE => self::get_current_object()
            ];
        } catch (\idoit\Exception\Exception $ex) {
            // No handling needed - only prevent total breakout here
        }
    }

    /**
     * Callback for contact.
     *
     * @param array $categoryStructure
     * @param array $categoryData
     *
     * @throws isys_exception_database
     */
    private function callback_contact($categoryStructure, &$categoryData)
    {
        // Memorize last index to prevent using it multiple times - the index needs to be changed each time
        static $contactIndex = 0;
        static $contactRow = 0;

        // Memorize object id - when ever it changes we need to reset memory index
        static $objectId = 0;

        if ($objectId != self::$m_current_object_id) {
            $contactIndex = -1;
        }

        if (self::$currentRow != $contactRow) {
            $contactIndex = -1;
            $contactRow = (int)self::$currentRow;
        }

        // Set objectId equal to current object
        $objectId = self::$m_current_object_id;

        $contactDatum = null;

        if (isset($categoryData['properties']['contact_object']['id']) && !empty($categoryData['properties']['contact_object']['id'])) {
            $contactDatum = $categoryData['properties']['contact_object']['id'];
        }

        if (isset($categoryData['properties']['contact_object']['value']) && !empty($categoryData['properties']['contact_object']['value'])) {
            $contactDatum = $categoryData['properties']['contact_object']['value'];
        }

        if (!$contactDatum) {
            return;
        }

        $index = null;

        // Try finding out the original mapping-index.
        if (isset($this->m_assignment_map['C__CATG__CONTACT']['contact_object'])) {
            $index = $this->m_assignment_map['C__CATG__CONTACT']['contact_object'];
        } else {
            foreach ($this->m_assignment_map as $tempIndex => $assignment) {
                if ($assignment['category'] === 'C__CATG__CONTACT' && $assignment['property'] === 'contact_object') {
                    // Check whether we are in column mode
                    if (self::$m_multivalue_mode == self::CL__MULTIVALUE_TYPE__COLUMN) {
                        // @see ID-10126 Check empty values in case a index needs skipping.
                        $emptyValues = isset($this->emptyValues[$contactRow]) && is_array($this->emptyValues[$contactRow])
                            ? $this->emptyValues[$contactRow]
                            : [];

                        // Prevent multiple usage of same index
                        if ($contactIndex < $tempIndex && !in_array((int)$tempIndex, $emptyValues, true)) {
                            $index = $contactIndex = $tempIndex;

                            break;
                        }
                    } else {
                        $index = $tempIndex;

                        break;
                    }
                }
            }
        }

        if ($index === null) {
            $this->m_log->error('Index for the contact for property "contact object" could not be determined. Skipping contact assignment.');

            return;
        }

        // @see ID-8005 Translate object title to ID. Run this code if a number is passed OR a 'special assignment' has been selected.
        if (!is_numeric($contactDatum) || isset(self::$m_prop_search['C__CATG__CONTACT_' . $index])) {
            $this->m_log->debug("Given contact has to be translated to an ID ...");

            $contactObjectId = 0;
            $objectTypeId = '';
            $searchQueryJoin = '';

            if ($this->m_object_type_assignment[$index]['object-type'] != -1 && defined($this->m_object_type_assignment[$index]['object-type'])) {
                $objectTypeId = constant($this->m_object_type_assignment[$index]['object-type']);
            }

            // @see  ID-5243  Adding a new "special assignment" method for contacts.
            if (isset(self::$m_prop_search['C__CATG__CONTACT_' . $index])) {
                $searchInfo = isys_format_json::decode(self::$m_prop_search['C__CATG__CONTACT_' . $index]);
                $searchTable = $searchInfo['table'];
                $searchTableSelectColumn = $searchInfo['select'];
                $searchTableConditionColumn = $searchInfo['search'];

                if ($searchTable !== 'isys_obj' && strpos($searchTable, '_list') !== false) {
                    $searchQueryJoin = ' INNER JOIN isys_obj ON isys_obj__id = ' . $searchTable . '__isys_obj__id ';
                }

                $this->m_log->debug('Searching contact object "' . $contactDatum . '" in ' . $searchTableConditionColumn . '.');

                $searchQuery = 'SELECT ' . $searchTableSelectColumn .
                    ' FROM ' . $searchTable .
                    $searchQueryJoin .
                    ' WHERE ' . $searchTableConditionColumn . ' = ' . $this->m_dao_dialog->convert_sql_text($contactDatum) .
                    ' AND isys_obj__status = ' . $this->m_dao_dialog->convert_sql_int(C__RECORD_STATUS__NORMAL);

                if ($objectTypeId && is_numeric($objectTypeId)) {
                    $searchQuery .= ' AND isys_obj__isys_obj_type__id = ' . $this->m_dao_dialog->convert_sql_id($objectTypeId);
                }

                // @see  ID-5276  The wrong column was selected.
                $contactObjectId = self::$m_s_dao->retrieve($searchQuery . ';')->get_row_value($searchTableSelectColumn);
            } else {
                if (is_numeric($contactDatum)) {
                    if (!$this->m_dao_dialog->obj_exists($contactDatum)) {
                        $this->m_log->debug('Contact object with id "' . $contactDatum . '" does not exist.');

                        return;
                    }
                } elseif ($objectTypeId) {
                    $contactObjectId = $this->m_dao_dialog->get_obj_id_by_title($contactDatum, $objectTypeId, C__RECORD_STATUS__NORMAL);
                }
            }

            /**
             * @see ID-6354
             */
            if (!$contactObjectId) {
                $this->m_log->info('Object with ID or title "' . $contactDatum . '" not found!');
                $categoryData['properties']['contact_object']['value'] = null;

                // Get object creation mode from assignment configuration
                $objectCreationMode = (bool)$this->m_object_type_assignment[$index]['create-object'];

                // Check whether object creation is enabled
                if (!$objectCreationMode) {
                    $this->m_log->info('Object creation will be skipped based on configuration of assignment.');

                    return;
                }

                // Check whether object type is defined and auto creation is enabled
                if (!$objectTypeId) {
                    $this->m_log->info('Object creation is not possible because of undefined object type. Please define one to allow on-the-fly object creation.');

                    return;
                }

                try {
                    // Create new object of defined type with title
                    $categoryData['properties']['contact_object']['id'] = $categoryData['properties']['contact_object']['value'] = $this->m_dao_dialog->insert_new_obj(
                        $objectTypeId,
                        null,
                        $contactDatum,
                        null,
                        C__RECORD_STATUS__NORMAL
                    );

                    // Set it into contact key too
                    $categoryData['properties']['contact'] = $categoryData['properties']['contact_object'];

                    $this->m_log->info('New object ' . $contactDatum . ' of type ' . $objectTypeId . ' successfully created!');
                } catch (Exception $exception) {
                    $this->m_log->error('Unable to create new object of type ' . $objectTypeId . ': ' . $exception->getMessage());

                    // Unset data to prevent wrong handling of it in sync()
                    $categoryData['properties']['contact_object'] = $categoryData['properties']['contact']['value'] = null;
                }

                return;
            } else {
                $this->m_log->info('Object found: ' . $contactDatum . ' (' . $contactObjectId . ')');

                $categoryData['properties']['contact_object']['id'] = $contactObjectId;
                $categoryData['properties']['contact_object']['value'] = $contactObjectId;
            }
        }

        $categoryData['properties']['contact'] = $categoryData['properties']['contact_object'];
    }

    /**
     * Get location path
     *
     * @param $locationParentId
     *
     * @return null|string|void
     * @throws isys_exception_database
     */
    private function getLocationPath($locationParentId)
    {
        // Location path cache
        static $pathCache = [];

        // Check whether parent needs to be handled or not
        if ($locationParentId == null || $locationParentId == C__OBJ__ROOT_LOCATION) {
            return;
        }

        // Check path cache for an existing value
        if (isset($pathCache[$locationParentId])) {
            return $pathCache[$locationParentId];
        }

        // Get parent location with its parent...
        $res = $this->m_dao_dialog->retrieve('SELECT isys_obj__title, isys_catg_location_list__parentid FROM isys_obj
                LEFT JOIN isys_catg_location_list ON isys_obj.isys_obj__id = isys_catg_location_list.isys_catg_location_list__isys_obj__id
                WHERE isys_obj__id = ' . $this->m_dao_dialog->convert_sql_id($locationParentId));

        // Check for available results
        if ($res->count()) {
            // Get first row
            $result = $res->get_row();

            // Check which parts needs to be concatenated
            if ($result['isys_catg_location_list__parentid'] == null || $result['isys_catg_location_list__parentid'] == C__OBJ__ROOT_LOCATION) {
                return $result['isys_obj__title'];
            } else {
                $pathCache[$locationParentId] = $this->getLocationPath($result['isys_catg_location_list__parentid']) . ' > ' . $result['isys_obj__title'];

                return $pathCache[$locationParentId];
            }
        }

        return null;
    }

    /**
     * Callback for location.
     *
     * @param   array $p_category_structure
     * @param   array $p_category_data
     *
     * @throws  Exception
     * @throws  isys_exception_database
     */
    private function callback_location($p_category_structure, &$p_category_data)
    {
        $l_index = null;
        if ($p_category_data['properties']['parent']['value']) {
            // Try finding out the original mapping-index.
            if (isset($this->m_assignment_map['C__CATG__LOCATION']['parent'])) {
                $l_index = $this->m_assignment_map['C__CATG__LOCATION']['parent'];
            } else {
                foreach ($this->m_assignment_map as $l_tmp_index => $l_assignment) {
                    if ($l_assignment['category'] === 'C__CATG__LOCATION' && $l_assignment['property'] === 'parent') {
                        $l_index = $l_tmp_index;
                        break;
                    }
                }
            }

            if ($l_index === null) {
                $this->m_log->error('Index for the location for property "parent" could not be determined. Skipping location assignment.');

                return;
            }

            $l_location_identifier = $l_location_id = $p_category_data['properties']['parent']['value'];
            $l_objecttype_id = null;
            $l_join = '';

            // Translate object title to ID.
            $this->m_log->debug('Given Location has to be translated to an ID ...');
            $l_special_search = false;

            // Check whether identifier is an location path
            // @todo whitespaces should not be taken in consideration
            if (strpos($l_location_identifier, ' > ') !== false) {
                $this->m_log->info('Location identifier includes a full path. Let us try to find a corresponding container object.');

                // Target location id
                $targetLocationId = null;
                // Strip path from Root location
                $l_location_identifier = ltrim(str_replace('Root location', '', $l_location_identifier), ' >');
                // Split location path into its atomic parts
                $locationPathPieces = array_map('trim', explode('>', $l_location_identifier));
                // Build correct location path for the check
                $l_location_identifier = strtolower(implode(' > ', $locationPathPieces));

                // Get location candidates by its title and of types which works as container
                $locationCandidateResource = $this->m_dao_dialog->retrieve('
                    SELECT isys_obj__id AS id, isys_obj__title, isys_catg_location_list__parentid FROM isys_obj
                    INNER JOIN isys_obj_type ON isys_obj.isys_obj__isys_obj_type__id = isys_obj_type.isys_obj_type__id
                    INNER JOIN isys_catg_location_list ON isys_obj.isys_obj__id = isys_catg_location_list.isys_catg_location_list__isys_obj__id
                    WHERE isys_obj_type.isys_obj_type__container = 1 AND
                          isys_obj.isys_obj__title = ' . $this->m_dao_dialog->convert_sql_text(end($locationPathPieces)). ';');

                // Check whether we have some candidates
                if ($locationCandidateResource->count()) {
                    // Iterate over candidates
                    while ($locationCandidate = $locationCandidateResource->get_row()) {
                        // Create location path recursively
                        $sourceLocationPath = strtolower($this->getLocationPath($locationCandidate['id']));

                        // Check whether candidate matches target location definition
                        if ($sourceLocationPath === $l_location_identifier) {
                            $this->m_log->info('We have found a candidate that matches defined location path: ' . $locationCandidate['id']);

                            $p_category_data['properties']['parent']['value'] = $l_location_id = $locationCandidate['id'];

                            return;
                        }
                    }
                }

                // Check whether location was found
                if (!is_numeric($l_location_id)) {
                    $this->m_log->error('Unable to find location by defined location path. Let us try default routine to identify a location.');

                    // Unset parent value
                    $p_category_data['properties']['parent']['value'] = null;
                }
            }

            if (isset(self::$m_prop_search['C__CATG__LOCATION_' . $l_index])) {
                $l_search_information = isys_format_json::decode(self::$m_prop_search['C__CATG__LOCATION_' . $l_index]);
                $l_special_search = true;
                $l_special_search_table = $l_search_information['table'];
                $l_special_search_column = $l_search_information['select'];
                $l_special_search_field = $l_search_information['search'];

                if ($l_special_search_table !== 'isys_obj' && strpos($l_special_search_table, '_list') !== false) {
                    $l_join = ' INNER JOIN isys_obj ON isys_obj__id = ' . $l_special_search_table . '__isys_obj__id ';
                }
            }

            if ($this->m_object_type_assignment[$l_index]['object-type'] != -1) {
                if (defined($this->m_object_type_assignment[$l_index]['object-type'])) {
                    $l_objecttype_id = constant($this->m_object_type_assignment[$l_index]['object-type']);
                }
            }

            if ($l_special_search && isset($l_special_search_column) && isset($l_special_search_field) && isset($l_special_search_table)) {
                $this->m_log->debug('Searching location object "' . $l_location_id . '" in ' . $l_special_search_field . '.');

                $l_sql = 'SELECT ' . $l_special_search_column .
                    ' FROM ' . $l_special_search_table . ' ' . $l_join .
                    ' WHERE ' . $l_special_search_field . ' = ' . $this->m_dao_dialog->convert_sql_text($l_location_id);

                if ($l_objecttype_id && is_numeric($l_objecttype_id)) {
                    $l_sql .= ' AND isys_obj__isys_obj_type__id = ' . $this->m_dao_dialog->convert_sql_id($l_objecttype_id);
                }

                // @see  ID-5276  The wrong column was selected.
                $l_location_id = self::$m_s_dao->retrieve($l_sql . ';')->get_row_value($l_special_search_column);
            } else {
                if (is_numeric($l_location_id)) {
                    if (!$this->m_dao_dialog->obj_exists($l_location_id)) {
                        $this->m_log->debug('Location object with id "' . $l_location_id . '" does not exist.');

                        return;
                    }
                } elseif ($l_objecttype_id) {
                    $l_location_id = $this->m_dao_dialog->get_obj_id_by_title($l_location_id, $l_objecttype_id);
                }
            }

            if (!$l_location_id) {
                $this->m_log->info('Location object with title "' . $p_category_data['properties']['parent']['value'] . '" not found!');

                if (!$l_objecttype_id && defined('C__OBJTYPE__ROOM')) {
                    // If nothing has been selected (or "automatic") we create rooms.
                    $l_objecttype_id = C__OBJTYPE__ROOM;
                }

                if ($this->m_object_type_assignment[$l_index]['create-object'] == 1 && $l_objecttype_id > 0) {
                    $this->m_log->info(' > A new object will be created!');
                    $p_category_data['properties']['parent']['value'] = $l_location_id = $this->m_dao_dialog->insert_new_obj(
                        $l_objecttype_id,
                        null,
                        $p_category_data['properties']['parent']['value'],
                        null,
                        C__RECORD_STATUS__NORMAL,
                        null,
                        null,
                        true
                    );

                    // @see  ID-5279  Set attribute of special assignment (for example the room number). For now this is hardcoded :(
                    if (isset($l_special_search_column)) {
                        if ($l_special_search_column === 'isys_catg_accounting_list__isys_obj__id') {
                            $this->createAccountingEntryForLocation($l_location_id, $l_location_identifier);
                        } elseif ($l_special_search_column === 'isys_cats_room_list__isys_obj__id') {
                            $this->createRoomEntryForLocation($l_location_id, $l_location_identifier);
                        }
                    }
                } else {
                    $p_category_data['properties']['parent']['value'] = null;

                    return;
                }
            } else {
                $this->m_log->info('Location Object found: "' . $p_category_data['properties']['parent']['value'] . '" (' . $l_location_id . ')');
                $p_category_data['properties']['parent']['value'] = $l_location_id;
            }

            $l_location_objtype_id = $this->m_dao_dialog->get_objTypeID($l_location_id);

            // Abort operation if objecttype is not a container.
            $this->m_log->debug("Checking whether the objecttype is a container or not");
            if (!self::is_container($l_location_objtype_id)) {
                $this->m_log->debug('Objecttype is no container, so "' . $p_category_data['properties']['parent']['value'] . '" could not be used as a location parent!');
                $p_category_data['properties']['parent']['value'] = null;

                return;
            }

            if ($l_location_objtype_id == defined_or_default('C__OBJTYPE__ENCLOSURE')) {
                $l_location_dao = isys_cmdb_dao_category_g_location::instance($this->m_dao_dialog->get_database_component());
                $l_formfactor_dao = isys_cmdb_dao_category_g_formfactor::instance($this->m_dao_dialog->get_database_component());
                $enclosureDao = isys_cmdb_dao_category_s_enclosure::instance($this->m_dao_dialog->get_database_component());

                $l_location_rack_height = $l_formfactor_dao->get_rack_hu($l_location_id);

                if ($p_category_data['properties']['insertion']) {
                    $l_insertions = $l_location_dao->callback_property_insertion(isys_request::factory());
                    $l_current_insertion = $p_category_data['properties']['insertion']['id'];

                    if (is_array($l_insertions)) {
                        foreach ($l_insertions as $l_insertion_id => $l_insertion_title) {
                            if (strcasecmp($l_current_insertion, $l_insertion_title) == 0) {
                                $p_category_data['properties']['insertion']['value'] = $p_category_data['properties']['insertion']['id'] = $l_insertion_id;
                                continue;
                            }
                        }
                    }
                }

                if ($p_category_data['properties']['option']) {
                    $l_options = $l_location_dao->callback_property_assembly_options(isys_request::factory()
                        ->set_row(['isys_catg_location_list__parentid' => $p_category_data['properties']['parent']['value']]));
                    $l_current_position = $p_category_data['properties']['option']['id'];

                    if (is_array($l_options)) {
                        foreach ($l_options as $l_option_id => $l_option_title) {
                            if (strcasecmp($l_current_position, $l_option_title) == 0) {
                                $p_category_data['properties']['option']['value'] = $p_category_data['properties']['option']['id'] = $l_option_id;
                                continue;
                            }
                        }
                    }
                }

                // @see ID-11522 Process the 'position' at the end to determine if its a horizontal or vertical installation.
                if ($l_location_rack_height && $p_category_data['properties']['pos']['id']) {
                    $positionData = (int)$p_category_data['properties']['pos']['id'];
                    $insertionType = $p_category_data['properties']['option']['id'] ?? null;

                    // @see ID-11522 Only do the calculation, if we work with a horizontal installation.
                    if ($insertionType === C__RACK_INSERTION__HORIZONTAL) {
                        $rackSorting = $enclosureDao->get_data(null, $l_location_id)->get_row_value('isys_cats_enclosure_list__slot_sorting');

                        if ($rackSorting !== 'asc') {
                            $positionData = $l_location_rack_height - $positionData + 1;
                        }
                    }

                    $p_category_data['properties']['pos']['id'] = $positionData;
                    $p_category_data['properties']['pos']['value'] = $positionData;
                }
            }
        }
    }

    /**
     * Create entry in global category "accounting".
     *
     * @param  integer $locationObjectId
     * @param  integer $inventoryNo
     *
     * @return boolean
     */
    private function createAccountingEntryForLocation($locationObjectId, $inventoryNo)
    {
        $accountingDao = isys_cmdb_dao_category_g_accounting::instance(isys_application::instance()->container->get('database'));

        $validationResult = $accountingDao->validate(['inventory_no' => $inventoryNo]);

        if ($validationResult === true) {
            $accountingDao->create_data(['isys_obj__id' => $locationObjectId, 'inventory_no' => $inventoryNo, 'status' => C__RECORD_STATUS__NORMAL]);

            $this->m_log->debug('Also created "inventory number".');

            return true;
        }

        $this->m_log->warning('Tried to create "inventory number" but failed because of validation.');

        return false;
    }

    /**
     * Create entry in specific category "room".
     *
     * @param  integer $locationObjectId
     * @param  integer $roomNumber
     *
     * @return boolean
     */
    private function createRoomEntryForLocation($locationObjectId, $roomNumber)
    {
        $roomDao = isys_cmdb_dao_category_s_room::instance(isys_application::instance()->container->get('database'));

        $validationResult = $roomDao->validate(['number' => $roomNumber]);

        if ($validationResult === true) {
            $roomDao->create_data(['isys_obj__id' => $locationObjectId, 'number' => $roomNumber, 'status' => C__RECORD_STATUS__NORMAL]);

            $this->m_log->debug('Also created "room number".');

            return true;
        }

        $this->m_log->warning('Tried to create "room number" but failed because of validation.');

        return false;
    }

    /**
     * Callback for ip
     *
     * @param array $p_category_structure
     * @param array $p_category_data
     *
     * @throws isys_exception_general
     */
    private function callback_ip($p_category_structure, &$p_category_data)
    {
        if (isset($p_category_data['properties']['virtual_ip']['value'])) {
            $ipAddress = $p_category_data['properties']['virtual_ip']['value'];
            $netType = Ip::validate_ip($p_category_data['properties']['virtual_ip']['value']) ? defined_or_default('C__CATS_NET_TYPE__IPV4') : (Ip::validate_ipv6($p_category_data['properties']['virtual_ip']['value']) ? defined_or_default('C__CATS_NET_TYPE__IPV6') : false);

            if ($netType) {
                if ($netType === defined_or_default('C__CATS_NET_TYPE__IPV4')) {
                    // @see ID-4631
                    $ipAddress = Ip::long2ip(Ip::ip2long($ipAddress));
                    $ipAssignmentKey = 'ipv4_assignment';
                    $ipAddressKey = 'ipv4_address';
                    $globalNet = defined_or_default('C__OBJ__NET_GLOBAL_IPV4');
                    $ipAssignmentReference = [
                        "isys_ip_assignment",
                        "isys_ip_assignment__id"
                    ];
                } else {
                    $ipAssignmentKey = 'ipv6_assignment';
                    $ipAddressKey = 'ipv4_address';
                    $globalNet = defined_or_default('C__OBJ__NET_GLOBAL_IPV6');
                    $ipAssignmentReference = [
                        "isys_ipv6_assignment",
                        "isys_ipv6_assignment__id"
                    ];
                }

                $ipAddressConfiguration = [
                    "net_type"       => [
                        "value" => $netType,
                        "id"    => $netType,
                    ],
                    $ipAssignmentKey => [
                        "value" => 1,
                        "id"    => 1
                    ],
                    $ipAddressKey    => [
                        "value" => $ipAddress,
                        "id"    => $ipAddress
                    ],
                ];

                // If no net has been found
                if (!isset($p_category_data['properties']['net']) || $p_category_data['properties']['net']['value'] === false) {
                    $db = isys_application::instance()->container->get('database');
                    $catSNet = isys_cmdb_dao_category_s_net::instance($db);
                    if ($netType === defined_or_default('C__CATS_NET_TYPE__IPV4')) {
                        $net = $catSNet->get_matching_net_by_ipv4_address($ipAddress);
                        if (!empty($net)) {
                            $ipAddressConfiguration["net"] = [
                                "value" => $net['netID'],
                                "id"    => $net['netID'],
                            ];
                        } else {
                            $ipAddressConfiguration["net"] = [
                                "value" => $globalNet,
                                "id"    => $globalNet
                            ];
                        }
                    } else {
                        $parsedIpv6Address = Ip::parseHexIpv6($ipAddress);
                        $subnet = [
                            'from' => $parsedIpv6Address,
                            'to' => $parsedIpv6Address,
                        ];
                        $result = $db->query(
                            'SELECT *
                                FROM isys_cats_net_list j0
                                LEFT JOIN isys_obj j1 ON j1.isys_obj__id = j0.isys_cats_net_list__isys_obj__id
                                WHERE j1.isys_obj__isys_obj_type__id = ' . $catSNet->convert_sql_id(defined_or_default('C__OBJTYPE__LAYER3_NET')) . '
                                AND j0.isys_cats_net_list__isys_net_type__id = ' . $catSNet->convert_sql_id(defined_or_default('C__CATS_NET_TYPE__IPV6')) . '
                                AND j1.isys_obj__const IS NULL;' // NOT LIKE ' . $catSNet->convert_sql_text('C__OBJ__NET_GLOBAL_IPV6') . ';'
                        );
                        $matched = false;
                        while ($row = $result->fetch_assoc()) {
                            $from = $row['isys_cats_net_list__address_range_from'];
                            $to = $row['isys_cats_net_list__address_range_to'];
                            $supernet = [
                                'from' => Ip::parseHexIpv6($from),
                                'to' => Ip::parseHexIpv6($to),
                            ];
                            if (Ip::checkSubnetInRange($supernet, $subnet)) {
                                $matched = true;
                                $netID = $row['isys_cats_net_list__isys_obj__id'];
                                $ipAddressConfiguration["net"] = [
                                    "value" => $netID,
                                    "id"    => $netID
                                ];
                                break;
                            }
                        }
                        if ($matched === false) {
                            $ipAddressConfiguration["net"] = [
                                "value" => $globalNet,
                                "id"    => $globalNet
                            ];
                        }
                    }
                }

                if (isset($p_category_data['properties']['virtual_ip_assignment']['value'])) {
                    $ipAddressAssignment = $this->csv_helper__dialog($p_category_data['properties']['virtual_ip_assignment']['value'], [
                        self::CL__CAT__PROPERTY__REFERENCES => $ipAssignmentReference
                    ], true);

                    if ($ipAddressAssignment) {
                        $ipAddressConfiguration[$ipAssignmentKey] = [
                            "id"    => $ipAddressAssignment,
                            "value" => $ipAddressAssignment
                        ];
                    }
                }

                foreach ($ipAddressConfiguration as $l_tag => $l_property) {
                    $p_category_data['properties'][$l_tag] = $l_property;
                }

                /** @var isys_cmdb_dao_category_g_ip $l_dao_ip */
                $l_dao_ip = isys_factory_cmdb_category_dao::get_instance_by_id(C__CMDB__CATEGORY__TYPE_GLOBAL, defined_or_default('C__CATG__IP'), $this->m_dao_dialog->get_database_component());

                // 1. cmdb.unique.hostname
                if (isys_tenantsettings::get('cmdb.unique.hostname') &&
                    !$l_dao_ip->is_unique_hostname(
                        self::get_current_object(),
                        $p_category_data['properties']['hostname']['value'],
                        $p_category_data['properties']['net']['value']
                    )) {
                    $this->m_log->error('The given hostname is already used in net. We will set it to empty.');

                    unset($p_category_data['properties']['hostname']);
                }

                // 2. cmdb.unique.ip-address
                if (isys_tenantsettings::get('cmdb.unique.ip-address') &&
                    !$l_dao_ip->is_unique_ip(
                        self::get_current_object(),
                        $p_category_data['properties']['virtual_ip']['value'],
                        $p_category_data['properties']['net']['value']
                    )) {
                    $this->m_log->error('The given ip-address is already used in net. We will set it to empty.');
                }
            } else {
                $this->m_log->error("Unable to detect ip type. We have to skip it.");
            }
        }

        if (isset($p_category_data['properties']['virtual_port_assignment']['value'])) {
            /** @var isys_cmdb_dao_category_g_network_port $l_port_dao */
            $l_port_dao = isys_cmdb_dao_category_g_network_port::instance($this->m_dao_dialog->get_database_component());
            $l_port_title = $p_category_data['properties']['virtual_port_assignment']['value'];
            $l_port_res = $l_port_dao->get_data(null, self::get_current_object(), "AND isys_catg_port_list__title = " . $l_port_dao->convert_sql_text($l_port_title));

            if ($l_port_res->num_rows()) {
                $l_port_row = $l_port_res->get_row();
                $l_port_id = $l_port_row['isys_catg_port_list__id'];
            } else {
                /** @var isys_cmdb_dao_category_g_network_ifacel $l_logport_dao */
                $l_logport_dao = isys_cmdb_dao_category_g_network_ifacel::instance($this->m_dao_dialog->get_database_component());

                $l_logport_res = $l_logport_dao->get_data(
                    null,
                    self::get_current_object(),
                    "AND isys_catg_log_port_list.isys_catg_log_port_list__title = " . $l_logport_dao->convert_sql_text($l_port_title)
                );

                if ($l_logport_res->num_rows()) {
                    $l_logport_row = $l_logport_res->get_row();
                    $l_log_port_id = $l_logport_row['isys_catg_log_port_list__id'];
                }
            }

            if (!empty($l_port_id) || !empty($l_log_port_id)) {
                if (!empty($l_port_id)) {
                    $l_tag = "assigned_port";
                    $l_id = $l_port_id . '_C__CATG__NETWORK_PORT';    // id_constant because of the validation
                } else {
                    $l_tag = "assigned_logical_port";
                    $l_id = $l_log_port_id . '_C__CATG__NETWORK_LOG_PORT';    // id_constant because of the validation
                }

                $p_category_data['properties'][$l_tag] = [
                    "value" => $l_id,
                    "id"    => $l_id
                ];
            }
        }
    }

    /**
     * If category has any reference to isys_connection,
     * we have to set the tags to create empty connections
     *
     * @param string $p_category_const
     * @param string $p_property_array
     */
    private function set_connections($p_category_const, &$p_property_array)
    {
        if (isset($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES]) && is_array($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES])) {
            foreach ($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES] as $l_property) {
                if (in_array($l_property[self::CL__CAT__PROPERTY__MODE], self::$methodsAsObjectBrowserFields)) {
                    $p_property_array[self::CL__SYN_PROPERTY][$l_property[self::CL__CAT__PROPERTY__TAG]] = [
                        C__DATA__VALUE => null,
                        'id'           => null
                    ];
                }
            }
        }
    }

    /**
     * Checks whether all essential properties are setted
     * to prevent mysql exceptions
     *
     * @param string $p_category_const
     * @param string $p_property
     *
     * @return mixed
     */
    private function check_essential_properties($p_category_const, $p_property)
    {
        if (isset($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES]) && $this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES]) {
            foreach ($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES] as $l_property) {
                if ($l_property[self::CL__CAT__PROPERTY__ESSENTIALITY]) {
                    if (!isset($p_property[self::CL__SYN_PROPERTY][$l_property[self::CL__CAT__PROPERTY__TAG]][C__DATA__VALUE]) &&
                        !in_array($l_property[self::CL__CAT__PROPERTY__MODE], self::$methodsAsObjectBrowserFields)) {
                        self::$m_log_essential = $l_property[self::CL__CAT__PROPERTY__TITLE];

                        return false;
                    }
                }
            }
        }

        self::$m_log_essential = null;

        return $p_property;
    }

    /**
     * Returns the tag of the unit property
     *
     * @param string $p_category_const
     * @param array  $p_row
     *
     * @return mixed
     */
    private function get_tag_of_unit_property($p_category_const, $p_row)
    {
        foreach ($this->m_category_map[$p_category_const][self::CL__CAT__PROPERTIES] as $l_property) {
            if ($l_property[self::CL__CAT__PROPERTY__ROW] == $p_row) {
                return $l_property[self::CL__CAT__PROPERTY__TAG];
            }
        }

        return false;
    }

    /**
     * Updates global category info of an object (Hostname, category, purpose, cmdb-status, description).
     *
     * @param   integer $p_obj_id
     * @param   string  $p_hostname
     * @param   string  $p_category
     * @param   string  $p_purpose
     * @param   string  $p_cmdb_status
     * @param   string  $p_description
     * @param   string  $p_title
     * @param   string  $l_tags
     * @param   string  $p_sysid
     * @param   string  $p_type
     *
     * @author  Van Quyen Hoang <qhoang@i-doit.com>
     * @author  Dennis Stücken <dstuecken@i-doit.de>
     */
    private function _update_object($p_obj_id, $p_hostname, $p_category, $p_purpose, $p_cmdb_status, $p_description, $p_title, $l_tags, $p_sysid, $p_type)
    {
        $l_changes = [];
        $l_update = false;
        $l_language = isys_application::instance()->container->get('language');

        $l_sql = 'SELECT * FROM isys_obj
			INNER JOIN isys_cmdb_status ON isys_cmdb_status__id = isys_obj__isys_cmdb_status__id
			INNER JOIN isys_catg_global_list ON isys_catg_global_list__isys_obj__id = isys_obj__id
			LEFT JOIN isys_purpose ON isys_purpose__id = isys_catg_global_list__isys_purpose__id
			LEFT JOIN isys_catg_global_category ON isys_catg_global_category__id = isys_catg_global_list__isys_catg_global_category__id
			WHERE isys_obj__id = ' . $this->m_dao_dialog->convert_sql_id($p_obj_id);

        $l_data = $this->m_dao_dialog->retrieve($l_sql)
            ->get_row();

        // Sets current object type
        $this->set_current_object_type($l_data['isys_obj__isys_obj_type__id']);

        $l_update_sql = 'UPDATE isys_obj INNER JOIN isys_catg_global_list ON isys_catg_global_list__isys_obj__id = isys_obj__id SET ';

        // @see ID-11390 Remove '!C__SYSID__READONLY' from the condition.
        if (isys_tenantsettings::get('import.csv.overwrite-objecttype', 0) && self::$m_object_type !== null && $p_type !== $l_data['isys_obj__isys_obj_type__id']) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::type'] = [
                'from' => $l_language->get($this->m_dao_dialog->get_objtype_name_by_id_as_string($l_data['isys_obj__isys_obj_type__id'])),
                'to'   => $l_language->get($this->m_dao_dialog->get_objtype_name_by_id_as_string($p_type))
            ];

            $l_update_sql .= 'isys_obj__isys_obj_type__id = ' . $this->m_dao_dialog->convert_sql_text($p_type) . ', ';
        }

        // ID-3998: Update SYSID when its not readonly
        if (!C__SYSID__READONLY && self::$m_object_sysid !== null && $p_sysid !== $l_data['isys_obj__sysid']) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::sysid'] = [
                'from' => $l_data['isys_obj__sysid'],
                'to'   => $p_sysid
            ];

            $l_update_sql .= 'isys_obj__sysid = ' . $this->m_dao_dialog->convert_sql_text($p_sysid) . ', ';
        }

        if (self::$m_object_hostname !== null && $p_hostname !== $l_data['isys_obj__hostname']) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::hostname'] = [
                'from' => $l_data['isys_obj__hostname'],
                'to'   => $p_hostname
            ];

            $l_update_sql .= 'isys_obj__hostname = ' . $this->m_dao_dialog->convert_sql_text($p_hostname) . ', ';
        }

        if (self::$m_object_category !== null && $p_category !== $l_data['isys_catg_global_category__title']) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::category'] = [
                'from' => $l_data['isys_catg_global_category__title'],
                'to'   => $p_category
            ];
            $l_update_sql .= 'isys_catg_global_list__isys_catg_global_category__id = ' . $this->m_dao_dialog->convert_sql_id($this->csv_helper__dialog_plus($p_category, [
                    self::CL__CAT__PROPERTY__PARAM      => 'isys_catg_global_category',
                    self::CL__CAT__PROPERTY__REFERENCES => [
                        'isys_catg_global_category',
                        'isys_catg_global_category__id'
                    ]
                ], true)) . ', ';
        }

        if (self::$m_object_purpose !== null && $l_language->get($p_purpose) !== $l_language->get($l_data['isys_purpose__title'])) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::purpose'] = [
                'from' => $l_language->get($l_data['isys_purpose__title']),
                'to'   => $p_purpose
            ];
            $l_update_sql .= 'isys_catg_global_list__isys_purpose__id = ' . $this->m_dao_dialog->convert_sql_id($this->csv_helper__dialog_plus($p_purpose, [
                    self::CL__CAT__PROPERTY__PARAM      => 'isys_purpose',
                    self::CL__CAT__PROPERTY__REFERENCES => [
                        'isys_purpose',
                        'isys_purpose__id'
                    ]
                ], true)) . ', ';
        }

        if (self::$m_object_cmdbstatus !== null && trim($p_cmdb_status) !== '' && $l_language->get($p_cmdb_status) !== $l_language->get($l_data['isys_cmdb_status__title'])) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::cmdb_status'] = [
                'from' => $l_language->get($l_data['isys_cmdb_status__title']),
                'to'   => $p_cmdb_status
            ];
            $l_update_sql .= 'isys_obj__isys_cmdb_status__id = ' . $this->m_dao_dialog->convert_sql_id($this->csv_helper__dialog_plus($p_cmdb_status, [
                    self::CL__CAT__PROPERTY__PARAM      => 'isys_cmdb_status',
                    self::CL__CAT__PROPERTY__REFERENCES => [
                        'isys_cmdb_status',
                        'isys_cmdb_status__id'
                    ]
                ], true)) . ', ';
        }

        if (self::$m_object_description !== null && $p_description !== $l_data['isys_obj__description']) {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::description'] = [
                'from' => $l_data['isys_obj__description'],
                'to'   => $p_description
            ];
            $l_update_sql .= 'isys_obj__description = ' . $this->m_dao_dialog->convert_sql_text($p_description) . ', ';
        }

        if (self::$m_object_title !== null && $p_title !== $l_data['isys_obj__title'] && trim($p_title) !== '') {
            $l_update = true;
            $l_changes['isys_cmdb_dao_category_g_global::title'] = [
                'from' => $l_data['isys_obj__title'],
                'to'   => $p_title
            ];
            $l_update_sql .= 'isys_obj__title = ' . $this->m_dao_dialog->convert_sql_text($p_title) . ', ';
        }

        if (!empty($l_tags)) {
            $l_tags = $this->csv_helper__dialog_multiselect($l_tags, ['property_table' => 'isys_tag']);

            isys_cmdb_dao_category_g_global::instance(isys_application::instance()->database)
                ->assign_tag($p_obj_id, $l_tags[self::CL__HELPER__VALUE]);
        }

        if ($l_update === true) {
            if (count($l_changes)) {
                // @see ID-10886 Record object as changed.
                self::$objectDataChanged[$p_obj_id] = true;
            }

            $l_update_sql = rtrim($l_update_sql, ', ') . ' WHERE isys_obj__id = ' . $this->m_dao_dialog->convert_sql_id($p_obj_id);
            // Update only the data which are assigned
            $this->m_dao_dialog->update($l_update_sql . ';');

            isys_event_manager::getInstance()->triggerImportEvent(
                'C__LOGBOOK_EVENT__CATEGORY_CHANGED',
                isys_application::instance()->container->get('language')
                    ->get('LC__UNIVERSAL__CSV_IMPORT'),
                $p_obj_id,
                $l_data['isys_obj__isys_obj_type__id'],
                $l_language->get('LC__CMDB__CATG__GLOBAL'),
                serialize($l_changes),
                null,
                null,
                null,
                self::$importLogId,
                count($l_changes)
            );
        }
    }

    /**
     * Create object
     *
     * @param   integer $p_type
     * @param   string  $p_title
     * @param   string  $p_sys_id
     * @param   integer $p_record_status
     * @param   string  $p_hostname
     * @param   string  $p_category
     * @param   string  $p_purpose
     * @param   string  $p_cmdb_status
     * @param   string  $p_description
     * @param   string  $p_tags
     *
     * @return  mixed
     * @throws  isys_exception_cmdb
     * @throws  isys_exception_general
     */
    private function _create_object(
        $p_type,
        $p_title,
        $p_sys_id,
        $p_record_status,
        $p_hostname,
        $p_category,
        $p_purpose,
        $p_cmdb_status,
        $p_description,
        $p_tags
    ) {
        $l_obj_id = false;
        $l_unique_title = true;

        // Handle "cmdb.unique.object-title" configuration.
        if (isys_tenantsettings::get('cmdb.unique.object-title') && $this->m_dao_dialog->get_obj_id_by_title($p_title, null, C__RECORD_STATUS__NORMAL)) {
            $l_unique_title = false;
        }

        if ($l_unique_title) {
            $p_category = $this->csv_helper__dialog_plus($p_category, [self::CL__CAT__PROPERTY__PARAM => 'isys_catg_global_category'], true);
            $p_purpose = $this->csv_helper__dialog_plus($p_purpose, [self::CL__CAT__PROPERTY__PARAM => 'isys_purpose'], true);
            $p_cmdb_status = $this->csv_helper__dialog_plus($p_cmdb_status, [self::CL__CAT__PROPERTY__PARAM => 'isys_cmdb_status'], true);
            $l_tags = $this->csv_helper__dialog_multiselect($p_tags, ['property_table' => 'isys_tag']);

            // Let us validate data for global category.
            $l_data = [
                'title'       => $p_title,
                'type'        => $p_type,
                'sysid'       => $p_sys_id,
                'status'      => $p_record_status,
                'purpose'     => $p_purpose,
                'category'    => $p_category,
                'tag'         => $l_tags[self::CL__HELPER__VALUE],
                'cmdb_status' => $p_cmdb_status
            ];

            // Validate.
            $l_validation_messages = $this->validate(isys_cmdb_dao_category_g_global::instance($this->m_dao_dialog->get_database_component()), $l_data, false);

            if (is_array($l_validation_messages)) {
                $this->m_log->error("Unable to create object because of validation errors:");
                $this->m_log->error(implode("\n", $l_validation_messages));

                return false;
            }

            // Create object.
            $l_obj_id = $this->m_dao_dialog->insert_new_obj(
                $p_type,
                null,
                $p_title,
                $p_sys_id,
                $p_record_status,
                $p_hostname,
                null,
                null,
                null,
                null,
                null,
                null,
                $p_category,
                $p_purpose,
                $p_cmdb_status,
                $p_description
            );

            /**
             * Default template handling
             *
             * @see ID-5697
             */
            if ($this->defaultTemplate) {
                $this->m_log->info('Look for default template...');

                // Get default template of object type
                $defaultTemplate = $this->m_dao_dialog->get_default_template_by_obj_type($p_type);

                // Is default template configured
                if ($defaultTemplate) {
                    $this->m_log->info(' > Found default template for object type.');
                    // Get created object`s data
                    $objectData = $this->m_dao_dialog->get_type_by_object_id($l_obj_id)->get_row();

                    // Use created objects title by default
                    $objectTitle = $p_title;

                    // Should we use default templates title
                    if (isset($objectData['isys_obj_type__use_template_title']) && $objectData['isys_obj_type__use_template_title']) {
                        // Create new object title
                        $objectTitle = $this->m_dao_dialog->obj_get_title_by_id_as_string($defaultTemplate);
                    }

                    // Initialize and run default template procedure
                    $l_template_module = new isys_module_templates();

                    try {
                        $l_template_module->create_from_template([$defaultTemplate], $objectData['isys_obj__isys_obj_type__id'], $objectTitle, $l_obj_id, false, 1, '');
                    } catch (Exception $e) {
                        $this->m_log->error('An error occurred while applying template.');
                    }
                } else {
                    $this->m_log->info(' > No default template found. Skip.');
                }
            }

            // @see ID-11023 Re-set the CMDB-Status after the default template was applied.
            if ($p_cmdb_status !== null) {
                $this->m_dao_dialog->set_object_cmdb_status($l_obj_id, $p_cmdb_status);
            }

            // Sets current object type.
            $this->set_current_object_type($p_type);

            isys_cmdb_dao_category_g_global::instance(isys_application::instance()->database)
                ->assign_tag($l_obj_id, $l_tags[self::CL__HELPER__VALUE]);

            isys_event_manager::getInstance()->triggerImportEvent(
                'C__LOGBOOK_EVENT__OBJECT_CREATED',
                isys_application::instance()->container->get('language')
                    ->get('LC__UNIVERSAL__CSV_IMPORT'),
                $l_obj_id,
                $p_type,
                null,
                null,
                null,
                null,
                null,
                self::$importLogId,
                0
            );
        } else {
            $this->m_log->error('Unable to create object: An object with the given title \'' . $p_title . '\' already exists.');
        }

        return $l_obj_id;
    }

    /**
     * @param isys_cmdb_dao_category $p_category_dao
     * @param array                  $syncData
     * @param int|null               $entryId
     *
     * @return Changes|null
     */
    private function getCategoryChanges(isys_cmdb_dao_category $p_category_dao, array $syncData = [], ?int $entryId = null): ?Changes
    {
        if (empty($syncData)) {
            return null;
        }

        $fakeEntry = [
            Config::CONFIG_DATA_ID => $entryId,
            Config::CONFIG_PROPERTIES => []
        ];

        $currentData = Merger::instance(Config::instance($p_category_dao, self::get_current_object(), $fakeEntry))->getDataForSync();

        if (isset($syncData[self::CL__SYN_PROPERTY]) && isset($currentData[self::CL__SYN_PROPERTY])) {
            $currentDataValues = $syncDataValues = [];
            foreach ($syncData[self::CL__SYN_PROPERTY] as $index => $value) {
                $syncDataValues[$index] = empty($value['value']) ? null : $value['value'];
            }
            foreach ($currentData[self::CL__SYN_PROPERTY] as $index => $value) {
                $currentDataValues[$index] = $value['value'];
            }

            $changes = Changes::instance($p_category_dao, self::get_current_object(), $entryId, ($entryId === null ? $currentDataValues : []), $syncDataValues);
            $changes->processChanges();

            return $changes;
        }
        return null;
    }

    /**
     * @param  string                 $p_category_const
     * @param  isys_cmdb_dao_category $p_category_dao
     * @param  array                  $p_properties
     */
    private function handle_singlevalue_category($p_category_const, isys_cmdb_dao_category $p_category_dao, $p_properties)
    {
        $l_sync_array = $this->build_for_sync($p_category_const, $p_properties);
        $l_row = [];

        if ($l_sync_array) {
            // @see ID-5022 If the category is a single value category we should look it up if there is an entry. It is possbile to create a category entry via signal on object creation
            if (self::is_update() || !$p_category_dao->is_multivalued()) {
                $l_result = $this->get_data($p_category_dao->get_data(null, self::get_current_object()), $p_category_const);

                if (is_countable($l_result) && count($l_result) == 1) {
                    $l_row = reset($l_result);
                    $this->m_log->debug("There is already an entry for the object. We will update it !");

                    // Set the data_id index for the update.
                    $l_sync_array['data_id'] = $l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]];

                    foreach ($p_category_dao->get_properties() as $l_prop => $l_prop_info) {
                        if (!isset($l_sync_array['properties'][$l_prop])) {
                            // @see ID-8155 set empty value
                            if (self::$m_singlevalue_overwrite_empty_values && array_key_exists($l_prop, $l_sync_array['properties'])) {
                                $l_sync_array['properties'][$l_prop] = [
                                    'id'           => null,
                                    C__DATA__VALUE => null,
                                ];
                                continue;
                            }

                            if (isset($l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__REFERENCES]) && $l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__REFERENCES][0] === 'isys_connection') {
                                $connectedObjectId = $p_category_dao->get_data_by_property($l_sync_array['data_id'], self::get_current_object(), $l_prop)
                                    ->get_row_value('isys_connection__isys_obj__id');

                                $l_sync_array['properties'][$l_prop] = [
                                    'id'           => $connectedObjectId,
                                    C__DATA__VALUE => $connectedObjectId
                                ];
                                continue;
                            }

                            if (isset($l_row[$l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS]])) {
                                $l_sync_array['properties'][$l_prop] = [
                                    'id'           => $l_row[$l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS]],
                                    C__DATA__VALUE => $l_row[$l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS]]
                                ];
                            } elseif (isset($l_row[$l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]])) {
                                $value = $l_row[$l_prop_info[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]];
                                if ($l_prop_info[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK] && $l_prop_info[C__PROPERTY__INFO][C__PROPERTY__INFO__TYPE] == C__PROPERTY__INFO__TYPE__N2M) {
                                    $value = $this->n2mHelper($l_prop_info, $l_row, $p_category_dao);
                                }

                                if ($l_prop == 'user_pass' && !isset($l_sync_array['properties'][$l_prop]) && !empty($value)) {
                                    $l_sync_array['properties'][$l_prop] = [
                                        'id'           => null,
                                        C__DATA__VALUE => null
                                    ];
                                    continue;
                                }

                                $l_sync_array['properties'][$l_prop] = [
                                    'id'           => $value,
                                    C__DATA__VALUE => $value
                                ];
                            }
                        }
                    }
                } else {
                    if (is_countable($l_result) && count($l_result) > 1) {
                        self::skip_category();
                        $this->m_log->error("There is more than one entry in the Singlevalue-Category. Therefore we skip it!");
                    } else {
                        $this->m_log->debug("There is no entry for the Object. We will create it");
                    }
                }
            }

            if (!self::get_category_skip()) {
                // Sync mode handling
                if (isset($l_sync_array['data_id']) && is_numeric($l_sync_array['data_id'])) {
                    $l_mode = isys_import_handler_cmdb::C__UPDATE;
                    $this->m_log->debug("Import Mode: UPDATE");
                } else {
                    $l_mode = isys_import_handler_cmdb::C__CREATE;
                    $this->m_log->debug("Import Mode: CREATE");
                }

                $this->sync($p_category_const, self::get_current_object(), $p_category_dao, $l_sync_array, $l_mode, $l_row);
                $this->addUpdatedCategory($p_category_const);
            }
        } else {
            if (!empty(self::$m_log_essential)) {
                $this->m_log->error('An essential information is not set: ' . self::$m_log_essential . '! Skipping...');
                return;
            }

            $this->m_log->notice('SyncArray is empty. There is nothing to import! Skipping...');
        }
    }

    /**
     * @param array         $propertyInfo
     * @param array         $rowData
     * @param isys_cmdb_dao $dao
     *
     * @return array
     * @throws Exception
     */
    private function n2mHelper(array $propertyInfo, array $rowData, isys_cmdb_dao $dao)
    {
        // Create new instance of the helper class:
        $helper = new $propertyInfo[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][0](
            $rowData,
            isys_application::instance()->container->get('database'),
            $propertyInfo[C__PROPERTY__DATA],
            $propertyInfo[C__PROPERTY__FORMAT],
            $propertyInfo[C__PROPERTY__UI]
        );

        if (!method_exists($helper, $propertyInfo[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1])) {
            return $rowData[$propertyInfo[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]];
        }

        if (isset($propertyInfo[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS]) &&
            array_key_exists($propertyInfo[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS], $rowData)) {
            $l_callbackValue = $rowData[$propertyInfo[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD_ALIAS]];
        } elseif ($dao instanceof isys_cmdb_dao_category_g_custom_fields) {
            $l_callbackValue = null;
        } else {
            $l_callbackValue = $rowData[$propertyInfo[C__PROPERTY__DATA][C__PROPERTY__DATA__FIELD]];
        }

        $value = call_user_func([
            $helper,
            $propertyInfo[C__PROPERTY__FORMAT][C__PROPERTY__FORMAT__CALLBACK][1]
        ], $l_callbackValue);

        if ($value instanceof isys_export_data) {
            $value = $value->get_data();
        }

        $value = array_map(function ($e) {
            return $e['ref_id'] ?? $e['id'];
        }, $value);

        return $value;
    }

    /**
     * Syncwrapper.
     *
     * @param   string                 $p_category_const
     * @param   integer                $p_object_id
     * @param   isys_cmdb_dao_category $p_category_dao
     * @param   array                  $p_sync_array
     * @param   integer                $p_mode
     *
     * @return  mixed
     * @throws  Exception
     * @throws  isys_exception_validation
     */
    private function sync($p_category_const, $p_object_id, isys_cmdb_dao_category $p_category_dao, array $p_sync_array, $p_mode, $p_old_dataset = [])
    {
        if (method_exists($p_category_dao, 'prepareCsvImportData')) {
            $p_sync_array['properties'] = $p_category_dao->prepareCsvImportData($p_sync_array['properties']);
        }

        // @see ID-10373 replace all placeholders before validating
        $p_sync_array = $p_category_dao->replacePlaceholdersWithSyncData($p_sync_array, $p_object_id);

        // Validate data first.
        $l_validation_messages = $this->validate($p_category_dao, $p_sync_array);
        if (!(is_bool($l_validation_messages) && $l_validation_messages == true)) {
            $this->m_log->error("Data is invalid: ");

            if (is_array($l_validation_messages) && count($l_validation_messages)) {
                $this->m_log->error(implode('\n', $l_validation_messages));
            }

            // Data is invalid. We have to skip this entry.
            return false;
        }

        $changes = $this->getCategoryChanges($p_category_dao, $p_sync_array);

        if ($p_category_dao->is_multivalued() === false && $changes->hasAnyChanges() === false) {
            $categoryTitle = self::languageManager()->get($p_category_dao->getCategoryTitle());
            $this->m_log->info("No changes detected. Skipping category {$categoryTitle}.");
            return false;
        }

        // Sync data.
        $l_success = $p_category_dao->sync($p_sync_array, $p_object_id, $p_mode);

        if ($l_success) {
            if (!isset(self::$objectDataChanged[$p_object_id])) {
                self::$objectDataChanged[$p_object_id] = true;
            }

            $this->m_log->info('Data successfully imported.');
        } else {
            $this->m_log->error('Unable to import data: category "' . $p_category_dao->get_category() . '", object #' . $p_object_id . '.');
        }

        if ($l_success) {
            $p_category_dao->logbook_update(
                'C__LOGBOOK_EVENT__CATEGORY_CHANGED',
                $changes,
                null,
                null,
                self::$importLogId
            );
        }

        if ($p_mode === isys_import_handler_cmdb::C__CREATE) {
            isys_component_signalcollection::get_instance()
                ->emit(
                    "mod.cmdb.categoryEntryJustCreated",
                    $p_category_dao,
                    isset($p_sync_array['data_id']) ? $p_sync_array['data_id'] : null,
                    $l_success,
                    $p_object_id,
                    $p_sync_array,
                    $changes->getCurrentReformatedChanges()
                );

            isys_component_signalcollection::get_instance()
                ->emit(
                    "mod.cmdb.afterCreateCategoryEntry",
                    $p_category_dao->get_category_id(),
                    isset($p_sync_array['data_id']) ? $p_sync_array['data_id'] : null,
                    $l_success,
                    $p_object_id,
                    $p_category_dao,
                    $changes->getCurrentReformatedChanges()
                );
        } else {
            // Emit category signal (afterCategoryEntrySave).
            isys_component_signalcollection::get_instance()
                ->emit(
                    "mod.cmdb.afterCategoryEntrySave",
                    $p_category_dao,
                    isset($p_sync_array['data_id']) ? $p_sync_array['data_id'] : null,
                    $l_success,
                    $p_object_id,
                    $p_sync_array,
                    $changes->getCurrentReformatedChanges()
                );
        }

        return $l_success;
    }

    /**
     * Returns DAO for category.
     *
     * @param   string $p_category_const
     *
     * @return  isys_cmdb_dao_category
     */
    private function get_category_dao($p_category_const)
    {
        if (isset($this->m_category_map[$p_category_const])) {
            $l_class = $this->m_category_map[$p_category_const][self::CL__CAT__CLASS];
            $l_category_dao = new $l_class($this->m_dao_dialog->get_database_component());

            if ($this->m_category_map[$p_category_const][self::CL__CAT__CAT_TYPE] == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                /** @var isys_cmdb_dao_category_g_custom_fields $l_category_dao */
                $l_category_dao->set_catg_custom_id($this->m_category_map[$p_category_const][self::CL__CAT__ID]);
            }

            return $l_category_dao;
        }

        return false;
    }

    /**
     * Retrieve data by DAO-Result with handling for custom categories.
     *
     * @param   isys_component_dao_result $p_dao_result
     * @param   string                    $p_category_const
     *
     * @return  array
     */
    private function get_data(isys_component_dao_result $p_dao_result, $p_category_const)
    {
        $l_catentries = [];

        if ($p_dao_result->num_rows()) {
            // Retrieve data
            if ($this->m_category_map[$p_category_const][self::CL__CAT__CAT_TYPE] == C__CMDB__CATEGORY__TYPE_CUSTOM) {
                // Extra-Handling for custom categories: We have to build entry rows because in custom categories we have one resultset per field. Let us merge it.
                while ($l_row = $p_dao_result->get_row()) {
                    // Build field key.
                    $l_source_table = $this->m_category_map[$p_category_const][self::CL__CAT__TABLE];
                    $l_field_key = $l_row[$l_source_table . '__field_type'] . '_' . $l_row[$l_source_table . '__field_key'];
                    $l_catentries[$l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]]][$l_field_key] = $l_row[$l_source_table . '__field_content'];

                    // Special-Handling for description field: Alias is not conform with other fields. It does not contain the type as alias.
                    if (strpos($l_row[$l_source_table . '__field_key'], 'C__CMDB__CAT__COMMENTARY_') !== false) {
                        $l_catentries[$l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]]]
                        [$l_row[$l_source_table . '__field_key']] = $l_row[$l_source_table . '__field_content'];
                    }

                    $l_catentries[$l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]]]
                    [$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]] = $l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]];
                }
            } else {
                while ($l_row = $p_dao_result->get_row()) {
                    $l_catentries[$l_row[$this->m_category_map[$p_category_const][self::CL__CAT__DATA_FIELD]]] = $l_row;
                }
            }
        }

        return $l_catentries;
    }

    /**
     * Constructor.
     *
     * @param  string  $p_file
     * @param  string  $p_delimiter
     * @param  string  $p_multivalue
     * @param  string  $p_object_title
     * @param  integer $p_global_object_type
     * @param  integer $p_object_type
     * @param  integer $p_object_purpose
     * @param  integer $p_object_category
     * @param  integer $p_object_sysid
     * @param  integer $p_object_cmdbstatus
     * @param  integer $p_object_description
     * @param  boolean $p_header
     * @param  array   $p_prop_search
     * @param  string  $p_multivalue_update_mode
     * @param  integer $p_log_level
     * @param  integer $p_overwrite_empty_values
     * @param  integer $p_object_tags
     */
    public function __construct(
        $p_file,
        $p_delimiter,
        $p_multivalue,
        $p_object_title,
        $p_global_object_type,
        $p_object_type,
        $p_object_purpose,
        $p_object_category,
        $p_object_sysid,
        $p_object_cmdbstatus,
        $p_object_description,
        $p_header,
        $defaultTemplate,
        $p_prop_search,
        $p_multivalue_update_mode,
        $p_log_level,
        $p_overwrite_empty_values,
        $p_object_tags = null
    ) {
        Context::instance()
            ->setContextTechnical(Context::CONTEXT_IMPORT_CSV)
            ->setGroup(Context::CONTEXT_GROUP_IMPORT)
            ->setContextCustomer(Context::CONTEXT_IMPORT_CSV);

        /**
         * Disconnect the onAfterCategoryEntrySave event to not always reindex the object in every category
         * This is extremely important!
         *
         * An Index is done for all objects at the end of the request. (via mod.import_csv.afterImport)
         */
        Signals::instance()
            ->disconnectOnAfterCategoryEntrySave();

        self::set_step(self::CL__IMPORT_STEP__CONSTRUCT);

        $this->m_dao_dialog = isys_cmdb_dao_dialog_admin::instance(isys_application::instance()->container->get('database'));
        self::$m_s_dao = isys_cmdb_dao::instance(isys_application::instance()->container->get('database'));
        self::$m_logb_dao = new isys_module_logbook(isys_application::instance()->container->get('database'));

        $path = isys_application::instance()->app_path;
        $date = date('Y-m-d');

        $this->m_log_dir = isys_tenantsettings::get('system.log.path', "{$path}/log") . '/';
        $this->m_log_file = "csv_import_{$date}.log";

        // Use the "TestHandler" to retrieve the log records later on.
        $l_test_handler = (new TestHandler())->setFormatter(new LineFormatter("%message% %context%\n", null, false, true));

        // Use the "StreamHandler" to write the log records to a log file.
        $l_stream_handler = (new StreamHandler(
            $this->m_log_dir . $this->m_log_file,
            $p_log_level
        ))->setFormatter(new LineFormatter("[%datetime%] %level_name%: %message% %context%\n"));

        $this->m_log = new Logger('i-doit CSV', [
            $l_stream_handler,
            $l_test_handler
        ]);

        // Assign the "TestHandler" to a member variable.
        $this->m_log_handler = $l_test_handler;

        // Set information.
        self::$m_file = $p_file;
        self::$m_delimiter = $p_delimiter;
        self::$m_object_title = $p_object_title;
        self::$m_global_object_type = ($p_global_object_type > 0 && is_numeric($p_global_object_type)) ? (int)$p_global_object_type : null;
        self::$m_object_type = $p_object_type;
        self::$m_object_sysid = $p_object_sysid;
        self::$m_object_cmdbstatus = $p_object_cmdbstatus;
        self::$m_object_description = $p_object_description;
        self::$m_multivalue_update_mode = $p_multivalue_update_mode;
        self::$m_object_category = $p_object_category;
        self::$m_object_tags = $p_object_tags;
        self::$m_object_purpose = $p_object_purpose;
        self::$m_header = $p_header;
        $this->defaultTemplate = $defaultTemplate;
        self::$m_singlevalue_overwrite_empty_values = !!$p_overwrite_empty_values;

        // Additional property search for example category location property location object.
        self::$m_prop_search = $p_prop_search;

        // Try to update.
        self::$m_object_mode = self::CL__OBJECT_MODE__UPDATE;

        // Set multivalue mode.
        $l_multivalue_mode_str = 'self::CL__MULTIVALUE_TYPE__' . strtoupper($p_multivalue);

        if (constant($l_multivalue_mode_str)) {
            self::$m_step_construct = true;
            self::$m_multivalue_mode = constant($l_multivalue_mode_str);
            $this->m_log->info("Multivalue mode: " . self::$m_multivalue_mode);
        } else {
            $this->set_import_status(false);
            $this->m_log->error("Undefined Multivalue mode: " . $p_multivalue);
            $this->m_log->info('Aborting import !');
        }
    }

    /**
     * Mark category as updated
     *
     * @param $categoryConstant
     */
    private function addUpdatedCategory($categoryConstant)
    {
        $this->m_updated_categories[$categoryConstant] = true;
    }

    /**
     * Get updated categories as array of constants
     *
     * This is specifically implemented for the search
     * indexing routine triggerd by onAfterCsvImport
     *
     * @return array
     */
    public function getUpdatedCategories()
    {
        return array_keys($this->m_updated_categories);
    }

    /**
     * @param string $value
     *
     * @return array
     */
    private function splitNonEscapedCommas(string $value): array
    {
        // @see ID-6000 Only explode "not escaped" commas.
        return (array) preg_split('/(?<!\\\\),/', $value);
    }
}
