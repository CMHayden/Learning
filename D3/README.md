# D3: Data-Driven Documents

<a href="https://d3js.org"><img src="https://d3js.org/logo.svg" align="left" hspace="10" vspace="6"></a>

**D3** (or **D3.js**) stands for Data-Driven-Documents. It is an open-source JavaScript library created by Mike Bostock to create interactive data visualizations in the web browser using SVG, HTML and CSS.

With the massive amount of data being generated today, communicating this information is getting difficult. Visual representations of data are the most effective way of showing meaningful information and D3 provides a great deal of ease and flexibility to create these data visualizations. It is dynamic, intuitive and needs minimum amount of effort.

D3.js can be found [on github](https://github.com/d3/d3) or [on the D3 website](https://d3js.org).

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

You can directly download D3 [here]() and add it manually to your project.

### CDN

With the CDN you just need to copy and paste this script into your html

```html
<script src="https://d3js.org/d3.v5.min.js"></script>
```

---

# How To D3

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

## Function of data

## Event handling

## Animation

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

## Create SVG elements

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
