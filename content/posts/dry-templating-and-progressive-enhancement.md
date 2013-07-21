/*
Title: DRY Templating and Progressive Enhancement
Description:
Date: 2013-07-07
Author: Adam Brewer
*/

# DRY Templating and Progressive Enhancement

I rember the day I read <a href="http://diveintohtml5.info/semantics.html" target="_blank" title="Dive Into HTML5: Semantics">Dive Into HTML5: Semantics</a>, recommended to me by <a href="http://stugoo.co.uk" target="_blank" title="Stugoo">a friend</a>. Before that day I though semantics was a way for developers to justify that we had a "code of ethics" when really the web was just a mashup.

I quickly realised we pursue this ideal because it's the right thing to do. We make content for the world to browse and so the information we display must have context and be accessible everywhere, to everyone and to anything that has an interent connection.

I've seen a few posts recently concerning Javascript-centric webapps and the performance, SEO and accessibility issues for those done incorrectly. The trouble is *"what is right way?"* I'm starting to see the merit in straightforward, multi-page HTML &amp; CSS sites rather that fighting with these already proven methods just to have a flashy site in Javascript.

Don't get me wrong, I love me some Javascript, but you have to admire the inherent nature of HTML and hyperlinks. It's like a birthday present with batteries included. It may be last year's model, but we can turn it on straight away. Pages can be crawled and deep-linking has less chance of breaking.

> Man cannot live by Javascript alone
> <cite>Stu Grant</cite>

So why then do we make either 'normal' apps or Javascript apps? Why are the two split? Do we have to separate them?

I must have spent a good couple of hours scouring the internet this afternoon (when I should have been burning my skin in the sun with a gin and tonic) trying to find a solution to server and client-side templating. In the PHP world at least it's a very hard thing to come by. Sure there are lots of libraries out there, and Github hosted projects are a pleasure to see, but hardly any are fit for public consumption, aside from [Mustache](http://mustache.github.io/).

Surely developers sould be encouraged to build working sites first and layering Javascript on as an enhancement? But if there's no *real* DRY templating solution between server and client-side (apart form Node.js) then we're more likely to favour single-page, JS-only apps as opposed to enhancing an already working, traditional, multi-page app.

So, trying to recover and get back to the subject of this post, if we're trying to encourage progressive enhancement we need common ground amongst the tools and libraries we use. Better templating engines catering for both Javascript and our server language of choice. We need solutions for pairing content between delivery methods, not isolating content or being 'mobile-mostly'.

I'm still searching for a solution, but I guess as a developer I'll never really be satisfied!

## Have something to add?

<div class="disqus" id="disqus_thread"></div>
