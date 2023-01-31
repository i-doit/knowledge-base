# All contributors are welcome!

## Too long; didn't read (tl;dr)

Fork the repository, setup your environment, hack on the articles in your favorite text editor, commit the changes and create a pull request!

## Base requirements

Whatever you want to contribute there are some base requirements:

-   You need a [GitHub account][github]
-   Either you need to fork [our repository][repository] or you need commit rights on it
-   You need a basic understanding how to use the [common markdown syntax][commonmark]
-   A basic understanding how [Git][gitbook] works is useful; [GitHub provides tutorials][githubHelp] about Git repositories and GitHub as a code hosting platform

## Behind the scenes

There are some concepts you should be aware of to understand how your contribution finds its way into the final product: [kb][]

### Markdown

The content is written in plain text using the common markdown syntax with extensions:

-   [Admonition][admonition] for block-styled side content (notes, tips, warnings, etc.)
-   [CodeHilite][codehilite] for syntax highlighting
-   [Metadata][metadata] for meta data (good for accessibility and SEO)

### Git and GitHub

To organize the content we use Git which is a distributed version control system (DVCS). This allows us to track each change. The main goal of Git is to support software developers in their daily business but to be pretty useful for writing documentation as well. Our credo is: "Everything as code"

Our hosting platform for this project is GitHub.

### Git workflow

The `main` branch is always the state of truth. It means everything which is available in this branch goes public. Therefore, we have to handle this important branch with care. One safeguard is heavy testing (see next section). Another is we do not allow to commit changes directly into the `main` branch. However, what we allow is to create pull requests.

### Continuous integration (CI)

Whenever a change is submitted to our main repository this change will be tested:

-   [ ] Is the used markdown syntax valid?
-   [ ] Does the spell checker find any errors?
-   [ ] Has the content a proper wording (avoid insensitive, inconsiderate writing)?
-   [ ] Is every external link still accessible?

Our continuous integration (CI) tools try to find an answer to each above questions by running new builds. Only if each question is answered with an "yes!" the build will pass and everything is ready to merge the change.

### Static site generator

Before anything gets published we would like to introduce our Website platform: [MkDocs][mkdocs] with the theme [Material for MkDocs][materialForMkDocs].

MkDocs is a static site generator. Based on the [configuration](mkdocs.yml) it converts all markdown files to HTML and builds a Website around it. This results in a bunch of HTML pages, images, CSS style sheets and JavaScript files. There is neither any need of an application platform/a scripting language like JBoss, Python or PHP nor a running database like MariaDB in the background. This makes the Website pretty fast.

### Continuous deployment (CD)

To deploy from the `main` branch to production we also use Jenkins to do this job. In this step Jenkins acts as a continuous deployment (CD) tool. The final result (remember: a bunch of HTML/images/CSS/JS) will be transferred to our production environment and is live immediately.

## Hack on the documentation as an author

Do you like to write new articles or edit existing ones? You have two options:

1.  Use the built-in editor on GitHub
2.  Use your own editor

### Use the built-in editor on GitHub

This is the easiest way to contribute. Additional to the basic requirements there is one more:

-   You need a modern Web browser (should be no problem, right?)

### Use your own editor

Instructions depends on the operating system you are using. These are many examples which work sufficiently:

-   Atom
-   VIM
-   Visual Studio Code (VSCode)

All listed editors can be extended to provide you an excellent writing environment.

## Setup your own environment

An own environment is useful to develop on new features, fix bugs, write documentation snippets or run tests locally. This is for advanced users.

Before you start make sure all required tools are installed and configured properly:

-   [Git][git]
-   Python **3** (2 does not work) with [PIP][pip]
-   GCC to compile some required Python packages
-   [NPM](https://docs.npmjs.com/), version `>= 6.7.0`
-   [Node.js](https://nodejs.org/en/docs/), version `>= 14.16.0`

This works on a GNU/Linux or a MacOS host:

~~~ {.bash}
git clone git@github.com:i-doit/kb.git
cd kb
npm install
pip install -U -r requirements.txt
~~~

## Use a live system

MkDocs has a built-in Web server which keeps track of your changes. Whenever you add a new file or update an existing one your Web browser reloads the current page automatically. Start the Web server:

~~~ {.bash}
npm run kb:serve
~~~

Open `http://localhost:8000` in your Web browser. You should see the home page.

## Build the site

Build the static website:

~~~ {.bash}
npm run kb:build
~~~

The result will be located within the `site/` directory.

## Writing guidelines

Do you like to know how to write good articles? Please follow our [writing guidelines](GUIDELINES.md).

## Code of conduct

We like you to read and follow our [code of conduct](CODE_OF_CONDUCT.md) before contributing. Thank you.

## Report bugs

Have you found misspellings, grammar mistakes, logical gaps? Have not you found what you are looking for? Please report a bug in our [issue tracker][issues].

## You are still unsure how to contribute?

[Get in touch with us.](SUPPORT.md)

## List of NPM scripts

This project comes with some useful NPM scripts. List all of them:

~~~ {.bash}
npm run info
~~~

## Further readings

-   If you are new to open source software read this guide: "[How to Contribute to Open Source](https://opensource.guide/how-to-contribute/)"

[admonition]: https://python-markdown.github.io/extensions/admonition/
[codehilite]: https://python-markdown.github.io/extensions/code_hilite/
[commonmark]: https://commonmark.org/
[kb]: https://kb.i-doit.com/
[git]: https://git-scm.com/
[gitbook]: https://git-scm.com/book/en/v2
[github]: https://github.com/
[githubHelp]: https://help.github.com/
[issues]: https://github.com/i-doit/docs/issues
[mkdocs]: https://www.mkdocs.org/
[materialForMkDocs]: https://squidfunk.github.io/mkdocs-material/
[metadata]: https://python-markdown.github.io/extensions/meta_data/
[pip]: https://pypi.org/project/pip/
[repository]: https://github.com/i-doit/kb
