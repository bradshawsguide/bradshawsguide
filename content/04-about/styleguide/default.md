title: Style Guide
----
type: child
----
text: The main page header of this guide is an `h1` element. Any header element may include links, as depicted in the following examples.

## Second-Level Header [Linked](#)

The secondary header above is an `h2` element, which may be used for any form of important page-level header. More than one may be used per page. Consider using an `h2` unless you need a header level of less importance, or as a sub-header to an existing `h2` element.

### Third-Level Header [Linked](#)
The header above is an `h3` element, which may be used for any form of page-level header which falls below the `h2` header in a document hierarchy.

#### Fourth-Level Header [Linked](#)
The header above is an `h4` element, which may be used for any form of page-level header which falls below the `h3` header in a document hierarchy.

## Grouping content
### Paragraphs
All paragraphs are wrapped in `p` tags. Additionally, `p` elements can be wrapped with a `blockquote` element *if the `p` element is indeed a quote*. Historically, `blockquote` has been used purely to force indents, but this is now achieved using CSS. Reserve `blockquote` for quotes.

### Horizontal rule
The `hr` element represents a paragraph-level thematic break, e.g. a scene change in a story, or a transition to another topic within a section of a reference book. The following extract from <cite>Pandora's Star</cite> by Peter F. Hamilton shows two paragraphs that precede a scene change and the paragraph that follows it:

<div class="example" markdown="1">
Dudley was ninety-two, in his second life, and fast approaching time for another rejuvenation. Despite his body having the physical age of a standard fifty-year-old, the prospect of a long degrading campaign within academia was one he regarded with dread. For a supposedly advanced civilization, the Intersolar Commonwearth could be appallingly backward at times, not to mention cruel.

*Maybe it won't be that bad*, he told himself. The lie was comforting enough to get him through the rest of the night's shift.

* * *

The Carlton AllLander drove Dudley home just after dawn. Like the astronomer, the vehicle was old and worn, but perfectly capable of doing its job. It had a cheap diesel engine, common enough on a semi-frontier world like Gralmond, although its drive array was a thoroughly modern photoneural processor. With its high suspension and deep-tread tyres it could plough along the dirt track to the observatory in all weather and seasons, including the metre-deep snow of Gralmond's winters.
</div>
    
### Pre-formatted text
*[ASCII]: American Standard Code for Information Interchange

The `pre` element represents a block of pre-formatted text, in which structure is represented by typographic conventions rather than by elements. Such examples are an e-mail (with paragraphs indicated by blank lines, lists indicated by lines prefixed with a bullet), fragments of computer code (with structure indicated according to the conventions of that language) or displaying ASCII art. Here's an example showing the printable characters of ASCII:

<div class="example" markdown="1">
<pre><samp>&#32; ! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~</samp></pre>
</div>

### Blockquotes
The `blockquote` element represents a section that is being quoted from another source.

<div class="example" markdown="1">
> Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.
</div>

### Ordered list
The `ol` element denotes an ordered list, and various numbering schemes are available through the CSS (including 1,2,3... a,b,c... i,ii,iii... and so on). Each item requires a surrounding `<li>` and `</li>` tag, to denote individual items within the list (as you may have guessed, `li` stands for list item).

<div class="example" markdown="1">
1. This is an ordered list.
2. This is the second item.
3. This is the final item on this list.
</div>

