# Comment commencer à documenter?

Souvent, les gens nous consultent avec les questions suivantes ou des considérations similaires:

*   Si je n'ai pas encore de documentation informatique : Quel est le meilleur moyen de commencer?
*   Avec combien de détails dois-je commencer?
*   Quelle zone dois-je couvrir en premier : Clients et serveurs? Bâtiments et salles? Le réseau?
*   Combien de catégories dois-je _dois_ couvrir pour obtenir une bonne vue d'ensemble?
*   …

Toute personne qui traite en profondeur du sujet de la documentation informatique reconnaîtra rapidement qu'ici comme ailleurs, il s'applique toujours : Le premier pas est toujours le plus difficile. Dans cet article, nous aimerions cartographier les raisons de ces questions et comment nous pouvons y répondre de manière optimale.

Jetez un œil à nos [livres blancs](https://www.i-doit.com/en/downloads/) également. 

{/*examples*/}

Connaître vos besoins
----------------------

Ce n'est pas par hasard que les gens s'occupent de la documentation informatique. Elle ne fonctionne pas seule et ne sert pas de fin en soi. Soit la demande d'établir une documentation informatique dans l'organisation informatique est faite par le département informatique lui-même, par des niveaux hiérarchiques supérieurs, par la direction ou de l'extérieur (conformité). Avant de vous occuper d'outils comme i-doit, les questions suivantes doivent être clarifiées : Quels objectifs souhaitez-vous atteindre ou soutenir avec la documentation informatique ? Les administrateurs ont-ils perdu le fil de l'infrastructure ? La direction souhaite-t-elle spécifier les services (informatiques) à offrir aux départements internes et/ou aux clients ? Y a-t-il des lois, des normes ou des directives qui stipulent qu'il doit y avoir une documentation informatique ?

Il existe différentes approches : _Top down_ décrit que les exigences sont décomposées dans un processus de haut en bas. Cela s'applique également à la documentation : Avant de vous pencher sur les détails des composants informatiques individuels, vous élaborez le tableau d'ensemble. _Bottom up_ est le contrepartie : Sur la base d'une infrastructure détaillée, vous pouvez modéliser des services, attribuer des contrats de maintenance ou créer des plans de reprise après sinistre. Mais dans une certaine mesure, les exigences viennent de tous les côtés en même temps. Donc, avant de documenter ne serait-ce qu'une adresse IP ou de lire une spécification de serveur, vous devriez canaliser ces exigences et les intégrer dans des structures bien réfléchies. 

{/*examples*/}

Connaître vos utilisateurs
---------------------------

Une des questions les plus importantes est : Qui travaille avec la documentation informatique ? Qui bénéficie de la documentation ? Que ce soit dans de petites ou de grandes organisations informatiques, il est judicieux de mettre en place une équipe de documentation qui traite ensemble de toutes les questions liées au sujet. Souvent, il y a un responsable de la documentation dans l'équipe qui coordonne tous les processus concernant la documentation informatique. De plus, il y a généralement une personne du niveau de la direction qui agit en tant que sponsor et fournit des ressources (temps et argent) afin de mener à bien l'introduction de la documentation informatique. De plus, il y a diverses autres personnes qui aident activement à façonner la documentation informatique ou l'utilisent passivement à leurs propres fins.

Connaître votre documentation existante
---------------------------------------

Il est rare que vous commenciez vraiment de zéro. À vue de nez, environ 100 pour cent de nos clients utilisent _le_ produit rival d'i-doit appelé Excel. Listes d'adresses IP, listes de salles et de contacts, plans de rack... nous avons vu tout cela documenté sous une forme bidimensionnelle. Peut-être avez-vous également d'autres outils spécialisés qui créent le paysage actuel de l'ITSM. Voulez-vous qu'ils soient remplacés par i-doit ? Les données collectées peuvent-elles être réutilisées ? Y a-t-il des exports ou des interfaces ? Dans ce contexte, l'intégration des données est un mot-clé important. 

{/*examples*/}


Mais dans chaque cas, vous devez prendre une décision : devez-vous saisir les données manuellement ou peuvent-elles être traitées automatiquement ?

Connaissez votre informatique
-----------------------------

Commençons par une citation :

       On ne voit bien qu'avec le cœur.

Cela vous semble familier ? Vous avez raison ; il s'agit d'une citation de [Johann Wolfgang von Goethe](https://de.wikiquote.org/wiki/Johann_Wolfgang_von_Goethe). En lien avec cet article, cela signifie que l'administration et la direction auront du mal à garder une vue d'ensemble de l'infrastructure informatique sans une documentation suffisamment détaillée et à jour.

Dans ce contexte, l'objectif est de combler le fossé entre la richesse des détails et l'abstraction. Lorsque vous devez décider si de nouvelles informations doivent être incluses dans la documentation informatique ou non, posez-vous la question suivante : quels seraient les avantages si ces détails étaient consignés noir sur blanc, entretenus et mis à disposition des autres ? Une documentation trop détaillée comporte le risque de devenir trop lourde pour le lecteur et semble inutilisable. Faut-il enregistrer chaque câble dans le centre informatique avec des détails sur la longueur et la couleur ? Ou est-il suffisant d'enregistrer les connexions de port entre les composants actifs du réseau ?

De nombreux de nos clients commencent par la liste des emplacements (bâtiments, salles, racks) pour cartographier les infrastructures serveur et réseau. Ensuite, les différentes étapes suivent rapidement : logiciels et services, clients et postes de travail, composants passifs (panneaux de brassage et câbles).

Ergo : Chaque projet a un début défini et une fin définie. Entre les deux, il peut et devrait y avoir des jalons qui sont réalisables en pratique. Bien sûr, la même chose s'applique à l'introduction de la documentation informatique. Quels éléments ont une priorité élevée ; quels éléments ont une faible priorité ?

Connaissez vos Processus
------------------------

La documentation informatique est durable uniquement lorsqu'elle est constamment mise à jour et profondément enracinée dans les processus de travail de vos employés. Seules les informations à jour sont utiles. Dans tous les cas, vous devriez éviter les informations obsolètes ou incorrectes. Avant de "mettre en service" et de mettre en œuvre votre documentation informatique en exploitation réelle, vous devriez identifier tous les processus où la documentation informatique est pertinente. Un exemple : Lorsque i-doit est intégré dans le cycle de vie complet d'un composant informatique, commençant par la planification, l'achat, la mise en service jusqu'à l'élimination, cela a des conséquences cruciales pour de nombreux processus (et autres outils). Dans ce contexte, nous parlons d'un "système de référence".


Prenez votre temps
------------------

Vous ne commencez pas la documentation informatique demain et vous attendez à être prêt le lendemain. Il faut du temps pour répondre aux questions de qui documente quand, quoi et comment. Dans les petites organisations, cela peut aller plus vite que dans les plus grandes jusqu'à ce que la documentation informatique puisse être mise en ligne. Plusieurs semaines ou mois sont plutôt la règle que l'exception. Vous devriez prêter attention au célèbre [triangle magique du domaine de la gestion de projet](https://de.wikipedia.org/wiki/Projektmanagement#Stakeholdererwartungen). Ici, les points clés sont le coût, la qualité et le temps. Le projet se trouve à l'intérieur du triangle. Maintenant, le chef de projet peut décider des deux coins du triangle qu'il veut atteindre. Atteindre les trois coins du triangle en même temps est souvent très difficile, voire impossible. Nous vous suggérons de ne pas viser la marque des 100 pour cent au début, mais plutôt seulement 80 pour cent en accordant une attention particulière à la qualité.

Documentez votre documentation
------------------------------

Il n'y a pas moyen d'y échapper pour écrire les choses importantes pour la documentation informatique : Comment est conçue la documentation informatique ? Quels processus sont définis ? Par conséquent, il est judicieux de maintenir un Wiki avec les mêmes informations à côté d'i-doit. Heureusement, un Wiki ou un système de gestion de documents est déjà présent dans la plupart des cas et peut donc être utilisé à cette fin.

Penser en dehors de la boîte
---------------------

Ceux qui cherchent l'inspiration ou veulent puiser dans un réservoir d'expériences n'ont pas besoin de chercher plus loin. À côté des réunions d'utilisateurs régionales et des conférences nationales d'utilisateurs, nous offrons de nombreux points de contact où vous pouvez échanger des points de vue et des expériences concernant i-doit et la documentation informatique.

Et lorsque qu'un partenaire fort (de service) est nécessaire, nous et nos partenaires proposons des ateliers et des packages, etc. qui sont idéalement adaptés pour la phase de démarrage avec i-doit.

En fin de compte
-----------

"Alors, par où commencer maintenant?" Ce n'est pas tout à fait facile de répondre à cette question. Sinon, nous aurions pu vous épargner en élaborant sur ce sujet.

En fait, la réponse dépend de nombreux facteurs qui doivent être observés. Chaque organisation informatique et infrastructure est différente et est soumise à un bon degré de dynamisme. Par conséquent, nous ne pouvons pas vous donner une réponse générale. Il s'agit et restera toujours une tâche individuelle de mettre en œuvre la documentation informatique. N'hésitez pas à nous contacter! Nous sommes heureux de vous aider!
