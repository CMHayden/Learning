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
