
<?php

session_start();

if (!isset($_SESSION['zalogowany']))
{
    header('Location: loguj.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="User details, account">
    <meta name="description" content="Site that displays account's details">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
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
            <li><a href="./cookie.php">Cookie</a></li>
            <li><a href="./zmien.php">Change</a></li>
            <li><a href="./show-table.php">Table</a></li>
        </ul>
    </nav>
    <section>
        <h1 style="margin-top: 60px;">User details</h1>
        <?php echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';?>
        <form action="#" method="POST">
            <div class="form-elem">
                <label for="birth-month">Month of birth: </label>
                <input type="month" id="birth-month" name="birth-month">
            </div>
            <div class="form-elem">
                <label for="rate">Rate us: </label>
                <input type="range" value="100" id="rate" name="rate">

            </div>
            <div class="form-elem">
                <label for="search">Search you orders</label>
                <input type="search" id="search" name="search" placeholder="audi a4">    
            </div>
            <div class="form-elem">
                <label for="url">Url</label>
                <input type="url" id="url" name="url" placeholder="http://www.wikipedia.org/wiki/URL">
            </div>
            <div class="form-elem form-buttons">
                <input type="submit" value="Send">
                <input type="reset" value="Reset">
            </div>

            <input type="date">

        </form>
    </section>
    <footer>All rights reserved &copy;</footer>

</body>

</html>