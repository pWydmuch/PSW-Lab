<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cars, car body styles, wagon, hetchback, sedan ">
    <meta name="description" content="Short description of car body styles available, such as combi, hetchback, sedan etc">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cookie-style.php">
    <!-- <script src="zad3.js" defer></script> -->
    <!-- <script src="zad2.js" defer></script> -->
    <title>Car body styles</title>
    <!-- <style>
        body{
            background-color: <?php print($_COOKIE['back-col']);?>;
            color: <?php print($_COOKIE['color']);?>;    
            font-family: <?php print($_COOKIE['font-fam']);?>    
        }
    </style> -->
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
        </ul>
    </nav>



    <div class="sign">Top fixed</div>
    <main>
      
        <section id="body-styles-nav">
            <h3>Go to</h3>
            <ul>
                <li><a href="#Wagon">Wagon</a></li>
                <li><a href="#Sedan">Sedan</a></li>
                <li><a href="#Hatch-back">Hatch-back</a></li>
                <li><a href="#Cabriolet">Cabriolet</a></li>
            </ul>
        </section>
   
        <form name="additional" action="ustaw.php" method="POST">
            <label for="my-color">Background color:</label>
            <input id="my-color" type="color" name="back-color">
        
            <br>
            <label for="my-color-font">Font color:</label>
            <input id="my-color-font" type="color" name="color">
    
            <br>
            <label>Choose font family:
                <select class="font-fam" name="font-fam">
                    <option value="arial">Arial</option>
                    <option value="monospace">Monospace</option>
                    <option value="georgia">Georgia</option>
                </select>
            </label>
            <input type="submit">
        </form>
        <br>
        <!-- <button onclick="processLinks()">Paint links black</button>
        <button onclick="processImages()">Process images</button> -->
        <article>

            <h2>Cars are produced in many body styles</h2>
            <h3>For example in:</h3>
            <section id="styles-list">
                <ul>
                    <li>
                        <section id="Wagon">
                            <h4>Wagon</h4>
                            <figure>
                                <a href="https://en.wikipedia.org/wiki/Station_wagon" target="_blank">
                                    <img class="image1" src="img/combi.svg.png" alt="combi" width="300">
                                </a>
                                <figcaption>Wagon style</figcaption>
                            </figure>
                            <article>
                                <p>
                                    Mention station wagon and most of us think of our parents or National Lampoon’s
                                    Vacation. As tastes changed, Americans began to prefer smaller, more fuel efficient
                                    vehicles, or minivans and SUVs for families.
                                </p>
                                <p>
                                    Today, there aren’t many automakers who still make and market station wagons. It’s
                                    important to note, however, that modern-day station wagons have evolved quite a bit.
                                    You
                                    won’t be seeing any vinyl or wood siding here.
                                </p>
                                <p>
                                    Before you opt for a large SUV, consider that a station wagon probably has all of
                                    the
                                    amenities you need. Wagons have nearly everything a crossover has, including <mark>
                                        four-wheel
                                        drive</mark>, spacious interiors, advanced tech, and high performance and
                                    efficiency.
                                </p>
                            </article>
                            <aside>
                                <p>A few examples of combi cars</p>
                                <ol>
                                    <li>Audi A6 Avant</li>
                                    <li>Renault Clio Estate</li>
                                    <li>Mazda 6</li>
                                </ol>
                            </aside>
                        </section>
                    </li>
                    <li>
                        <section id="Sedan">
                            <h4>Sedan</h4>
                            <figure>
                                <a href="https://en.wikipedia.org/wiki/Sedan_(automobile)" target="_blank">
                                    <img class="image2" id='image2' src="img/sedan.svg.png" alt="sedan" width="300">
                                </a>
                                <figcaption>Sedan style</figcaption>
                            </figure>
                            <article>
                                <p>
                                    Let’s start with the basics. A sedan, also known as a saloon in other countries, is
                                    the most popular body style. It typically features two rows of seats, 4 doors, and a
                                    3-box configuration.
                                </p>
                                <p>
                                    Sedans tend to provide better fuel economy, affordability, handling, and
                                    performance. New drivers in particular favor the sedan over other body types for
                                    their<mark> safety and handling</mark>. If you are looking for a practical, commuter
                                    car with
                                    space for passengers, a sedan is the classic choice.
                                </p>
                                <p>
                                    Since they are closer to the ground and have a lower center of gravity, they tend to
                                    perform better around corners and sharp turns than larger vehicles such as SUVs. As
                                    a result, they are much less prone to tipping and rolling over than trucks and SUVs.
                                    With less weight and a lower center of gravity, it’s easier to move and better for
                                    the environment.
                                </p>
                            </article>
                            <aside>
                                <p>A few examples of Sedan cars</p>
                                <ol>
                                    <li>Chevrolet Aveo</li>
                                    <li>Citroën C-Elysée</li>
                                    <li>Fiat Tipo</li>
                                </ol>
                            </aside>
                        </section>
                    </li>
                    <li>
                        <section id="Hatch-back">
                            <h4>Hatch Back</h4>
                            <a href="https://en.wikipedia.org/wiki/Hatchback" target="_blank">
                                <img class="image3" src="img/hatch-back.svg.png" alt="hatch back" width="300">
                            </a>
                            <article>
                                <p>
                                    A hatchback is smaller than an SUV or minivan, but larger than a sedan. The main
                                    difference between a hatchback and a sedan is the extended trunk. Instead of the
                                    back
                                    sloping downwards, the back area is lifted, providing<mark>extra space for
                                        cargo.</mark>
                                </p>
                                <p>
                                    Typically, the hatchback has a top-hinged trunk with rear seats that fold down for
                                    even
                                    more cargo space. As a result, hatchbacks are usually marketed as small family cars
                                    or
                                    executive cars.
                                </p>
                                <p>
                                    Since the interior space can be made to prioritize passengers or cargo, they are a
                                    popular and practical choice for those who need both. From small city hatchbacks to
                                    large luxury models, there is a wide variety of hatchbacks available to you.
                                </p>
                            </article>

                            <aside>
                                <p>A few examples of Hatch-back cars</p>
                                <ol>
                                    <li>Holden Astra</li>
                                    <li>Kia Picanto</li>
                                    <li>Renault 16</li>
                                </ol>
                            </aside>
                        </section>

                    </li>
                    <li>
                        <section id="Cabriolet">
                            <h4>Cabriolet</h4>
                            <figure>
                                <a href="https://en.wikipedia.org/wiki/Convertible" target="_blank">
                                    <img class="image4" src="img/cabriolet.svg.png" alt="cabriolet" width="300">
                                </a>
                                <figcaption>Cabriolet style</figcaption>
                            </figure>
                            <article>
                                Cabriolet, originally a two-wheeled, doorless, hooded, one-horse carriage, first used in
                                18th-century France and often let out for hire. The name is thought to derive from
                                cabriole (French: “caper”) because of the vehicle’s<mark> light, bounding motion</mark>.
                                Later
                                cabriolets were built with four wheels. When used as hacks, cabriolets often had a jump
                                seat or a side seat for the driver. Later, the word cabriolet, shortened to “cab,” was
                                used for any carriage for hire, as a hackney cab.
                            </article>
                            <aside>
                                <p>A few examples of Hatch-back cars</p>
                                <ol>
                                    <li>Cadillac Eldorado Biarritz</li>
                                    <li>Mazda MX-5 / Miata</li>
                                    <li>Ford Model A</li>
                                </ol>
                            </aside>
                        </section>
                    </li>
                </ul>
            </section>
        </article>
    </main>
    <footer>All rights reserved &copy;</footer>

</body>

</html>