### Unordered list
The `ul` element denotes an unordered list (ie. a list of loose items that don't require numbering, or a bulleted list). Again, each item requires a surrounding `<li>` and `</li>` tag, to denote individual items. Here is an example list showing the constituent parts of the United Kingdom:

<div class="example" markdown="1">
* England
* Scotland
* Wales
* Northern Ireland
</div>

Sometimes we may want each list item to contain block elements, typically a paragraph or two.

<div class="example" markdown="1">
* The British Isles is an archipelago consisting of the two large islands of Great Britain and Ireland, and many smaller surrounding islands.

* Great Britain is the largest island of the archipelago. Ireland is the second largest island of the archipelago and lies directly to the west of Great Britain.

* The full list of islands in the British Isles includes over 1,000 islands, of which 51 have an area larger than 20 km<sup>2</sup>.
</div>

### Definition list
The `dl` element is for another type of list called a definition list. Instead of list items, the content of a `dl` consists of `dt` (Definition Term) and `dd` (Definition description) pairs. Though it may be called a "definition list", `dl` can apply to other scenarios where a parent/child relationship is applicable. For example, it may be used for marking up dialogues, with each `dt` naming a speaker, and each `dd` containing his or her words.

<div class="example" markdown="1">
This is a term
: This is the definition of that term, which both live in a `dl`.

Here is another term
: And it gets a definition too, which is this line.

Here is the final defined term
: `dt` terms may stand on their own without an accompanying `dd`, but in that case they *share* descriptions with the next available `dt`. You may not have a `dd` without a parent `dt`.
</div>

### Figures
Figures are usually used to refer to images:

<div class="example">
<figure>
    <img src="http://lorempixum.com/680/400/abstract/" alt="Example image"/>
    <figcaption>
        This is a placeholder image, with supporting caption.
    </figcaption>
</figure>
</div>

Here, a part of a poem is marked up using figure:

<div class="example">
<figure>
    <p>&#8216;Twas brillig, and the slithy toves<br/>
    Did gyre and gimble in the wabe;<br/>
    All mimsy were the borogoves,<br/>
    And the mome raths outgrabe.</p>
    <figcaption>
        <cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98
    </figcaption>
</figure>
</div>

When you  wish to cite the source of a quote, you should do so using a figure also:

<div class="example">
<figure>
    <blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
        <p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
    </blockquote>
    <figcaption>
        Winston Churchill, in <cite><a href="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">a speech to the House of Commons</a></cite>. 11th November 1947
    </figcaption>
</figure>
</div>

## Text-level Semantics
There are a number of inline <abbr title="HyperText Markup Language">HTML</abbr> elements you may use anywhere within other elements.

### Links and anchors
The `a` element is used to hyperlink text, be that to another page, a named fragment on the current page or any other location on the web. Example:

<div class="example" markdown="1">
[Go to the home page](/) or [return to the top of this page](#top).
</div>

### Stressed emphasis
The `em` element is used to denote text with stressed emphasis, i.e., something you'd pronounce differently. Where italicizing is required for stylistic differentiation, the `i` element may be preferable. Example:

<div class="example" markdown="1">
You simply *must* try the negitoro maki!
</div>

### Strong importance
The `strong` element is used to denote text with strong importance. Where bolding is used for stylistic differentiation, the `b` element may be preferable. Example:

<div class="example" markdown="1">
**Don't** stick nails in the electrical outlet.
</div>

### Small print
The <small>small</small> element is used to represent disclaimers, caveats, legal restrictions, or copyrights (commonly referred to as &#8216;small print'). It can also be used for attributions or satisfying licensing requirements. Example:

<div class="example" markdown="1">
<small>Copyright &#169; 1922-2011 Acme Corporation. All Rights Reserved.</small>
</div>

### Strikethrough
The `s` element is used to represent content that is no longer accurate or relevant. When indicating document edits i.e., marking a span of text as having been removed from a document, use the `del` element instead. Example:

<div class="example" markdown="1">
<s>Recommended retail price: &#163;3.99 per bottle</s>
**Now selling for just &#163;2.99 a bottle!**
</div>

### Citations
The `cite` element is used to represent the title of a work (e.g. a book, essay, poem, song, film, TV show, sculpture, painting, musical, exhibition, etc). This can be a work that is being quoted or referenced in detail (i.e. a citation), or it can just be a work that is mentioned in passing. Example:

<div class="example" markdown="1">
<cite>Universal Declaration of Human Rights</cite>, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).
</div>

### Inline quotes
The `q` element is used for quoting text inline. Example showing nested quotations:

<div class="example" markdown="1">
John said, <q>I saw Lucy at lunch, she told me <q>Mary wants you to get some ice cream on your way home</q>. I think I will get some at Ben and Jerry's, on Gloucester Road.</q>
</div>

### Definition
The `dfn` element is used to highlight the first use of a term. The `title` attribute can be used to describe the term. Example:

<div class="example" markdown="1">
Bob's <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.
</div>

### Abbreviation
The `abbr` element is used for any abbreviated text, whether it be acronym, initialism, or otherwise. Generally, it's less work and useful (enough) to mark up only the first occurrence of any particular abbreviation on a page, and ignore the rest. Any text in the `title` attribute will appear when the user's mouse hovers the abbreviation (although notably, this does not work in Internet Explorer for Windows). Example abbreviations:

<div class="example" markdown="1">
BBC, HTML, and Staffs.

*[BBC]: British Broadcasting Corporation
*[HTML]: HyperText Markup Language
*[Staffs.]: Staffordshire
</div>

### Time
The `time` element is used to represent either a time on a 24 hour clock, or a precise date in the proleptic Gregorian calendar, optionally with a time and a time-zone offset. Example:

<div class="example" markdown="1">
Queen Elizabeth II was proclaimed sovereign of each of the Commonwealth realms on <time datetime="1952-02-6">6</time> and <time datetime="1952-02-7">7 February 1952</time>, after the death of her father, King George VI.
</div>

### Superscript and subscript text
The `sup` element represents a superscript and the sub element represents a `sub`. These elements must be used only to mark up typographical conventions with specific meanings, not for typographical presentation. As a guide, only use these elements if their absence would change the meaning of the content. Example:

<div class="example" markdown="1">
The coordinate of the <var>i</var>th point is (<var>x<sub><var>i</var></sub></var>, <var>y<sub><var>i</var></sub></var>). For example, the 10th point has coordinate (<var>x<sub>10</sub></var>, <var>y<sub>10</sub></var>).

f(<var>x</var>, <var>n</var>) = log<sub>4</sub><var>x</var><sup><var>n</var></sup>
</div>

### Italicised
The `i` element is used for text in an alternate voice or mood, or otherwise offset from the normal prose. Examples include taxonomic designations, technical terms, idiomatic phrases from another language, the name of a ship or other spans of text whose typographic presentation is typically italicised. Example:

<div class="example" markdown="1">
There is a certain <i lang="fr">je ne sais quoi</i> in the air.
</div>

### Emboldened
The `b` element is used for text stylistically offset from normal prose without conveying extra importance, such as key words in a document abstract, product names in a review, or other spans of text whose typographic presentation is typically emboldened. Example:

<div class="example" markdown="1">
You enter a small room. Your <b>sword</b> glows brighter. A <b>rat</b> scurries past the corner wall.
</div>

### Marked or highlighted text
The `mark` element is used to represent a run of text marked or highlighted for reference purposes. When used in a quotation it indicates a highlight not originally present but added to bring the reader's attention to that part of the text. When used in the main prose of a document, it indicates a part of the document that has been highlighted due to its relevance to the user's current activity. Example:

<div class="example" markdown="1">
I also have some <mark>kitten</mark>s who are visiting me these days. They're really cute. I think they like my garden! Maybe I should adopt a <mark>kitten</mark>.
</div>

### Edits
The `del` element is used to represent deleted or retracted text which still must remain on the page for some reason. Meanwhile its counterpart, the `ins` element, is used to represent inserted text. Both `del` and `ins` have a `datetime` attribute which allows you to include a timestamp directly in the element. Example inserted text and usage:

<div class="example" markdown="1">
She bought <del datetime="2005-05-30T13:00:00">two</del> <ins datetime="2005-05-30T13:00:00">five</ins> pairs of shoes.
</div>

<h2 id="tables">Tabular data</h2>
Tables should be used when displaying tabular data. The `thead`, `tfoot` and `tbody` elements enable you to group rows within each a table.

If you use these elements, you must use every element. They should appear in this order: `thead`, `tfoot` and `tbody`, so that browsers can render the foot before receiving all the data. You must use these tags within the table element.

<div class="example" markdown="1">
|                  | Miles. |
| ---------------- | ------ |
| Brickland        | 2      |
| Calley Farm      | 0¾     |
| Cophill Farm     | 4      |
| Dean's Farm      | 7      |
| Gadbrook Common  | 3      |
| Hamon's Copse    | 5      |
| Hatch Farm       | 1      |
| Henfold Farm     | 4      |
| Kingswood Garden | 3¾     |
| Leatherhead      | 6      |
| Littleton Farm   | 1      |
| Mead House       | 1      |
| Nork House       | 5      |
| Parkfall Place   | 4      |
| Red Hill Farm    | 1      |
| Reigate Mills    | 1      |
| Reigate Park     | 0¾     |
| Rice Bridge      | 2      |
| Upper Galton     | 2      |
| Walton           | 3½     |
</div>