# CSCI E-15 Project 2 - XKCD-style Password Generator

## Live URL
<http://p2.dwa15.jdepasquale.com>

## Description
A random password generator inspired by [this](http://xkcd.com/936/) XKCD comic.
My take on this project draws the source text from a randomly selected [Chandra
X-ray Observatory](http://chandra.si.edu) press release. The key to knowing where
to look lies in a [CSV file](https://github.com/depasq/chandra_skymap/blob/master/cxc_sources.csv)
that I maintain as part of another project at work.

Additional controls in the form provide the ability to choose the number of words,
use different separators between words, choose to append a symbol and/or a number and
also choose to capitalize all words. The default setting if nothing is entered is
four words, all lowercase, with a dash separator and no numbers or symbols.

When a new password is generated, the site updates to show a thumbnail picture of
the press release image and a link to the source of the text.  


## Demo
https://youtu.be/JRYrVhadC0I

## Details for teaching team
This page uses PureCSS with additional custom formatting contained in css/p2.css

As mentioned above, the page uses a CSV file with links to all of the Chandra
Observatory's press releases as the catalyst for scraping text data from the site
to generate passwords.  

index.php handles the general layout with the side-menu, and form controls
logic.php takes the input from the form to generate the password

## Outside code
* Pure CSS: http://yui.yahooapis.com/pure/0.5.0/pure-min.css
* Pure CSS Side Menu: css/side-menu.css
* Referenced [this page](http://www.codedevelopr.com/articles/reading-csv-files-into-php-array/)
for examples of how to open and read CSV files in php.
* Ran into some trouble with the scraping early on when trying to find html tags
using regular expression matching. After some searching, I found [this great](http://blog.cnizz.com/2012/10/12/scrape-faster-with-php-domdocument-and-safely-with-tor/)
article on using DOMDocument to parse html.
* Also hit a snag converting DOMElements to string and found a good answer [here](http://stackoverflow.com/questions/8964674/php-domdocument-how-to-convert-node-value-to-string).
