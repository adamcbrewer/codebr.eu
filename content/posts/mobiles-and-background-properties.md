/*
Title: Mobiles and Background Properties: The Caveat
Description: Having fixed background attachments and background-size set to cover makes life harder than it should be on mobiles.
Date: 2013-09-07
Author: Adam Brewer
*/


# Mobiles and Background Properties: The Caveat

As a front-end developer I agree that there are too many things out there that make life harder than it should be.

One of those is background images on mobiles/touch devices.

Apparently you cannot have `background-attachment: fixed` used alongside `background-size: cover` on the same element. Mobile iOS devices decide to take it upon themselves to completely freak out and teh result is a horribly compressed and distored image.

The issue has been documented, but I've found the best sources [here](http://bricss.net/post/7615491565/background-size-css-property-buggy-on-ios-devices) and [here](http://www.quirksmode.org/m/css.html#t022); surprisingly no mention on Stack Overflow (to my knowledge).

Apparently the backgrond image is squished in size to fit the container, but then blown up because of the `fixed` property.

tl;dr

Don't pair these properties for mobile devices. You'll save yourself time and some hair loss. Winning.

## Have something to add?

<div class="disqus" id="disqus_thread"></div>
