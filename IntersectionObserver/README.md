# Intersection Observer

Intersection Observer is a JavaScript API that we can use to do a lot of really useful things that we used to have to rely on scroll event listeners for. Instead of firing off over and over and over again on tons of items, they sit there and wait for their target intersect with the page before firing. 

We can use them to watch for when things enter or leave the viewport, and we can play with the options to change how much of the item has entered (the threshold), or how far into the page it is (the rootMargin).

## Example use cases

* Lazy Loading - intersection observer api can be used to load an image prior to it entering the viewport.

* Changing nav bar - intersection observer api can be used to change the navigation bar as a user scrolls, be it to change the background color or be it to change the active tab.

* Slide In - intersection observer api can be used to make content slide in when it appears within the viewport. 