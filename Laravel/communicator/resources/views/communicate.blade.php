<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                height: 100vh;
                background: #bfd1d9;
                display: -ms-grid;
                display: grid;
                justify-items: center;
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;
                font-family: 'Nunito', sans-serif;
            }

            .container {
                background: white;
                width: 50%;
                padding: 2em;
                border-radius: 10px;
                height: 5%;
                margin: 25px;
            }

            .container h1 {
                margin: 0;
                text-align: center;
                cursor: pointer;
            }

            .container .form {
                display: none;
            }

            .item {
                margin: 2em 0;
                display: -ms-grid;
                display: grid;
                -ms-grid-columns: 95% auto;
                    grid-template-columns: 95% auto;
            }

            .item a {
                text-decoration: none;
                color: #008bf5;
            }

            .item .description p {
                margin: 0;
            }

            input[type="text"],
            input[type="email"],
            input[type="number"],
            textarea {
                background: #bfd1d9;
                border: none;
                font-size: 16px;
                height: auto;
                margin: 0;
                outline: 0;
                padding: 15px;
                width: 100%;
                background-color: #bfd1d9;
                color: black;
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
                margin-bottom: 30px;
                resize: vertical;
            }

            button {
                padding: 19px 39px 18px 39px;
                color: black;
                background-color: #bfd1d9;
                font-size: 18px;
                text-align: center;
                font-style: normal;
                border-radius: 5px;
                width: 100%;
                border-width: 1px 1px 3px;
                box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
                margin-bottom: 10px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <h1 id="cta">Communicate</h1>

            <form action="/" method="POST">
                <div class="form">
                    <div class="item">
                        <div class="description">
                            <p>Name</p>
                            <input name="name" type="text">
                        </div>
                    </div>

                    <div class="item">
                        <div class="description">
                            <p>Email</p>
                            <input name="email" type="email">
                        </div>
                    </div>

                    <div class="item">
                        <div class="description">
                            <p>Phone number</p>
                            <input name="number" type="number">
                        </div>
                    </div>

                    <div class="item">
                        <div class="description">
                            <p>Message</p>
                            <textarea name="message" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>

        <script src="//daybrush.com/scenejs/release/latest/dist/scene.min.js"></script>

        <script>
            var cta = document.getElementById("cta");
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
            var scene2 = new Scene({
                //Makes the container increase in height from 5% to 60%.
                ".container":{
                    .4: {
                        transform: "scale(1)",
                        height: '5%',
                        opacity: 1
                    },
                    .7: {
                        height: '100%',
                    }
                },
                //Fades in the info text
                ".form": {
                    .7: {
                        display: 'block',
                        opacity: '0'
                    },
                    1.5: {
                        opacity: '1'
                    }
                },
                // Fades in the item blocks one by one
                ".item" : function(i) {
                    return {
                        0: {
                            opacity: '0'
                        },
                        .5: {
                            opacity: '1'
                        },
                        options: {
                            delay: i * .5
                        }
                    }
                }
            },
            {
                easing: Scene.EASE_IN_OUT,
                selector: true
            })
            cta.addEventListener('click', () => {
                if(scene2.getDirection() === 'normal') {
                    scene2.playCSS()
                    scene2.setDirection('reverse')
                } else {
                    scene2.playCSS()
                    scene2.setDirection('normal')
                }
                scene2.playCSS()
            })
        </script>
    </body>
</html>
