<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Car search, car used shop ">
    <meta name="description" content="Site that enables to search cars">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>
    <title>Used car dealer</title>
    <link rel="stylesheet" href="cookie-style.php">
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
            <li><a href="./loguj.php">Log in</a></li>
            <li><a href="./cookie.php">Cookie</a></li>
            <li><a href="./rejestracja.php">Sign up</a></li>
        </ul>
    </nav>


    <div class="container">
        <div class="item it1">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel, amet eos minima maxime
                explicabo dignissimos hic itaque accusamus ipsa neque nemo dolorem consequuntur alias, blanditiis ut.
                Omnis ex, hic quia officia facere velit aut nesciunt tempora minima, nulla quae ab laborum architecto
                minus fuga! Velit nobis consequatur dolore repellat.
            </p>
        </div>
        <div class="item it2">
            <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel, amet eos minima maxime
                    explicabo dignissimos hic itaque accusamus ipsa neque nemo dolorem consequuntur alias, blanditiis ut.
                    Omnis ex, hic quia officia facere velit aut nesciunt tempora minima, nulla quae ab laborum architecto
                    minus fuga! Velit nobis consequatur dolore repellat.
            </p>
        </div>
        <div class="item it3">
            <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel, amet eos minima maxime
                    explicabo dignissimos hic itaque accusamus ipsa neque nemo dolorem consequuntur alias, blanditiis ut.
                    Omnis ex, hic quia officia facere velit aut nesciunt tempora minima, nulla quae ab laborum architecto
                    minus fuga! Velit nobis consequatur dolore repellat.
            </p>
        </div>
        <div class="item it4">
            <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel, amet eos minima maxime
                    explicabo dignissimos hic itaque accusamus ipsa neque nemo dolorem consequuntur alias, blanditiis ut.
                    Omnis ex, hic quia officia facere velit aut nesciunt tempora minima, nulla quae ab laborum architecto
                    minus fuga! Velit nobis consequatur dolore repellat.
            </p>
        </div>
    </div>

    <main>
        <h1>Cars</h1>
        <section>
            <h2>Search cars</h2>
            <form action="hello-php.php" method="POST">
                <p>Select <b>engine</b> type</p>
                <input type="radio" name="engine" id="diesel" value="diesel">
                <label for="diesel">Diesel</label>

                <input type="radio" name="engine" id="gasoline" value="gasoline">
                <label for="diesel">Gasoline</label>

                <input type="radio" name="engine" id="electric" value="electric">
                <label for="diesel">Electric</label>

                <p>Select additional equipment</p>
                <input type="checkbox" name="ABS" id="ABS" value="true">
                <label for="ABS">ABS</label>
                <input type="checkbox" name="AC" id="AC" value="true">
                <label for="AC">Air conditioning</label>
                <input type="checkbox" name="sunroof" id="sunroof" value="true">
                <label for="sunroof">Sunroof</label>

                <p>Select car brand</p>
                <select name="brand">
                    <optgroup label="Swedish Cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                    </optgroup>
                    <optgroup label="German Cars">
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                        <option value="volksvagen">Volksvagen</option>
                    </optgroup>
                </select>

                <input type="reset" value="Reset">
                <input type="submit" value="Search">
            </form>
        </section>
        <section class="comments">
            <h2>What people say about us</h2>
            <article>
                Best used car dealer in this town
            </article>
            <article>
                I have owned a car bought here for 10 years.
            </article>
        </section>
        <section>
            <h2>Downloads</h2>
            <a href="ftp://ftp.legis.state.tx.us/bills/832/billtext/html/house_resolutions/HR00001_HR00099/HR00014I.htm"
                download>
                Download Terms
            </a>
            <a href="https://dcassetcdn.com/design_img/6348/18475/18475_151725_6348_image.jpg" download>
                Download Our logo
            </a>
        </section>
    </main>
    <footer>All rights reserved &copy;</footer>
</body>

</html>