In this exercise you need to create your own web page. Use all what you’ve learnt. 

There are some requirement you should fulfil. 

-   <span>The page should contain at least 3 subpages.</span>
-   <span>Its html should be W3C valid.</span>
-   <span>It should contain properly used HTML5 (new) elements</span>
-   <span>It should contain a navigation menu</span>
-   <span>It should contain a contact page with a form to send email to the author (you don’t need to create server side logic, only the front end) with input validation</span>

### Step by step:

#### Create your index page

1.  <span>Before you start coding sketch up how your web pages should look like. You can do it on paper or with any wire frame application. This is your choice. The purpose is to visualize that what different sections and parts will be in your page and how should they be arranged.</span>
2.  <span>Create a new html file in your repository root directory named: </span>**index.html**
3.  <span>Set the doctype to HTML5 form</span>
4.  <span>Add </span>*&lt;head&gt;*<span> part and setup basic meta data and the </span>*&lt;title&gt;*<span> of the page</span>
5.  <span>Add &lt;body&gt; part</span>
6.  <span>Add </span>*&lt;header&gt;*<span> </span><span>to the body </span><span>which will contain</span><span> </span>*&lt;nav&gt;*<span>igation menu. The first item of this should be a link to this page.</span>
7.  <span>Add a &lt;</span><span>div&gt; element to the body which has a class named: </span>**content**<span>. This will contain the part of the pages which differs from each other.</span>
8.  <span>Add an image of you and a small introduction next to it about yourself.</span>
9.  <span>Add some content to it (e.g. the description of the exercise) to see where will it be. You can fill it with arbitrary content. Take care to use the different html tags properly so it can express your intent.</span>
10. <span>Add </span>*&lt;footer&gt; *<span>and add some content to it. Take example from other sites.</span>
11. <span>After you finish commit your changes into your repository with a descriptive comment.</span>

#### Make it nice

Please remember not to use external libraries like Bootstrap 

<ol>
<li>
<span>Create a new folder named </span>**css** <span>in your repository’s root directory</span>

</li>
<li>
<span>Create a </span>**style.css**<span> file in that newly created folder. This will contain all your rules about your site's appearance.</span>
</li>
<li>
<span>Add a reference to it in your index.html file's head part.</span>
</li>
<li>
<span>Define basic rules for the body element. (Default background, font, alignment...) These rules are inherited in the child elements (every element which located inside the body).</span>
</li>
<li>
<span>Write css rules to make all the site like your sketch.</span>
</li>
</ol>
#### Create a contact page

1.  <span>Copy your **index.html** file and give it the name: </span>**contact.html**
2.  <span>Add a link to your navigation menu which redirects to this </span><span>html page</span>
3.  <span>Delete the inner content of </span>**div.content**<span> element</span>
4.  <span>Create a form </span><span>inside it</span>
5.  <span>Add two *&lt;input&gt;* field and a *&lt;textarea&gt;* field to the form and proper *&lt;label&gt;*s to them. The first input field is the name which has a placeholder text: </span>*Enter your name.*<span> The second input field is the email with placeholder text: </span>*Give your email. *<span>The textarea will contain the message so give some handful instruction in the placeholder text. Do not forget add named all your form element.</span>
6.  <span>Add a submit button wich should has the text </span>**SEND**<span> on it. It should be disabled by default.</span>
7.  <span>Open your </span>**style.css**<span> file and at the bottom of it and write some rules which makes it nice. (e.g. horizontally </span><span>centered and the fields has the same width</span><span>). You can see an example on the <https://codecool.pl/kontakt/></span><span> web site. Maybe it is familiar to you. ;)</span>
8.  Commit your changes into your repository.  

#### Add business logic to your contact page

Now it’s time to use some JavaScript features, you can learn more about this here:
<http://htmldog.com/guides/javascript/>

Please don’t use here external libraries like jQuery 

<ol>
<li>
<span>Create new folder in your repository root directory named: </span>**js.**

</li>
<li>
<span>In this folder create a new file named </span>**main.js**

</li>
<li>
<span>Add a script tag </span><span>at the bottom of </span><span>all html </span><span>pages’ body which refers to this file.</span>

</li>
<li>
<span>Create a function </span><span>named </span>validateContactData().<span>In this function you need to collect the field of the contact form and do some validation on them.
</span>The name is valid if its length bigger than 3 character (maximum 30) and contains at least one whitespace.
<span>The email address need to be a valid email adress which ending to </span>.pl<span>or </span>.com and have **@** sign.
The message is valid if it longer than 20 char (maximum 500).
<span>If every field are valid make the send button enabled anyway highlight the border of the invalid data field.</span>

</li>
<li>
Attach the validateContactData function as event handler to the form fields (name, email, message) onChange event.
</li>

<li>
Create a function named sendMessage(). In this function collect all the necessary data (name, email, message) from the form and pop up an alert window which shows these data and a text that: Your message was sent!.</li>

<li>
Create a function named sendMessage(). In this function collect all the necessary data (name, email, message) from the form and pop up an alert window which shows these data and a text that: Your message was sent!.</li>
<li>
Commit your changes into your repository!
</li>
</ol>
#### Create your custom pages

1.  <span>Create your new html file(s) based on the **index.html**</span>
2.  <span>Add the proper link to the navigation menu on every other html files.</span>
3.  <span>Fill it with custom content</span>
4.  <span>Extend your stylesheet if needed</span>
5.  <span>If you make some business logic locate it into the **main.js** file.</span>
6.  <span>Do not forget to commit and push your changes into your repository!</span>

#### Validate your pages

1.  <span>Go to </span><a href="https://validator.w3.org/" class="external"><span><span>https://validator.w3.org/</span><span class="screenreader-only"> (Links to an external site.)</span></span><span class="ui-icon ui-icon-extlink ui-icon-inline" title="Links to an external site."></span></a>
2.  <span>Validate your sites</span>
3.  <span>Fix </span><span>the issues</span>

