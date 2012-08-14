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
include the recent GitHub 
[documentation wiki files](https://github.com/hflicka/arden2bytecode/wiki) 
of Arden2ByteCode.
Also, to format these wiki files as HTML, a Markdown
parser and a Textile parser are imported.  
Finally, the update site for the Eclipse Arden Syntax
Editor feature is imported as a submodule.  
Here is a list of the relative path/URL pairs:

* htdocs/includes/php-markdown -> <http://github.com/wolfie/php-markdown.git>
* htdocs/includes/textile -> <http://github.com/netcarver/textile.git>
* htdocs/wiki-files -> <http://github.com/hflicka/arden2bytecode.wiki.git>
* htdocs/eclipse -> <http://github.com/hflicka/ardensyntax-eclipse-plugin-update-site.git>

## Update Workflow

I issued all of the below commands via the Sourceforge
SSH shell service. You must be member of the
Arden2ByteCode Sourceforge project to be able to
read and write to the directory 
`/home/project-web/arden2bytecode/`.

To deploy this website on the Sourceforge webspace, I
first compiled a recent version of Git having submodule
support using:

    $ cd ~
    $ wget http://git-core.googlecode.com/files/git-<version>.tar.gz
    $ tar -xzf git-<version>.tar.gz
    $ cd git-<version>
    $ make prefix=/home/project-web/arden2bytecode/git
    $ make prefix=/home/project-web/arden2bytecode/git install

However, if the preinstalled Git supports submodules, 
it is not necessary to compile Git.

If this website repository has not been cloned yet, I 
do so by using:

    $ cd /home/project-web/arden2bytecode
    $ <git-binary> clone http://github.com/hflicka/arden2bytecode-homepage.git
    $ cd arden2bytecode-homepage
    $ <git-binary> submodule update --init

These commands also initialize the submodules.  
Also, these commands are included in the update script
of this website but are commented out.

To update to a recent version of the repository and
all submodules, I use:

    $ <git-binary> pull
    $ <git-binary> submodule foreach <git-binary> pull origin master

Finally the website has to be copied to the htdocs
directory but all .git subdirectories should be 
omitted. Also I clean the target directory first to
wipe out old files:

    $ rm -rf /home/project-web/arden2bytecode/htdocs
    $ rsync -r --exclude='.git' /home/project-web/arden2bytecode/arden2bytecode-homepage/htdocs /home/project-web/arden2bytecode/

The above steps except for building Git are aggregated
in the update script in the root of this Git 
repository.  
For your convenience, you may create an alias 
pointing to 
`/home/project-web/arden2bytecode/arden2bytecode-homepage/update`
in your `.bash_profile`.