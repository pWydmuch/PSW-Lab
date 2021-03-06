<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="User details, account">
    <meta name="description" content="Site that displays account's details">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
  <!-- <script src="zad1.js"></script>  -->
    <title>Calculator</title>
    <style>
            canvas {
                border: 1px solid black;
                width: 560px;
                height: 360px;
              }
        section {
            margin-top: 60px;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
    <!-- {% comment %} <script src="zad4.js" defer></script> {% endcomment %} -->
</head>

<body>
<nav>
        <ul class="menu">
            <li><a href="./index.php">Cars</a></li>
            <li><a href="./body_styles.php">Car Body Styles</a>
                <ul>
                    <li><a href="./body_styles.html#Wagon">Wagon</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                    <li><a href="./body_styles.html#Sedan">Sedan</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="./engines.php">Engines</a>
                <ul>
                    <li><a href="#">Diesel</a></li>
                    <li><a href="#">Gasoline</a></li>
                    <li><a href="#">Hybrid</a></li>
                </ul>
            </li>
            <li><a href="./contact.php">Contact Us</a>
                <ul>
                    <li><a href="#">Tel</a></li>
                    <li><a href="#">Fax</a></li>
                    <li><a href="#">Mail</a></li>
                </ul>
            </li>
            <li><a href="./calc.php">Calc</a></li>
        </ul>
    </nav>
    <section class="">
        <script>
            document.writeln("Calculator")
        </script>
        <form id="count" action="calc.php" method="POST">
            <div>
                <p>Select math operation</p>
                <input type="radio" name="op" id="add" value="add" checked>
                <label for="add">Add</label>

                <input type="radio" name="op" id="sub" value="sub">
                <label for="sub">Substract</label>

                <input type="radio" name="op" id="mul" value="mul">
                <label for="mul">Multiply</label>

                <input type="radio" name="op" id="div" value="div">
                <label for="div">Divide</label>
            </div>

            <div>
                <label for="fnum">First number</label>
                <input type="text" name="fnum" id="fnum">
                <button id="fran">Draw first number</button>
            </div>
            <div>
                <label for="snum">Second number</label>
                <input type="text" name="snum" id="snum">
                <button id="sran">Draw second number</button>
            </div>
            <input type="submit" value="Count">

        </form>

        <button id="show">Show previous results</button>
        <div id="res">

        </div>

        <div id="prev"></div>
    </section>
    {% comment %} <canvas id="draw" width="560" height="360"></canvas>
    <div id="dom"></div>
    <button onclick="append()">Append paragraph</button>
    <button onclick="insert()">Insert paragraph</button>
    <button onclick="remove()">Remove paragraph</button>
    <button onclick="replace()">Replace paragraph</button> {% endcomment %}
<!-- 
    {% comment %} <script>
        let fnum
        let snum
        let result = 0
        const list =[]

        document.getElementById("fran").addEventListener("click", e => {
            e.preventDefault()
            document.getElementById("fnum").value = Math.floor(Math.random() * 100)
        })
        document.getElementById("sran").addEventListener("click", e => {
            e.preventDefault()
            document.getElementById("snum").value = Math.floor(Math.random() * 100)
        })
        document.getElementById("show").addEventListener("click", e => {
            e.preventDefault()
            let prev = document.getElementById("prev")
            const number = list.length
            let ile = prompt(`How many last numbers, max - ${list.length}`, 1)
            while( ile > 0 && list.length>0){
                prev.innerHTML+=`<p>${list.pop()}</p>`
                ile--
            }
            
        })

        document.getElementById("count").addEventListener("submit", e => {
            e.preventDefault()
            const op = document.querySelector('input[name="op"]:checked').value;
            fnum = document.getElementById("fnum").value;
            snum = document.getElementById("snum").value;
            switch (op) {
                case 'add':
                    add()
                    break
                case 'sub':
                    sub()
                    break
                case 'mul':
                    mul()
                    break
                case 'div':
                    div()
                    break
            }
            list.push(result)
            print()
        })

        function add() {

            if (isInt(fnum)){
                result = parseInt(fnum)
            }
            else {
                result = parseFloat(fnum)
            }
            if (isInt(snum)) {
                for (let i = 0; i < snum; i++) {
                    result += 1;
                }
            }
            else{
                result+=parseFloat(snum)
            }
        }

        function sub() {
            result = fnum - snum
        }

        function mul() {
            result = fnum * snum
        }

        function div() {
            if (snum == 0) {
                alert("You cannot divide by zero")
            } else {
                result = fnum / snum
            }

        }

        function isInt(n) {
            return  n % 1 === 0;
        }

        function print() {
            const res = document.getElementById("res");
            res.innerHTML = `<p>Result: ${result}</p>`

        }
    </script> {% endcomment %} -->
</body>

</html>     