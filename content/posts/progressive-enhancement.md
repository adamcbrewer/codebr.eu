/*
Title: Progressive Enhancment
Description:
Date: 2013-07-07
Author: Adam Brewer
*/

# Falling back to progressive enhancement

I rember the day I read <a href="http://diveintohtml5.info/semantics.html" target="_blank" title="Dive Into HTML5: Semantics">Dive Into HTML5: Semantics</a>, recommended to me by <a href="http://stugoo.co.uk" target="_blank" title="Stugoo">a friend</a>. I used to think, before that days, that semantics was a way for us as developers to justify to ourselves that we hade a 'code of ethics.' I remember thinking "who are we kidding?"

In my few short years as a developer I began to realise we &mdash; fellow webmakers &mdash; pursue this ideal because:

1. It's the right thing to do
2. We're correcting our course as we go along
3. We're not corrupt on the inside

We all make content, be that for advertising, marketing, communicating or just for fun. We need to ensure what we make is usable by as many people we can reach. This isn't *haves and have nots*, it's open information to anyone who has an internet connection.

I've seen a few posts recently concerning Javascript-centric webapps and the performance, SEO and accessibility issues for those done incorrectly. The trouble is "what is right?" I'm starting to see the merit in straightforward HTML, CSS &amp; server sites rather that struggling with already working methods just to have a flashy site in JS.

Don't get me wrong, I love me some JS, but you have to admire the inherent natre of HTML and hyperlinks. It's like a birthday present with batteries included. It may be last year's model, but we can turn it on straight away.

So why then do we make either 'normal' apps or Javascript apps? Why are the two split? Do we have to separate them?

I must have spent a good couple of hours scouring the internet this afternoon (when I should have been burning my skin with a gin and tonic in the park) trying to find a solution to server and client side templating. In the PHP world at least it's a very hard thing to come by. Sure there are lots of libraries out there, and Github hosted projects are a pleasure to see, but hardly any are fit for public consumption, aside from [Mustache](http://mustache.github.io/).

Maybe, with the massive surge in open coding we also need to teach contributing and inviting/encouraging contributions? Maybe that's another post. ^_^

Surely developers sould be encouraged to build working sites first and layering Javascript on as an enhancement? If you don't have a cross-over between server and client side rendering (apart form Node.js) then you're making more work for yourself, which no-one wants.

So, trying to recover and get back to the subject of this post, if we're going to be progressivly enhancing sites we need common ground amongst the tools we use. By this I mean better templating engines catering for both Javascript and our server language of choice. We need solutions for pairing content between delivery methods, not isolating content or being 'mobile-mostly'.

I for one would love to see more pull requests in this area.
