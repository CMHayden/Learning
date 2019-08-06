# CSS

Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. Many preprocessors such as SCSS use the same syntax as CSS with slight changes such as mixins or nesting elements.

This project will assume basic knowledge of CSS and will instead focus on some of the things I have personally struggled with the most.

## Grid Layout

### What is it?

CSS Grid Layout excels at dividing a page into major regions or defining the relationship in terms of size, position, and layer, between parts of a control built from HTML primitives.

Like tables, grid layout enables an author to align elements into columns and rows. However, many more layouts are either possible or easier with CSS grid than they were with tables. For example, a grid container's child elements could position themselves so they actually overlap and layer, similar to CSS positioned elements.

Grid Layout can also be used to create responsive layouts without the need to use media queries.

### How do I use it?

To use CSS grid, all you need is to set the display element to grid and create some templates for the rows and columns. Below are some code samples explainin how to use css grid better.

Here is a snippet of code which will create a layout where the left and right most columns will be 200px each and the center will be the remaining space left. For the rows, the top most and bottom most will be determined by the size of the container and the items in the row, and the center will be the remaining space.

```CSS
    .parent {
        display: grid;
        grid-template-columns: 200px 1fr 200px;
        grid-template-rows: auto 1fr auto;
    }
```

A grid can also be created using minmax and repeat. Repeat allows you to specify the number of columns or rows without having to type the size of each and every one. Auto-fill is an argument which can be passed to repeat which will fill the area with cells until it is full.

```CSS
    .manual {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
    }

    .repeat {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(3, 1fr); 
    }

    .autofill {
        display: grid;
        grid-template-columns: repeat(auto-fill, 1fr);
    }
```

Minmax allows you to specify the minimum size and the maximum size of a row or column. This allows for making a responsive grid without the need of using media queries.

```CSS
    .minmax {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }
```

Another option with grids is span. You can use span to specify how many columns wide a div or section should be. This is useful for making (for example) the bootstrap jumbotron. Here is an example of it in action:

```CSS
    .parent {
        display: grid;
        grid-template-columns: 200px 1fr 200px;
        grid-template-rows: auto 1fr auto;
    }

    .child {
        grid-colum: span 3;
    }
```
