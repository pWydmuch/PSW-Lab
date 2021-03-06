<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Sign up">
    <meta name="description" content="Site that enables to sign up">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="zad5.js" defer></script> -->
    <!-- <script src="zad2.js" defer></script> -->
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
        </ul>
    </nav>
    
    <a href="./user_details.html">Already have an account?</a>

    <section>
        <h1>Create account</h1>
        <!-- on is default -->
        <form name="additional" action="sign.php" method="POST" autocomplete="on">
            <div class="form-elem">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name">
                <label for="first-name">np. Jan</label>
            </div>
            <div class="form-elem">
                <label for="last-name">Last Name: </label>
                <input type="text" id="last-name" name="last-name">
                <label for="last-name">np. Kowalski</label>
            </div>
            <div class="form-elem">
                <label for="month">Month: </label>
                <input list="months" id="month" name="month">
                <datalist id="months">
                    <option value="January">
                    <option value="February">
                    <option value="March">
                    <option value="April">
                    <option value="May">
                    <option value="June">
                    <option value="July">
                    <option value="August">
                    <option value="September">
                    <option value="October">
                    <option value="November">
                    <option value="December">
                </datalist>
                <label for="month">np. January</label>
            </div>
            <div class="form-elem">
                <label for="mail">Mail: </label>
                <input type="email" name='email' id="mail" name="mail">
                <label for="mail">np. jan@kowalski.pl</label>
            </div>
            <div class="form-elem">
                <label for="tel">Tel: </label>
                <input type="tel" id="tel" name="tel"  title="You are allowed to enter numbers only. 
                You must enter 9 numbers, spaces after three numbers are required">
                <label for="tel">np. (+48) 123 456 789</label>
            </div>
            <div class="form-elem form-buttons">
                <input type="submit" value="Send">
                <input type="reset" value="Reset">
            </div>


        </form>
        <button onclick="processForms()">Add placeholder</button>
        <p id="helpText"></p>
    </section>
    <footer>All rights reserved &copy;</footer>

</body>

</html>