<html>

<head>
    <style>
        @keyframes btn {

            50% {
                background-color: blueviolet;
            }

            100% {
                background-color: purple;
            }

        }

        @keyframes child {
            50% {
                background-color: red;
            }

            100% {
                background-color: maroon;
            }
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .btn-dropdown {
            background-color: purple;
            color: white;
            padding: 10px;
            width: 100px;
            font-size: 20px;
            font-weight: bold;
            text-shadow: 2px black;
        }

        .btn-dropdown:hover {
            animation: btn;
            animation-duration: 500ms;
            animation-iteration-count: infinite;
        }


        .child {
            font-weight: bold;
            font-size: 20px;
            background-color: yellowgreen;
            color: white;
            padding: 20px;
            text-align: center;
            animation: child;
            animation-iteration-count: infinite;
            animation-duration: 500ms;
            display: none;
        }

        .dropdown:hover .child {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="dropdown">
        <button class="btn-dropdown">Menu</button>
        <a class="child" href="">Menu 1</a>
        <a class="child" href="">Menu 2</a>
        <a class="child" href="">Menu 3</a>
        <a class="child" href="">Menu 4</a>
        <a class="child" href="">Menu 5</a>
    </div>

    <script>
        function unique() {
            cek = 10;
            number = 1;
            a = 1
            b = 2
            c = 3
            d = 4
            e = 5
            f = 6
            g = 7
            h = 8
            i = 9
            j = 10
            power = [a, b, c, d, e, f, g, h, i, j]
            while (cek != 0) {
                cek = 10;
                number = Math.floor(Math.random() * 20) + 1;
                for (let z = 0; z < power.length; z++) {
                    console.log(number)
                    if (power[z] != number) {
                        cek = cek - 1;
                    }
                }
            }

            return number;
        }
    </script>
</body>

</html>