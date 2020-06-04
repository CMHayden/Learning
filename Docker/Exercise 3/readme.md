# Enable an Image to Be Parameterized

# Build an Image and Run It

Create a file named compute.js with the following code that computes and displays the area of a disk using javascript:

```js
var radius = process.env.diameter / 2;
var area = Math.pow(radius, 2) * Math.PI;
console.log(
    `Area of a ${radius} cm disk:
    ${area} cm²`
);
```

It’s a modified version of the code from the previous exercises. It expects a diameter environment variable to be available and displays the area of a disk for that given diameter. Create a Docker image that runs this code using the node:11-alpine image that contains Node.JS. Run two containers with different values for the diameter.