# Build an Image and Run It

Create a file named compute.js with the following code that computes and displays the area of a disk using javascript:

```js
var radius = 2.0;
var area = Math.pow(radius, 2) * Math.PI;
console.log(
    `Area of a ${radius} cm disk:
    ${area} cm²`
);
```

Create a Docker image that runs this code using the node:11-alpine image that contains Node.JS. The command that runs a JS program using Node.JS is node <filename>.