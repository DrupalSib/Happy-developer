<div id="headers">
  <h2>Headers</h2>
  <p>Headers are used to describe such elements as website name, slogan, section titles. HTML and XHTML specifications define 6 levels of headers, where h1 is the most important and h6 is the least important.</p>
  <h1>Header 1</h1>
  <h2>Header 2</h2>
  <h3>Header 3</h3>
  <h4>Header 4</h4>
  <h5>Header 5</h5>
  <h6>Header 6</h6>
</div>

<div id="links">
  <h2>Links</h2>
  <p><a href="#">Local link</a><br>
  <a class="visited" href="http://www.google.com">Visited link</a><br>
  <a class="external" href="http://www.google.com">External link</a><br>
  <a href="https://www.google.com">External link with encrypted connection</a><br>
  <a href="admin@test.com">E-mail link</a></p>
</div>

<div id="block-elements">
  <h2>Block elements</h2>
  <h3>Block quote</h3>
  <blockquote cite="http://en.wikipedia.org/wiki/Blockquote"><p>The blockquote element is used to indicate the quotation of a bigger section of text from another source. Using the default HTML styling of most web browsers, it will indent the right and left margins both on the display and in printed form.<cite>Wikipedia, The Free Encyclopedia</cite></p></blockquote>
  <h3>Preformated text</h3>
  <pre>
    ___                        _
   /   \_ __ _   _ _ __   __ _| |   // This is preformated text
  / /\ / '__| | | | '_ \ / _` | |
 / /_//| |  | |_| | |_) | (_| | |
/___,' |_|   \__,_| .__/ \__,_|_|
                  |_|
  </pre>
</div>

<div id="phrase-elements">
  <h2>Phrase elements</h2>
  <h3>em</h3>
  <p style="margin-bottom: 0pt;">Element used to <em>put emphasis on certain information</em>. Most browsers display emphased text in italics by default.</p>
  <p>Sample: <em>This is emphasied text</em>.</p>
  <h3>strong</h3>
  <p style="margin-bottom: 0pt;">This element stands for "stronger emphasis" and is used for marking more important text.</p>
  <p>Sample: <strong>This is text with stronger emphasis</strong></p>
  <h3>cite</h3>
  <p style="margin-bottom: 0pt;">According to <cite>W3C specification</cite>, we use <code>cite</code> element to define source of a quotation or reference.</p>
  <p>Sample: <cite>This is quotation source</cite></p>
  <h3>dfn</h3>
  <p style="margin-bottom: 0pt;">Element used to markup inline definition of a single term.</p>
  <p>Sample: <dfn>This is definition</dfn></p>
  <h3>code</h3>
  <p style="margin-bottom: 0pt;">This element informs the browser that it contains a computer code, such as XHTML markup.</p>
  <p>Sample: <code>document.write("Hello world");</code></p>
  <h3>samp</h3>
  <p style="margin-bottom: 0pt;">Defines computer output data, for example we can use it to markup error messages</p>
  <p>Sample: <samp>Error: no such file or directory</samp></p>
  <h3>kbd</h3>
  <p style="margin-bottom: 0pt;">Means information that should be entered by the user.</p>
  <p>Sample: press <kbd>Alt + F4</kbd> to close this window. <kbd>ESC</kbd></p>
  <h3>var</h3>
  <p style="margin-bottom: 0pt;">Means variables used in computer programs or scripts.</p>
  <p>Sample: <var>counter</var></p>
  <h3>abbr</h3>
  <p style="margin-bottom: 0pt;">Abbreviation / a shortened form of a word or phrase</p>
  <p>Sample: <abbr title="doctor">dr</abbr></p>
  <h3>acronym</h3>
  <p style="margin-bottom: 0pt;">Acronym / a word formed from the initial letters of other words</p>
  <p>Sample acronyms: <acronym title="eXtensible HyperText Markup Language">XHTML</acronym></p>
  <h3>q</h3>
  <p style="margin-bottom: 0pt;">Inline quotation</p>
  <p>Sample: <q>This is sample quotation</q></p>
</div>

<div id="lists">
  <h2>Lists</h2>

  <h3>Unordered List</h3>
  <ul>
    <li>Apple</li>
    <li>Pear</li>
    <li>Banana</li>
    <li>Orange</li>
    <li>Carrot</li>
  </ul>

  <h3>Ordered List</h3>
  <ol>
    <li>First</li>
    <li>Second</li>
    <li>Third</li>
    <li>Fourth</li>
  </ol>

  <h3>Definition List</h3>
  <dl>
    <dt>Definition List Title</dt>
    <dd>This is a definition list division.</dd>
    <dt>Inkscape</dt>
    <dd>Open Source vector graphics editor</dd>
    <dt>SVG</dt>
    <dd>Scalable Vector Graphics</dd>
    <dd>W3C standard</dd>
    <dt>GIMP</dt>
    <dd>GNU Image Manipulation Program</dd>
    <dt>Drupal</dt>
    <dd>Content Management System</dd>
  </dl>

  <h3>Nested lists</h3>
  <ol>
    <li>one, two
      <ol>
        <li>buckle my shoe</li>
      </ol>
    </li>
    <li>three, four
      <ol>
        <li>knock at the door</li>
      </ol>
    </li>
    <li>Five, six
      <ol>
        <li>pick up sticks</li>
      </ol>
    </li>
    <li>Seven, eight, lay them straight
      <ol>
        <li>Nine, ten, a big fat hen</li>
        <li>Eleven, twelve, dig and delve</li>
        <li>Thirteen, fourteen, maids a’courting</li>
        <li>Fifteen, sixteen, maids in the kitchen</li>
        <li>Seventeen, eighteen, maids a’waiting</li>
        <li>Nineteen, twenty, my platter’s empty …</li>
      </ol>
    </li>
  </ol>
</div>

<div id="paragraphs">
  <h2>Paragraphs</h2>
  <p>According to Wikipedia: a paragraph (from the Greek <a href="#">paragraphos</a>, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. The start of a paragraph is indicated by beginning on a new line. Sometimes the first line is indented; sometimes it is indented without beginning a new line.</p>
  <p>A paragraph typically consists of a unifying main point, thought, or idea accompanied by supporting details. The non-fiction paragraph usually begins with the general and moves towards the more specific so as to advance an argument or point of view. Each paragraph builds on what came before and lays the ground or run the length of multiple pages, and may consist of one or many sentences. When dialogue is being quoted in fiction, a new paragraph is used each time the person being quoted changed.</p>
  <p>In (X)HTML, the p element marks a block of text as a paragraph - the opening tag &lt;p&gt; marks the beginning of a paragraph, and the closing tag &lt;/p&gt; marks the end of a paragraph. The end tag is optional for legacy HTML as the browser automatically starts another paragraph at the next &lt;p&gt; tag, or the nextblock element.</p>
</div>

<div id="tables">
  <h2>Tables</h2>
  <table>
    <caption>Table title goes here</caption>
    <thead>
      <tr>
        <th>Mauris</th>
        <th>Tempor</th>
        <th>Praesent lacus nulla</th>
        <th>Quis</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td>Mauris</td>
        <td>23.000</td>
        <td>Suspendisse viverra</td>
        <td>Yes</td>
      </tr>
      <tr class="even">
        <td>Trupis</td>
        <td>1.000</td>
        <td>Placerat tortor aesent semper</td>
        <td>No</td>
      </tr>
      <tr class="odd">
        <td>Sagittis</td>
        <td>122.000</td>
        <td>Neque vel condimentum</td>
        <td>No</td>
      </tr>
      <tr class="even">
        <td>Libero</td>
        <td>500</td>
        <td>Hendrerit, lectus elit pretium</td>
        <td>Yes</td>
      </tr>
      <tr class="odd">
        <td>Tristique</td>
        <td>100.000</td>
        <td>Ligula nec consequat</td>
        <td>Yes</td>
      </tr>
      <tr class="even">
        <td>Id Neque</td>
        <td>600.000</td>
        <td>Etiam sodales orci nec</td>
        <td>No</td>
      </tr>
    </tbody>
  </table>
</div>

<div id="others">
  <h2>Other elements</h2>
  <h3>Subscript and superscript samples</h3>
  <p>H<sub>2</sub>O,</p>
  <p>E = mc<sup>2</sup>,</p>
  <p>The 14<sup>th</sup> of September</p>
  <h3>Insertion and deletion samples</h3>
  <p><ins datetime="2009-07-12T08:15:30+02:00" title="Added new information according to suggestions">This information was just added.</ins><br>
  <del>While this information is no longer valid.</del></p>
  <h3>Presentational elements</h3>
  <p><strong>Bold text</strong><br>
  <em>Italic text</em><br>
  <tt>Typewriter text</tt><br>
  <big>Big</big><br>
  <small>Small</small></p>
  <p>Horizontal rule:</p>
  <hr>
  <h3>UTF-8 test</h3>
  <p>Ä, ä, Ö, ö, Ü, ü, ß</p>
  <p>Š Ť Ž Ľ Č Ě Ď Ň Ř Ů Ĺ</p>
  <p>ХЦЧШЩЬЫЪЭЮЯ</p>
</div>