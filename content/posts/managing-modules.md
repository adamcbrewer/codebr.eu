/*
Title: A Tip On Managing Large Scale Module Development
Description: This is a custom description
Date: 2013-07-04
Author: Stu Grant
*/

# A Tip On Managing Large Scale Module Development #

 Often I am dropped into a large project and given a large document with module names and numbers with varients. When a site is going through testing, it can be somtimes difficult to decipher what modules are what so by using data-attributes I can quickly work out what modules are having problems.

<pre data-type="html">
	&lt;div
		class="module-news-feed"
		data-dev-module="m.1.1.2"
	&gt;
		...
	&lt;/div&gt;
</pre>

