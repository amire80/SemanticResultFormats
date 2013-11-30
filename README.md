# Semantic Result Formats

Semantic Result Formats is an extension to MediaWiki that bundles a number of
result formats for Semantic MediaWiki's inline queries. The individual formats
can be added to the installation independently. This file contains an
overview on how to install and configure the formats, as well as an overview
of all included formats.

Semantic Result Formats requires Semantic MediaWiki to run, at least at the
same second-level version number as Semantic Result Formats, i.e. SRF 1.5.x
requires SMW 1.5.x.

For more information, see the [SRF homepage]
(https://www.semantic-mediawiki.org/wiki/Semantic_Result_Formats).

## Included formats

### icalendar

Enables exports of calendar entries (events) using the iCalendar format.
Using this format creates an according download link in the wiki.

### vcard

Enables exports of contact data (email, phone, address, etc.) using the vCard
format. Using this format creates an according download link in the wiki.

### bibtex

Enables exports of bibliographical reference data using the BibTeX format.
Using this format creates an according download link in the wiki.

### calendar

Displays query results in a monthly calendar interface.

### outline

Displays query results in an "outline" form, using the values of one more
properties as the headers.

### sum

Displays the sum of the numeric values of the queried property.

### average

Displays the average of the numeric values of the queried property.

### min

Displays the smallest of the numeric values of the queried property.

### max

Displays the largest of the numeric values of the queried property.

### googlepie

Creates a pie chart out of the numeric values of a specific property using
the Google Charts API. This format sends data to Google for formatting.

### googlebar

Creates a bar chart out of the numeric values of a specific property using
the Google Charts API. This format sends data to Google for formatting.

### jqplotpie

Creates a pie chart out of the numeric values of a specific property
using the jqPlot Javascript library.

### jqplotbar

Creates a bar chart out of the numeric values of a specific property
using the jqPlot Javascript library.

### graph

Creates a graph based on the relations in the wiki. Requires the GraphViz
extension.

### gallery

Creates a gallery of images (and captions) dynamically. The output is the
same as when using MediaWiki's built-in <gallery>-tag.

### tree, ultree, oltree

Format tree displays the query result as a tree, i.e. as an unordered (bulleted)
nested HTML list. ultree is an alias of tree. oltree produces an ordered
(numbered) list instead of an unordered list. 

### filtered

Displays results in switchable views and offers client-side (JavaScript based)
filtering. (unfinished, e.g. no switching between views yet)

## Contact

If you have remarks, questions, or suggestions, please send them to
semediawiki-users@lists.sourceforge.net. You can subscribe to this
list at
http://sourceforge.net/mailarchive/forum.php?forum_name=semediawiki-user.

Bugs should be filed at the MediaWiki Bugzilla, at http://bugzilla.wikimedia.org/.
Please select "SemanticResultFormats" as the "component".

If you want to contribute work to the project please subscribe to the
developers mailing list, semediawiki-devel@lists.sourceforge.net.

## Developers

Development is coordinated by James Hong Kong and Jeroen De Dauw.

Some parts of Semantic Result Formats development have been funded by
[Institut AIFB](http://www.aifb.kit.edu/web/Hauptseite) of the
Karlsruhe Institute of Technology in Germany.

Specific development tasks have also been supported by the European Union
under the project Active.

Development of the jqPlot-based formats was funded via the Google Summer
of Code.

## Contributors

* S Page has contributed code.
* The Graph format was contributed by Frank Dengler, based on AT&T's Dot
Graphic utility and the MediaWiki Graph extension. The Process format
had great contributions by Hans-Jörg Happel.
* The Eventline and Timeline code is based on the Timeline code by the
MIT Simile project.
* The Exhibit code was contributed by Fabian Howahl, based on code by the
MIT Simile project.
* The Calendar, Outline and mathematical formats were contributed by Yaron Koren.
* The Ploticus format was contributed by Joel Natividad.
* The BibTeX format was contributed by Steren Giannini.
* The Gallery format was contributed by Rowan van der Molen.
* The jqPlot-based formats were contributed by Sanyam Goyal and Yaron Koren,
using the jQuery and jqPlot Javascript libraries.
* The valuerank format was added by DaSch.
* Many other people have contributed to the project by providing helpful
comments and suggestions. More comments are always welcome!

## Translations

Translations to various languages are provided and maintained by many people.
In general, main contributors can be found in the message file. Special thanks
are due to Siebrand Mazeland and the [TranslateWiki project](https://translatewiki.net) for their
excellent support in that matter.
