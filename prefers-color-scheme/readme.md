# Prefers Color Scheme

prefers-color-scheme is a new media query which allows you to detect if the user is using a light or dark colour scheme on their device.

## Getting started

To get started, check if your preffered web browsers supports this feature. If it does, then no problem! Just add the following to your html:

```html
    <link rel="stylesheet" href="css/dark.css" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="css/light.css" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
    <link rel="stylesheet" href="css/main.css">
```

to allow for changing colour theme based on users prefered colour theme. Then you can set colours inside the light and dark css, which is referenced from the main css file.

You can also access this by using the following media query in your normal css:

```css
    @media (prefers-color-scheme: dark) {
        /*CSS properties go here*/
    }
```

## Use cases

The best use I have found for this has been to automatically switch between a dark and light theme based on users preference.
