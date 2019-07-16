# Bootstrap

Bootstrap is a framework/library for developing responsive, mobile first projects on the web. It can be boiled down to three main files:

* Bootstrap.css - a css framework.
* Bootstrap.js - a JavaScript/JQuery framework.
* Glyphicons - an icon set.

Bootstrap requires jquery to work. Jquery is a popular java script library that both simplifies and adds cross browsers compatibility to JavaScript.

## Getting started

### Package manager

To install bootstrap you can use the node package manager or the gem package manager.

```console
foo@bar:~$ npm install bootstrap
foo@bar:~$ gem install bootstrap -v 4.3.1
```

### CDN

With the CDN you can add just the css or the css and java script

```html
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
```

### Direct download

You can download bootstrap [here](https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip) and add it manually to your project.

## Useful Links

The best resource I have found for bootstrap are:
*[Bootstrap Examples](https://getbootstrap.com/docs/4.3/examples/) - shows examples of what can be built with bootstrap.

*[Bootstrap Documentation](https://getbootstrap.com/docs/4.3/getting-started/introduction/) - documentation from bootstrap on how to use bootstrap in your project.

*[Bootswatch](https://bootswatch.com/) - themes for bootstrap that can help with design ideas, seeing what´s possible, and for quickly prototyping a front end.

## Use cases

The best time to use bootstrap is for quickly prototyping the front end of an application. By this I mean to make a front end just to be able to add functionality or a backend to it. It is possible to fully customize bootstrap and make it your own though.

Bootstrap grid is also a great way of making a responsive design and I would highly recommend it.
