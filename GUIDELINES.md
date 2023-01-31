# How to write good articles

The Web is full of uncounted tutorials telling you to be a good author.
We do not want to repeat the common basics.
Instead, we concentrate on some specifics how to write good articles for our [kb][].

If there is something missing please [raise an issue][issues].

## Language

You _must_ write in US-American English.

## Structure of any article

Each article _must_ have the following parts at least:

-   Title
-   Abstract
-   2 or more sections
-   Further readings

Example:

~~~ {.markdown}
# Title

Abstract.
Give a short introduction and summary.

## Section 1

Lorem ipsum dolor

## Section 2

Blindtext.
Blindtext.
Blindtext.

![Blindtext](img/topic/blindtext.png)

## Further readings

-   What to do next?
-   Resources/references used in this article

~~~

## Markdown syntax

You _must_ write one line per sentence in a Markdown file.

## Add images

### Common requirements

-   **PNG** as file extension
-   Allowed file size:
    **0.5 Megabytes**
-   **Alt text:**
    Give a short summary of each image embedded in markdown

### Screenshots

Further requirements:

-   Stick to the **current stable releases** of each software product (i-doit, add-ons, 3rd-party tools)
-   Resolution is **1920 x 1080** pixels:
    Web browser is in full screen mode on a Full HD display
-   Supported Web browsers:
    either **Mozilla Firefox** or **Google Chrome/Chromium**
-   No further image manipulation is allowed (resizing, filter, highlighting, photo collage, shadows, etc.)

### File location

-   Image files are based in the `kb/img/` directory
-   Image files are categorized by **high level topics** or **use cases**, for example: `login`, `dashboard`, `finder`, `document_locations`
-   Each category has its own sub-directory in `kb/img/`
-   Allowed characters for image file names (without file extension) and directory names: `[a-z0-9_]`
-   Each topic, use case and image file name is self-explanatory and concise.

### Automated screenshots

We generate screenshots of i-doit automatically at a regular basis.
This gives us the opportunity to provide always state-of-the-art screenshots.
To realize this we use Selenium, Behat and Jenkins on internal systems.
In short, we write so-called features with one or more scenarios to let Jenkins create screenshots of specific parts of i-doit using a phantom Web browser.
After each run Jenkins create a pull request to add new or update existing screenshots.

If you are interested in using this auto-mechanism [get in touch with us](SUPPORT.md).

## Other files than images

Please try to avoid adding any other files than images.
In most cases the website is not the right place for distributing files.

[kb]: https://kb.i-doit.com/
[issues]: https://github.com/i-doit/kb/issues
