# Website for the arden2bytecode project.

Accessible here: <http://arden2bytecode.sf.net>

## Overview

This repository contains the website for Arden2ByteCode,
an Arden Syntax to Java Bytecode compiler available at
<http://github.com/hflicka/arden2bytecode> .  
The website is written in PHP and provides basic 
information about the project, associated downloads and
source code repositories as well as responsible people.

The website repository has some submodules in order to 
include the documentation wiki files of Arden2ByteCode.
Also, to format these wiki files as HTML, a Markdown
parser and a Textile parser are imported.  
Finally, the update site for the Eclipse Arden Syntax
Editor feature is imported as a submodule.  
Here is a list of the path/URL pairs:

* htdocs/includes/php-markdown -> http://github.com/wolfie/php-markdown.git
* htdocs/includes/textile -> http://github.com/netcarver/textile.git
* htdocs/wiki-files -> http://github.com/hflicka/arden2bytecode.wiki.git
* htdocs/eclipse -> http://github.com/hflicka/ardensyntax-eclipse-plugin-update-site.git
