/*
*   To make an element (#cta in this case) change size when clicked.
*   The numbered objects, represent the time in seconds from when clicked. 
*   The property for transformation can be done in this way or the same way as fadeIn.js
*
*   To modify the size, change scale. Speed, change the numbered objects.
*
*   To make it go in reverse order (ie to close a menu) use the commented out code below
*/


var cta = document.getElementById("cta");

var scene2 = new Scene({
    "#cta" : {
        0: {
            transform: {
                scale: 1
            }
        },
        .3: {
            transform: {
                scale: 1.5
            }
        },
        .5: {
            transform: {
                scale: 1
            }
        }
    }
},
{
    easing: Scene.EASE_IN_OUT,
    selector: true
})

cta.addEventListener('click', () => {
    scene2.playCSS()
})

// cta.addEventListener('click', () => {
//     if(scene2.getDirection() === 'normal') {
//         scene2.playCSS()
//         scene2.setDirection('reverse')
//     } else {
//         scene2.removeItem("#cta")
//         scene2.playCSS()
//         scene2.setDirection('normal')
//     }
//     scene2.playCSS()
// })