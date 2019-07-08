/*
*   To make an element (.container in this case) fade in on load we use this script.
*   First object in array indicates original position while the second indicates end position.
*
*   To modify the speed, change duration. Check documentations for other elements that can be added.
*/

var scene = new Scene({
    ".container": [
        {
            transform: "scale(.7)",
            opacity: 0
        },
        {
            transform: "scale(1)",
            opacity: 1
        }
    ]
},
{
    duration: 2,
    easing: Scene.EASE_IN_OUT,
    selector: true
}).playCSS();