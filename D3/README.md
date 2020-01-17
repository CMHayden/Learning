# D3: Data-Driven Documents

<a href="https://d3js.org"><img src="https://d3js.org/logo.svg" align="left" hspace="10" vspace="6"></a>

**D3** (or **D3.js**) stands for Data-Driven-Documents. It is an open-source JavaScript library created by Mike Bostock to create interactive data visualizations in the web browser using SVG, HTML and CSS.

With the massive amount of data being generated today, communicating this information is getting difficult. Visual representations of data are the most effective way of showing meaningful information and D3 provides a great deal of ease and flexibility to create these data visualizations. It is dynamic, intuitive and needs minimum amount of effort.

D3.js can be found [on github](https://github.com/d3/d3) or [on the D3 website](https://d3js.org).

## Table of contents

* [Features](https://github.com/CMHayden/Learning/tree/master/D3#features)
* [Advantages](https://github.com/CMHayden/Learning/tree/master/D3#advantages)
* [Getting started](https://github.com/CMHayden/Learning/tree/master/D3#getting-started)
* [How to D3](https://github.com/CMHayden/Learning/tree/master/D3#how-to-d3)
* [Useful links](https://github.com/CMHayden/Learning/tree/master/D3#useful-links)
* [Current examples in this repo](https://github.com/CMHayden/Learning/tree/master/D3#current-examples-in-this-repo)

## Features

**Uses Web Standards**: D3 is an extremely powerful visualization tool to create interactive data visualizations. It exploits the modern web standards: SVG, HTML and CSS to create data visualization.

**Data Driven**: D3 is data driven. It can use static data or fetch it from the remote server in different formats such as Arrays, Objects, CSV, JSON, XML etc. to create different types of charts.

**DOM Manipulation**: D3 allows you to manipulate the Document Object Model (DOM) based on your data.

**Data Driven Elements**: It empowers your data to dynamically generate elements and apply styles to the elements, be it a table, a graph or any other HTML element and/or group of elements.

**Dynamic Properties**: D3 gives the flexibility to provide dynamic properties to most of its functions. Properties can be specified as functions of data. That means your data can drive your styles and attributes.

**Types of Visualization**: With D3, there are no standard visualization formats. But it enables you to create anything from an HTML table to a Pie chart, from graphs and bar charts to geospatial maps.

**Custom Visualizations**: Since D3 works with web standards, it gives you complete control over your visualization features.

**Transitions**: D3 provides the *transition()* function. This is quite powerful because internally, D3 works out the logic to interpolate between your values and find the intermittent states.

**Interaction and Animation**: D3 provides great support for animation with functions like *duration()*, *delay()* and *ease()*. Animations from one state to another are fast and responsive to user interactions.

## Advantages

D3 is a Javascript library. So, it can be used with any JS framework of your choice like Angular.js, React.js or Ember.js.

D3 focuses on data, so it is the most appropriate and specialized tool for data visualizations.

D3 is open-source. So you can work with the source code and add your own features.

It works with web standards so you don't need any other technology or plugin other than a browser to make use of D3.

D3 works with web standards like HTML, CSS and SVG, there is no new learning or debugging tool required to work on D3.

D3 does not provide any specific feature, so it gives you complete control over your visualization to customize it the way you want. This gives it an edge over other popular tools like Tableau or QlikView.

Since D3 is lightweight, and works directly with web standards, it is extremely fast and works well with large datasets.

## Getting started

To get started with D3, you need to include D3.js library into your HTML webpage in order to use D3 to create data visualization. You can do it in two ways:

### Direct download

You can directly download D3 [here](https://github.com/d3/d3) and add it manually to your project.

### CDN

With the CDN you just need to copy and paste this script into your html

```html
<script src="https://d3js.org/d3.v5.min.js"></script>
```

---

# How To D3

## Table of contents

* [Selecting DOM elements](https://github.com/CMHayden/Learning/tree/master/D3#selecting-dom-elements)

* [Manipulating DOM elements](https://github.com/CMHayden/Learning/tree/master/D3#manipulating-dom-elements)

* [Method chaining](https://github.com/CMHayden/Learning/tree/master/D3#method-chaining)

* [Function of data](https://github.com/CMHayden/Learning/tree/master/D3#function-of-data)

* [Event handling](https://github.com/CMHayden/Learning/tree/master/D3#event-handling)

* [Animation](https://github.com/CMHayden/Learning/tree/master/D3#animation)

* [Data binding](https://github.com/CMHayden/Learning/tree/master/D3#data-binding)

* [Data loading](https://github.com/CMHayden/Learning/tree/master/D3#data-loading)

* [Create SVG elements](https://github.com/CMHayden/Learning/tree/master/D3#create-svg-elements)

* [Create SVG chart](https://github.com/CMHayden/Learning/tree/master/D3#create-svg-chart)

* [Scales](https://github.com/CMHayden/Learning/tree/master/D3#scales)

* [Axes](https://github.com/CMHayden/Learning/tree/master/D3#axes)

* [Bar chart](https://github.com/CMHayden/Learning/tree/master/D3#bar-chart)

* [Animated bar chart](https://github.com/CMHayden/Learning/tree/master/D3#animated-bar-chart)

* [Pie chart](https://github.com/CMHayden/Learning/tree/master/D3#pie-chart)

## Selecting DOM elements

D3 allows for manipulating DOM elements in the HTML document, but in order to do this, we must select the element, or group of elements. This can be done with:

| Method                    | Description                                               |
| ------------------------- | --------------------------------------------------------- |  
| *d3.select(selector)*     | Returns the first matching element in the HTML document.  | 
| *d3.selectAll(selector)*  | Returns all matching elements in the HTML document.       | 

For an indepth look at the selectors that can be used, [here is a link to W3 about selectors](https://www.w3.org/TR/selectors/).

### By name

```HTML
<p>First paragraph</p>
<p>Second paragraph</p>

<script>
    d3.select("p").style("color", "green");
</script>
```

In the example above, *d3.select("p")* returns the first *<p>* element. *.style("color", "green")* sets the color attribute to green. When run, it will change "First paragraph" to green.

### By ID

```HTML
<p id ="p1">First paragraph</p>
<p id="p2">Second paragraph</p>

<script>
    d3.select("#p2").style("color", "green");
</script>
```

In the example above, *d3.select("#p2")* returns the *<p>* element with the id p2. *.style("color", "green")* sets the color attribute to green. When run, it will change "Second paragraph" to green.

### By class name

```HTML
<style>
    .myclass{
        color: 'red'
    }
</style>

<p class ="myclass">First paragraph</p>
<p>Second paragraph</p>
<p class ="myclass">Third paragraph</p>

<script>
    d3.selectAll(".myclass").style("color", "green");
</script>
```

In the example above, *d3.selectAll(".myclass")* returns all the elements with the class name *myclass*. *.style("color", "green")* sets the color attribute to green. When run, it will change the first and third paragraph to green.

### By nested elements

```HTML
<table>
<tr>
    <td>
        One
    </td>
    <td>
        Two
    </td>
</tr>
<tr>
    <td>
        Three
    </td>
    <td>
        Four
    </td>
</tr>
</table>

<script>
    d3.select("tr").selectAll("td").style('background-color','yellow');
</script>
```

In the above example, *d3.select("tr")* returns the first matching *<tr>* element. Then the *selectAll("td")* returns all *<td>* elements within the *<tr>* element. The *.style()* then changes their background to yellow. When run, this would show as normal but with "One" and "Two" having a yellow background.

## Manipulating DOM elements



| Method                        | Description                                                                                        |
| ----------------------------- | -------------------------------------------------------------------------------------------------- |  
| *.text("content")*            | Gets or sets the text of the selected element.                                                     | 
| *.append("element name")*     | Adds an element inside the selected element but just before the end of the selected element.       |
| *.insert("element name")*     | Inserts a new element in the selected element.                                                     | 
| *.remove()*                   | Removes the specified element from the DOM.                                                        | 
| *.html("content")*            | Gets or sets the inner HTML of selected element.                                                   | 
| *.attr("name", "value")*      | Gets or sets an attribute on the selected element.                                                 | 
| *.property("name", "value")*  | Gets or sets an attribute on the selected element.                                                 |
| *.style("name", "value")*     | Gets or sets the style of the selected element.                                                    | 
| *.classed("css class", bool)* | Gets, adds, or removes a css class from the selection.                                             | 
| *.append("element name")*     | Returns all matching elements in the HTML document.                                                |  

### text()

```HTML
<div>
    </p>
</div>
<p></p>
<script>
    d3.select("p").text("This is paragraph.")
</script>
```

In the above example, the first matching *<p>* tag is selected. *.text("This is a paragraph.")* changes the paragraph within the tag to "This is a paragraph.". If *selectAll()* was used, the same would be done but, however, with all of the *<p>* tags.

### append()

```HTML
<p>First paragraph</p>
<p>Second paragraph</p>

<script>
    d3.select("body").append("p").text("Third paragraph.");
</script>
```

In the above example, the body tag is selected. *.append("p")* adds a new *<p>* tag to the body right before the body is closed. Text us then added to this new paragraph by chaining the *.text()* method.

### insert()

```HTML
<div>
    <p>First paragraph.</p>
</div>

<script>
    d3.select("div").insert("p").text("Second paragraph.");
</script>
```

In the above example, the first *<div>* tag is selected. *insert("p")* insterts a new paragraph inside this div, and then text is added using *.text()*.

### remove()

```HTML
<p>Firstt paragraph</p>
<p>Second paragraph</p>

<script>
    d3.select("p").remove();
</script>
```

In the above example, *d3.select("p")* returns the *<p>* tag. *.remove()* then removes this tag from the document.

### html()

```HTML
<p>First paragraph</p>
<script>
    d3.select("p").html("<span>This is new inner html.</span>");
</script>
```

In the above example, *d3.select("p")* returns the *<p>* tag. *.html("<span>This is new inner html.</span>")* replaces what is inside the *<p>* tag with the new *<span>*.

### attr()

```HTML
<style>
    .error {
        color: red
    }
</style>
<body>
    <p>Error: This is dummy error.</p>
    <script>
        d3.select("p").attr("class","error");
    </script>
</body>
```

In the above example,  *d3.select("p")* returns the *<p>* tag. *.attr("class", "error")* adds a class attribute to the paragraph. The *attr()* method can be used to set any calid attribute to any selected DOM element.

### property()

Some attributes cannot be set with *attr()* such as the checked property of a checkbox. This however can be done with the *property()* method.

```HTML
<p>D3</label><input type="checkbox" />
<p>jQuery</label><input type="checkbox" />

<script>
    d3.select("input").property("checked",true);
</script>
```

In the above example, *d3.select("input")* selects the first *<input>* element, and set's it's checked property to true with *.property("checked", true)*

### style()

```HTML
<p>Error: This is dummy error.</p>
<script>
    d3.select("p").style("color", "red")
</script>
```

In the above example, *d3.select("p")* returns the *<p>* tag. The colour red is then applied to the paragraph with *.style("color", "red")*.

### classed()

```HTML
<style>
    .error {
        color: red
    }
</style>
<body>
    <p>This is error.</p>

    <script>
        d3.select("p").classed('error', true);
    </script>
</body>
```

In the above example, *d3.select("p")* returns the *<p>* tag. We then use the *.classed()* method to set the class *myclass* as a class of this *<p>* tag with *d3.classed('error', true)*.

## Method chaining

Chain syntax or method chaining, is the technique used by D3 to pass outputs as inputs to new methods. In D3 methods are chained together using a period. For example:

```JS
d3.select("body").append("p").text("Hello World!");
```

The alternative to this would look like so:

```JS
var bodyElemet = d3.select("body");
var paragraph = bodyElement.append("p");

paragraph.text("Hello World!");
```

Using chain syntax is a cleaner and shorter way of writing code with D3. In the previous example, the chaining of methods was all done on one line, however, we can also split this into multiple lines which improves radability like so:

```JS
d3.select("body")
  .append("p")
  .text("Hello World!");
```

## Function of data

In the DOM Manipulation section we spoke about different D3 methods for manipulating DOM elements. These methods can take a constant value or a function as a parameter. This function is called a function of data. With a function of data, the function will be called for each of the data values bound to the DOM. For example:

```JS
.text(function(d) {
    return d;
});
```

With this function, we can apply any logic to manipulate the data. These functions are anonymous, meaning there's no name associated with it.

Other than the data (d) parameter, there are two other parameters available to us, i (the index element) and this (the current DOM object).

```JS
.text(function(d, i) {
    console.log(d);     // the data element
    console.log(i);     // the index element
    console.log(this);  // the current DOM object

    return d;
});
```

### Dynamic properties

Function of data can be used to add properties or attributes to elements dynamically based on the data or business logic. For example, to colour a paragraph dependent on it's content, this can be done inside the style property function like so:

```JS
d3.selectAll("p").style("color", function(d, i) {
    var text = this.innerText;

    if (text.indexOf("Error") >= 0) {
        return "red";
    } else if (text.indexOf("Warning") >=0) {
        return "yellow";
    }
})
```

In this example, all of the *<p>* elements are selected and within the *.style()* method the color is set using a function of data. Inside this function, there's logic which checks if the current *<p>* elements text contains the keywords *"Error"* or *"Warning"*, and setting the paragraph's color to red or yellow depending on this.

## Event handling

D3 supports built-in events and custom events. Event listeners are binded to DOM elements using *d3.selection.on()*.

```JS
d3.selection.on(type[, listener[, capture]]);
```

The *on()* method adds an event listener to all selected DOM elements. The first parameter is an event type such as *click* or *mouseover*. The second is a callback function which will be executed when an event occurs and the third option parameter capture flag may be specified ([See here for more information](https://www.w3.org/TR/DOM-Level-2-Events/events.html#Events-registration)). Here is a table of event handling methods and objects:

| Method                    | Description                                                                                                           |
| ------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| selection.on()            | Add or remove event listeners to capture event types like click, mouseover, mouseout etc.                             |
| selection.dispatch()      | Captures event types like click, mouseover, mouseout. Typenames is the eventname, listener is the event listener.     |
| d3.event                  | Event object to access standard event fields such as timestamp or methods like preventDefault.                        |
| d3.mouse(container)       | Gets the x and y coordinates of the current mouse position in the specified DOM element.                              |
| d3.touch()                | Gets the touch coordinates to a container.                                                                            |

Here is an example showing mouseover and mouseout events:

```HTML
<!doctype html>
<html>
<head>
    <style>
        div {
            height: 100px;
            width: 100px;
            background-color: steelblue;
            margin: 5px;
        }
    </style>
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <div> </div>
    <div> </div>

<script>
    d3.selectAll("div")
        .on("mouseover", function(){
            d3.select(this)
              .style("background-color", "green");

            console.log(d3.event);
            console.log(d3.mouse(this));
        })
        .on("mouseout", function() {
            d3.select(this)
              .style("background-color", "steelblue")
        });
</script>
</body>
</html>
```

In the above example, we have two div elements and applied a css to each with a steelblue bg colour. We have captured the mouseover and mouseout events of all div elements using *selection.on(event)* and added event listener functions to each captured event. Then we go on to apply styles to each of these.

Note:
    *console.log(d3.event)* - displays the current event object.
    *console.log(d3.mouse)* - displays the x and y coordinates of the mouse.

## Animation

D3 simplifies the process of animations with transitions. Transitions are made on DOM selections using *<selection>.transition()* method. The following table lists important methods for animation in D3:

| Method                    | Description                                                           |
| ------------------------- | --------------------------------------------------------------------- |
| selection.transition()    | Schedules transition for selected elements.                           |
| transition.duration()     | Specifies duration of animation for each element in milliseconds.     |
| transition.ease()         | Specifies the easing function, ie: linear, elastic, bounce...         |
| transition.delay()        | Specifies the delay in animation for each element in milliseconds.    |

### transition()

The *d3.selection.transition()* method indicates the start of transition and then different transition functions can be applied to selected elements. Here is an example of changing bg colour with animation:

```html
<!doctype html>
<html>
<head>
<style>
    #container {
        height: 100px;
        width: 100px;
        background-color: black;
    }
</style>
<script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <div id="container"></div>

    <script>
        d3.select("#container")
          .transition()
          .duration(1000)
          .style("background-color", "red");
    </script>
</body>
</html>
```

In this example, a div element called container is created with a given height, width and bg colour. We then transition the bg colour from black to red. This is done with the *transition()* function which creates the transition on the selected *container* element. We then call the *duration()* function to specify how long the transition should take place, which is 1000 milliseconds in this case.

Transitions can also be created and stored in a variable. It can be used to apply animations to different elements in a visualization. See below for an example.

```JS
var t = d3.transition()
        .duration(500)

    d3.select("#container")
        .transition(t)
        .style("background-color", "red");
```

### transition.ease()

The *ease()* function is used to specify and control the motion of the transition. 

To see the types of easing functions, this [easing comparison example](https://bl.ocks.org/d3noob/1ea51d03775b9650e8dfd03474e202fe) is a great resource, but to see all of the easing functions, [check this github repository](https://github.com/d3/d3-ease).

### transition.delay()

The *delay()* function sets the delay parameter for each element in the selection on which the transition is applied. The transition starts after the delay value.

Here is an example where we animate two bars on their height with a linear ease. We start with the first bar and increase it's height from 20px to 100px. Next we animate the second bar the same way. But we will apply a delay of 2000ms of the second bar so that it is animated 2000ms after the first bar. Let's have a look:

```JS
var svg = d3.select("body")
        .append("svg")
        .attr("width", 500)
        .attr("height", 500);


    var bar1 = svg.append("rect")
        .attr("fill", "blue")
        .attr("x", 100)
        .attr("y", 20)
        .attr("height", 20)
        .attr("width", 10)

    var bar2 = svg.append("rect")
        .attr("fill", "blue")
        .attr("x", 120)
        .attr("y", 20)
        .attr("height", 20)
        .attr("width", 10)

    update();

function update() {
    bar1.transition()
        .ease(d3.easeLinear)
        .duration(2000)
        .attr("height",100)

    bar2.transition()
        .ease(d3.easeLinear)
        .duration(2000)
        .delay(2000)
        .attr("height",100)
}
```

*var bar1* and *var bar2* add rectangles to SVG. The first is placed at (100, 20) and the second at (120, 20). Both have a height of 20px and width of 10px.

In the update function, we animate the first bar by increasing it's height then give it a linear ease transition for the duration of 2000ms. Then we animate the second bar in the same way but with a 2000ms delay.

## Data binding

| Method     | Description                                                                              |
| ---------- | ---------------------------------------------------------------------------------------- |  
| *data()*   | Joins data to the selected elements.                                                     | 
| *enter()*  | Creates a selection with placeholder references for missing elements.                    | 
| *exit()*   | Removes nodes and adds them to the exit section which can be later removed from the DOM  | 
| *datum()*  | Injects data to the selected element without computing a join.                           | 

### data()

The *data()* function is used to join the specified array of data to the selected DOM elements and return the updated selection. It works with different types of data such as Arrays, CSV, TSV, JSON, and XML amongst others.

*data()* accepts two types of parameters, an array of values (number of object), or a function of data. 

```HTML
<body>
    <p>Learning D3</p>
    <script>

         var myData = ["Hello World!"];
     
         var p = d3.select("body")
                .selectAll("p")
                .data(myData)
                .text(function (d, i) {
                    return d;
                });
     
    </script>
</body>>
```

In the above example, we have a *<p>* tag which we want to change with our array *myData*. In terms of D3, we want to bind myData to the selected paragraph tag. This is how it works:

*d3.select("body")* selects the HTML body element.

*.selectAll("p")* returns the paragraph element.

*.data(myData)* binds the array 'myData' to the selection returned from the previous section. As our selection only has a single paragraph element, *the data()* function will bind the first value from the data array to the *<p>* element.

*.text(function(d, i) { return d; });* adds the data as text to each of our selected elements. Each array value is passed as the first argument *d* to text function. In this scenario, the existing text will be replaced with the first value of the array, 'Hello World'.

```HTML
<body>
    <p></p>
    <p></p>
    <p></p>
    <script>
        var myData = ["P1", "P2", "P3"];

        var p = d3.Select("body")
                .selectAll("p")
                .data(myData)
                .text(function(d, i) {
                    return d;
                });
    </script>
</body>
```

In the above example, each *<p>* tag would have an element of the *myData* array as the text of the paragraph.

Sometimes however, we don't know how many paragraph elements we have, hence we don't know how long the array should be. This can be dealt with by using the *enter()* method.

### enter()

The *enter()* method dynamically creates placeholder references corresponding to the number of data values. The output of *enter()* can be fed to *append()* method and *append()* will create DOM elements for which there are no corresponding DOM elements on the page.

```HTML
<body>
    <script>
        var data = [4, 1, 6, 2, 8, 9];
        var body = d3.select("body")
                    .selectAll("span")
                    .data(data)
                    .enter()
                    .append("span")
                    .text(function(d) { return d + " "; });
    </script>
</body>
```

In this example, we take a data array of *4*, *1*, *6*, *2*, *8*, and *9*. We want to create span tags which contain each of these numbers, without originally specifying the span tags. Here is how it works:

*d3.select("body")* selects the HTML body.

*.selectAll("span")* returns an empty array as there are no span elements to select.

*.data(data)* provides the array to the data function. As the array contains six elements, the code after this will run for every element in the array.

*.enter()* checks for *<span>* elements but, as it does not find any, it creates a new span for each element.

*.append("span")* appends the created spans to the body element.

*.text(function(d) { return d + " ";});* adds each of the numbers from the array as text to each of our span selections.

This can be useful in situations such as displaying a matrix with a two dimensional array in a way that is easy to visualize for users. Here is how it is done:

```HTML
<body>
    <script>
        var matrix = [
                        [1, 2, 3, 4],
                        [5, 6, 7, 8],
                        [9, 10, 11, 12],
                        [13, 14, 15, 16]
                    ];

        var tr = d3.select("body")
            .append("table")  // adds <table>
            .selectAll("tr")  // selects all <tr>
            .data(matrix)      // joins matrix array 
            .enter()           // create placeholders for each row in the array
            .append("tr");// create <tr> in each placeholder

        var td = tr.selectAll("td")
            .data(function (d) {    // joins inner array of each row
                console.log(d);
                return d;
            })
            .enter()    // create placeholders for each element in an inner array
            .append("td") // creates <td> in each placeholder
            .text(function (d) {
                console.log(d);
                return d; // add value of each inner array as a text in <td>
            });
    </script>
</body>
```

This example, when inside the *.data()* function, each inner array is logged seperately. When inside the *.text()* function however, each element of the inner array is logged seperately, allowing for use of each number on their own.

### exit()

While *enter()* is used to add new reference nodes, exit is used to remove one. With *exit()*, the elements enter an exit phase. This means that all exited elements are stored ready to be removed when the command is given.

```HTML
<body>
    <p>Example code</p>
    <p></p>
    <p></p>

    <script>
        var myData = ["Example code that works"];

        var p =   d3.select("body")
                    .selectAll("p")
                    .data(myData)
                    .text(function (d, i) {
                        return d;
                    })
                    .exit()
                    .remove();
    </script>
```

In this example, the HTML has three *<p>* tags but only one element in the array. Due to this, *.exit().remove()* removes the additional *<p>* elements.

### datum()

The *datum()* function is used for static visualization which does not need updates. It binds data directly to an element.

```HTML
<body>
    <p>Example</p>
    <script>
        d3.select("body")
          .select("p")
          .datum(100)
          .text(function(d, 1){
              return d;
          });
    </script>
</body>
```

## Data loading

In previous examples, we have used data stored in local variables. In this chapter, we will learn to load data from different types of files and bind it to DOM elements. D3 provides the following methods to load different types of data from external sources:

| Method    | Description                                                                                                                       |
| --------- | --------------------------------------------------------------------------------------------------------------------------------- |
| d3.csv()  | Sends http request to the specified url to load .csv file or data and executes callback function with parsed csv data objects.    |
| d3.json() | Sends http request to the specified url to load .json file or data and executes callback function with parsed json data objects.  |
| d3.tsv()  | Sends http request to the specified url to load a .tsv file or data and executes callback function with parsed tsv data objects.  |
| d3.xml()  | Sends http request to the specified url to load an .xml file or data and executes callback function with parsed xml data objects. |

### d3.csv()

The *d3.csv()* method allows us to load data from a CSV file. It has the following signature:

```JS
d3.csv(url[, row, callback]);
```

The first parameter is the url of the .csv file, webapi or webservice which will return CSV data. The second optional parameter is a conversion function which lets us change the representation. The third is a callback function which will be executed once the .csv file or data is loaded. It passes parsed data object as a parameter to a callback function.

This is how it works loading the following CSV data in a file called "employee.csv" found in a projects "data" folder.

**CSV File**
```CSV
Name, Age
John, 30
Jane, 32
```

**JavaScript**
```JS
d3.csv("/data/employees.csv", function(data) {
    for(var i = 0; i < data.length; i++) {
        console.log(data[i].Name);
        console.log(data[i].Age);
    }
});
```

In the abovce example, the *d3.csv()* method takes a file name as input, processes the file and loads the data into an array of objects. The first row of the CSV file is treated as column name and the rest of the rows are considered as data. The data object loaded by d3 uses the column names as the object's properties and hence are converted to object keys.

```JS
d3.csv("/data/employees.csv", function(data) {
    console.log(data);
});
```

This JS function is the same as doing this:

```JS
d3.csv("/data/employees.csv")
    .get(function(data) {
        console.log(data);
    })
```

You can use *d3.request()* instead of .csv like so:

```JS
d3.request("/data/employees.csv")
    .mimeType("text/csv")
    .response(function (xhr) { return d3.csvParse(xhr.responseText); })
    .get(function(data) {
        console.log(data);
    })
```

The row parameter can be used to convert the representation of the data, such as by changing names to upper case

```JS
d3.csv("/data/employees.csv")
    .row(function(d) {
        return {
            age: d.age;
            name: d.name.toUpperCase()
        };
    })
    .get(function(data) {
        console.log(data);
    })
```

### d3.json()

JSON data can be a single object, or an array of JSON objects. It works in a similar way to CSV. d3.json() takes a JSON file as input and converts it into an array of objects. It has a signature of:

```JS
d3.json(url, callback);
```

The first parameter is the url of a .json file and the second is a callback function. It passes a parsed data object as a parameter to the callback function. Here is an example where the JSON would be stored in a file called "users.json" in the data folder of the project. This is the JSON from the file:

```JSON
[{
    "name": "John",
    "age": 30,
    "city": "Edinburgh"
},
{
    "name": "Jane",
    "age": 20,
    "city": "Stirling"
}]
```

This data is then loaded like so:

```JS
d3.json("/data/users.json", function(data) {
    console.log(data);
})
```

When run you can see D3 creates an array of objects with name, city and age properties making it easy for us to work with the data.

### d3.tsv()

D3's tsv() method takes a .tsv file as an input url and returns a data object after parsing it. This is the signature of the *d3.tsv()* method:

```JS
d3.tsv(url, callback);
```

Here is an example TSV file which would be stored in the data folder as employees.tsv:

```TSV
Name    Age
John    30
Jane    20
```

This is how the tsv function is used. It would output the name and age of every employee in the TSV file.

```JS
d3.tsv("/data/employees.tsv", function(data) {
    for(var i=0; i < data.length; i++) {
        console.log(data[i].Name);
        console.log(data[i].Age);
    }
});
```

### d3.xml()

```JS
d3.xml(url, callback);
```

d3.xml() method takes a url of an xml file and returns an xml object. The following is an example of an employees.xml file.

```XML
<?xml version="1.0" encoding="UTF-8"?>
<root>
<row>
    <Name>John</Name>
    <Age>30</Age>
</row>
<row>
    <Name>Jane</Name>
    <Age>32</Age>
</row>
</root>
```

```JS
d3.xml("/data/employees.xml", function(data) {
    console.log(data);
});
```

You can parse and traverse the above XML as shown below:

```JS
d3.xml("/data/employees.xml", function(data) {
    console.log(xml.documentElement.getElementsByTagName("Name", ""));
});
```

This gives you all the tags with the tag name "Name".

### Bind loaded data

Once the data has been loaded, we have the data object available to work with. For this example, we will work with JSON data stored in a file named "users.json".

```JSON
[{
    "name": "John",
    "age": 30,
    "location": "Edinburgh"
},
{
    "name": "Callum",
    "age": 25,
    "location": "Glasgow"
},
{
    "name": "Julia",
    "age": 24,
    "location": "London"
},
{
    "name": "Tyrion",
    "age": 40,
    "location": "Kings Landing"
}]
```

It is an array of person objects containing a name, age and location. This is then loaded using the *d3.json()* method and binded with DOM elements.

```JS
d3.json("/data/users.json", function(error, data) {
    d3.select("body")
        .selectAll("p")
        .data(data)
        .enter()
        .append(p)
        .text(function(d) {
            return d.name + ", " + d.location;
        });
});
```

Let's run through the code.

**d3.json("/data/users.json", function(error, data) {})** - A file called *users.json* is loaded with *d3.json*. This then returns a formatted data object and an argument "error".

**d3.select("body")** - Once we have the data object, we want to output it to the page, so we select the body element first and passes it on using method chaining.

**.selectAll("p")** - In this example we are outputting in paragraph tags, but anything can be used. We need four <p> elements because this is the size of our data. D3 will look for paragraph tags on the page and sends the references to the next method in the chain, but we don't have any :'(.

**.data(data)** - passes the data values from our dataset to the next method in the chain.

**.enter()** - recieves the values from *data()* and as we don't have any references to paragraph elements, it returns empty placeholder references to the new elements.

**.append("p")** - adds paragraph elements to the DOM for our elements.

**.text(function(d) { return d.name + ", " + d.location; });** - Most D3 functions accept functions as parameters. In this scenario we use an anonymous function that returns a concatenation of name and location from our data object. *text()* is called and binds each concatenation to each of our paragraph elements.

### Error handling

While loading data from an external source, D3 returns an argument called "error". You can use this to check whether the data got loaded successfully.

```JS
d3.json("/data/users.json", function(error, data) {
    if(error) {
        return console.warn(error);
    }

    d3.select("body")
        .selectAll("p")
        .data(data)
        .enter()
        .append("p")
        .text(function(d) {
            return d.name + ", " + d.location;
        });
});
```

If there is an error while loading data, D3 will return the error object. The if statement allows for checking if there was an error and making a decision based on this.

## Create SVG elements

SVG or Scalable Vector Graphics provides different shapes like lines, rectangles, circles, ellipses... Hence designing visualizations with SVG gives you more flexibility and power in what you can achieve.

SVG is an image that is text-based. It has a similar structure to HTML and sits in the DOM. It's properties can be specified as attributes and should have absolute positions relative to the origin (0, 0).

The full SVG specifications can be found [here](https://www.w3.org/TR/SVG/).

Here is an example of a rectangle in SVG:

```HTML
<svg width="500" height="500">
    <rect x = "0" y="0" width="200" height="200"></rect>
</svg>
```

In the example above, we have an svg tag. Think of SVG as a canvas to paint on. You need to specify a height and width for your canvas. All of the SVG elements such as rect, line, circle, or text would go inside the svg tag.

Each SVG element has it's own properties, which includes both geometry and style properties. All properties can be set as attributes but it's better practice to provide geometry properties as attributes and style propperties as styles. And since SVG sits in the DOM, we can use *attr()* and *append()* just like for HTML elements.

### Line

An SVG line is represented by <line>. A line's attributes are:

*   x1: x coordinate of the first point.
*   y1: y coordinate of the first point.
*   x2: x coordinate of the second point.
*   y2: y coordinate of the second point.

```HTML
<svg width="500" height="500">
    <line x1="100" y1="50" x2="100" y2="50" stroke="black" />
</svg>
```

This applies x1, x2, y1 and y2 attributes to the line element along with a stroke attribute to specify the line colour.

This can also be done with D3 like so:

```HTML
<body>
<script>
    var width = 500;
    var height = 500;

    // Create SVG element
    var svg = d3.select("body")
        .append("svg")
        .attr("width", width)
        .attr("height", height);

    // Create line element inside SVG
    svg.append("line")
        .attr("x1", 100)
        .attr("x2", 500)
        .attr("y1", 50)
        .attr("y2", 50)
        .attr("stroke", "black")
</script>
</body>
```

Let's look at the code.

First we create variables for the SVG's height and width. It's good to have them in variables so they can be changed at one place without having to go through the entire code in case you choose to change the SVG's dimensions.

Next we select the body element and append out SVG element to it and set SVG's width and height. We store the reference of this SVG in a variable called svg so we can use it later.

Then we append a line element to our SVG and provide it with the x1, x2, y1, y2, and stroke attributes using the *attr()* function. By changing the Y coordinates between y1 and y2 we can create a slanted line, or a vertical line changing the X and Y coordinates.

### Rectangle

A rectangle is represented by the rect tag. It has the following attributes:

*   x: X coordinate of the top left corner of the rectangle.
*   y: Y coordinate of the top left corner of the rectangle.
*   width: width of the rectangle.
*   height: height of the rectangle.

Let's see an example SVG rectangle:

```HTML
<svg width="500" height="500">
    <rect x="0" y="0" width="200" height="200"></rect>
</svg>
```

This rectangle can also be drawn with the D3 library like so:

```HTML
<body>
<script>

    var width = 500;
    var height = 500;

    //Create SVG element
    var svg = d3.select("body")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

    //Create and append rectangle element
    svg.append("rect")
            .attr("x", 0)
            .attr("y", 0)
            .attr("width", 200)
            .attr("height", 100)

</script>
</body>
```

In the above example, after adding the SVG we append a rect element and specify it's x and y coordinates along with the width and height. The default colour is black, hence why this outputs a black rectangle.

### Circle

A circle is represented by the circle tag. It has the following attributes:

*   cx: x coordinate of the center of the circle.
*   cy: y coordinate of the center of the circle.
*   r: radius of the circle.

Let's see an example SVG circle:

```HTML
<svg width="500" height="500">
    <circle cx="250" cy="50" r="50"/>
</svg>
```

This circle can also be drawn with the D3 library like so:

```HTML
<body>
<script>

    var width = 500;
    var height = 500;

    //Create SVG element
    var svg = d3.select("body")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

    //Append circle 
    svg.append("circle")
       .attr("cx", 250)
       .attr("cy", 50)
       .attr("r", 50)

</script>
</body>
```

In this example, after adding the SVG we append a circle element and specify it's attributes. Same as the rectangle, it is black due to black being the default colour.

### Ellipse

An ellipse is represented by the ellipse tag. It has the following attributes:

*   cx: X coordinate of the center of the cirlce.
*   cy: Y coordinate of the center of the circle.
*   rx: X radius of the circle.
*   ry: Y radius of the circle.

```HTML
<svg width="500" height="500">
    <ellipse cx="250" cy="25" rx="100" ry="25"/>
</svg>
```

An ellipse can also be drawn with D3 like so:

```HTML
<body>
<script>

    var width = 500;
    var height = 500;

    var svg = d3.select("body")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

    svg.append("ellipse")
       .attr("cx", 250)
       .attr("cy", 50)
       .attr("rx", 150)
       .attr("ry", 50)

</script>
</body>
```

For an ellipse, we append an ellipse and, unlike the circle, we provide two radius, one for x and one for y.

### Text

SVG also allows for displaying text on the screen. This is done using the text element.

```HTML
<svg width="500" height="500">
    <text x="250" y="25">Your text here</text>
</svg>
```

Text can be added using D3. In this example, we will create an ellipse and write text on top of the ellipse.

```HTML
<body>
<script>

    var width = 500;
    var height = 500;

    //Create SVG element
    var svg = d3.select("body")
                .append("svg")
                .attr("width", width)
                .attr("height", height);
    
    //Create group element
    var g = svg.append("g")
               .attr("transform", function(d, i) {
                        return "translate(0,0)";
               });

    //Create and append ellipse element into group
    var ellipse = g.append("ellipse")
                   .attr("cx", 250)
                   .attr("cy", 50)
                   .attr("rx", 150)
                   .attr("ry", 50)
                   .append("text")

    //Create and append text element into group
    g.append("text")
     .attr("x", 150)
     .attr("y", 50)
     .attr("stroke", "#fff")
     .text("This is an ellipse!");

</script>
</body>
```

The ellipse used is the same as the one in the previous example, however, we introduce a group element here. The group element allows for grouping SVG elements together. In this scenario we are grouping the text element and the ellipse element together. 

The group element is helpful for applying transformations so that they are applied to all of the child elements of a group.

We have also added a stroke attribute to our text to change the colour to white and make it visible on the black ellipse.

### Styling SVG elements

In the above examples, we did not specify any colour, however, our elements were painted black. This is because black is the default SVG colour with no stroke.

| Style Attribute   | Description                                                                                                   |
| ----------------- | ------------------------------------------------------------------------------------------------------------- |
| Fill              | This is the fill color for your element. It can be color name, hex value, or RGB or RGBA values.              |
| stroke            | This is the stroke color. Like our line example above, we can specify a color for our element.                |
| stroke-width      | Stroke width specifies the width of our line or boundary. This is in pixels.                                  |
| opacity           | Opacity will specify an opacity/transparency number. 0 is completely transparent and 1 is completely opaque.  |
| font-family       | For text elements, we can specify the font-family. This works like CSS.                                       |
| font-size         | We can also specify the font-size for text elements.                                                          |

All of the above properties can be applied directly or by using css. 

Let's rewrite the ellipse example and add some more style properties to the ellipse and text elements:

```JS
var width = 500;
var height = 500;

var svg = d3.select("body")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

var g = svg.append("g")
            .attr("transform", function(d, i) {
                    return "translate(0,0)";
            });

var ellipse = g.append("ellipse")
                .attr("cx", 250)
                .attr("cy", 50)
                .attr("rx", 150)
                .attr("ry", 50)
                .attr("fill", "green")
                .attr("opacity", 0.5)

g.append("text")
    .attr("x", 140)
    .attr("y", 50)
    .attr("stroke", "steelblue")
    .attr("font-family", "sans-serif")
    .attr("font-size", "24px")
    .text("I am a pretty ellipse!");
```

The output of this is a semi opaque green ellipse with "I am a pretty ellipse" wrote on it in steelblue, a sans-serif font and font size 24px.

## Create SVG chart

## Scales

## Axes

## Bar chart

## Animated bar chart

## Pie chart

---

## Useful Links

The best resource I have found for D3 are:

* [D3 Examples](https://github.com/d3/d3/wiki/Gallery) - shows examples of what can be built with D3.

* [D3 Documentation](https://github.com/d3/d3/wiki) - documentation from D3 on how to use D3 in your project.

* [D3 API Documentation](https://github.com/d3/d3/blob/master/API.md) - documentation on how to use the D3 API

## Current examples in this repo
* Bar Chart
* Pie Chart
* Line Chart

### Bar Chart

Simple bar chart which displays a range of numbers set within the barchart.js file.

### Pie Chart

Simple pie chart which displays the market share of windows vs android vs iOS. This data is fictional.

### Line Chart

Simple line chart which uses the coindesk API to get request historical prices of the bitcoin, and displays them in an easy to understand graph.
