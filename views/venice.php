<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TravelBlog | Venice</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/venice.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');
    </style>
</head>

<body>
<!-- RESPONSIVE HEADER -->
<header>
    <div class='header'>
        <img src='../images/logo.png'>
        <a href='index.php' class='logo'>TravelBlog</a>
        <div class='header-right'>
            <?php if(isset($_SESSION['username'])){
                    echo " 
                        <a href='index.php'>Home</a>
                        <a href='about.php'>About</a>
                        <a class='active' href='roster.php'>Explore</a>
                        <a href='gallery.php'>Gallery</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='profile.php'>".$_SESSION['username']."'s Profile</a>
                        </div>";
                }
                else{
                    echo "
                        <a href='index.php'>Home</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='log-in.php'>LOG IN</a>
                        </div>";
                }
            ?>   
        </div>
    </div>         
</header>

<!-- VENICE COVER -->
<div id="venice-background">
    <div class="background-image-text">
        <h1>Venice, Italy</h1>
        <p>Experience the charm of <br> historic canals and art</p>
    </div>
</div>

<!-- SIDE LIST AND DATA -->
<div class="flex-container">
    <div class="venice-table-div">

        <table class="venice-table">
            <tr>
                <th colspan="2"><h2 style="text-align: center">Venice</h2></th>
            </tr>
        
            <tr>
                <td colspan="2"><img src="../images/flag_of_Venice.jpg"></td>
            </tr>
        
            <tr>
                <th>Country</th>
                <td>Italy</td>
            </tr>
        
            <tr>
                <th>Region</th>
                <td>Veneto</td>
            </tr>
        
            <tr>
                <th>Province</th>
                <td>Venice</td>
            </tr>
        
            <tr>
                <th>Mayor</th>
                <td>Luigi Brugnaro</td>
            </tr>
        
            <tr>
                <th>Area</th>
                <td>414.6 square kilometers</td>
            </tr>
        
            <tr>
                <th>Population</th>
                <td>Approximately 260,000</td>
            </tr>
        
            <tr>
                <th>Official Language</th>
                <td>Italian</td>
            </tr>
        
            <tr>
                <th>Other Languages</th>
                <td>Venetian, English</td>
            </tr>
        
            <tr>
                <th>Time Zone</th>
                <td>CET (UTC+1)</td>
            </tr>
        
            <tr>
                <th>Climate</th>
                <td>Mediterranean</td>
            </tr>
        
            <tr>
                <th>Major Industries</th>
                <td>Tourism, Glassmaking, Shipbuilding</td>
            </tr>
        
            <tr>
                <th>Currency</th>
                <td>Euro (EUR)</td>
            </tr>
        
            <tr>
                <th>Calling Code</th>
                <td>+39</td>
            </tr>
        </table> 
</div>

<!-- MONEY CONVERTER -->
<!-- <section class="container">
    <div class="flex-container">
        <div class="amount-converter">
            <h1 id="convert">Convert any currency to Euro</h1>
            <p>
                <label>Foreign Currency:</label>
                <input type="number" id="foreignCurrency" placeholder="Type amount to convert"
                       oninput="converter(this.value)" onchange="converter(this.value)">
            </p>
            <p>Euro(€): <span id="euro"></span></p>
        </div>
    </div>
</section> -->

<!-- MONEY CONVERTER (javascript)-->
<script>
    function converter(valNum) {
        // Assuming an exchange rate of 1.2 (replace with the actual exchange rate)
        var exchangeRate = 1.2;
        var euroAmount = valNum * exchangeRate;
        document.getElementById("euro").innerHTML = euroAmount.toFixed(2); // Displaying with two decimal places
    }
</script>

<!-- MAIN LIST AND DATA -->
    <div class="venice-text">

        <div id="text">
            <ol>
                <a href="#geography">
                    <li>Geography</li>
                </a>
                <ol>
                    <a href="#climate">
                        <li>Climate</li>
                    </a>
                </ol>
                <a href="#economy">
                    <li>Economy</li>
                </a>
                <ol>
                    <a href="#tourist">
                        <li>Tourism</li>
                    </a>
                    <a href="#visitors">
                        <li>Visitors</li>
                    </a>
                </ol>
                <a href="#demographics">
                    <li>Demographics</li>
                </a>

            </ol>

            <div class="venice-explore">
                <h4 id="geography">Geography</h4>
                <p>
                    <img src="../images/venice-geography.jpg" alt="venice geography">
                    Venice's geography is unique and captivating. Situated in northeastern Italy, it's renowned for being built on a group of 118 small islands separated by canals and connected by over 400 bridges. The city is located in the Venetian Lagoon, an enclosed bay that opens onto the Adriatic Sea.
                    <br><br>
                    Its geographical layout is unlike any other city in the world. The islands on which Venice is built are a series of marshy landmasses in the lagoon, originally settled by refugees fleeing invasions on mainland Italy during the decline of the Roman Empire.
                    <br><br>
                    The islands are linked by a network of canals, including the famous Grand Canal, the main thoroughfare, lined with magnificent palaces and bustling with activity. The absence of cars adds to the uniqueness of Venice; instead, transportation primarily relies on boats, including gondolas, vaporettos (water buses), and private water taxis navigating the picturesque waterways.
                    <br><br>
                    Venice's geographical vulnerability to flooding, known as acqua alta, is a significant concern. During high tides, particularly in autumn and winter, parts of the city can become inundated, prompting the need for measures such as the MOSE project—a series of barriers designed to protect the city from rising sea levels and high tides.
                    <br><br>
                    The city's location in the Venetian Lagoon and its architectural marvels, including St. Mark's Basilica and the Doge's Palace, make it an extraordinary destination, drawing millions of visitors each year to witness its stunning geography and rich history.
                </p>
            </div>                     

            <div class="venice-explore">
                <h5 id="climate">Climate</h5>
                <p>
                    Venice experiences a humid subtropical climate, characterized by mild winters and warm summers.
                    Being situated in northeastern Italy, the city enjoys a Mediterranean climate influenced by the Adriatic Sea.
                </p>
                <p>
                    Winters are generally cool and damp, with temperatures averaging around 3-8°C (37-46°F) in the coldest months
                    of December and January. Snowfall is rare, but frosty conditions can occur.
                </p>
                <p>
                    Summer, on the other hand, brings warm to hot temperatures, typically ranging from 23-29°C (73-84°F) during
                    the daytime, occasionally reaching higher temperatures in July and August. The warmest months often see
                    increased humidity, making the weather feel hotter than the recorded temperature.
                </p>
                <p>
                    Spring and autumn are transitional periods with moderate temperatures, making them pleasant times to visit
                    Venice. These seasons showcase milder weather with temperatures hovering around 15-20°C (59-68°F).
                </p>
                <p>
                    Precipitation in Venice is evenly distributed throughout the year, although autumn tends to have more
                    rainfall. The city experiences occasional thunderstorms, and fog can be quite common, especially during
                    late autumn and winter months.
                </p>
                <p>
                    The city's climate, with its mild winters and warm summers, contributes to Venice's appeal as a year-round
                    tourist destination, though the number of visitors typically peaks during the spring and summer months.
                </p>
            </div>
            
            <table class="venice-climate-table" cellspacing="3" cellpadding="3">
                <tr>
                    <th colspan="14" style="text-align: center">Climate data for Venice</th>
                </tr>
                <tr>
                    <th>Month</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                    <th>Year</th>
                </tr>
                <tr class="first-row">
                    <th>Average high <sup>o</sup>C</th>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td>12.0</td>
                    <td>16.0</td>
                    <td>21.0</td>
                    <td>25.0</td>
                    <td>28.0</td>
                    <td>27.0</td>
                    <td>23.0</td>
                    <td>17.0</td>
                    <td>11.0</td>
                    <td>8.0</td>
                    <td>17.0</td>
                </tr>
                <tr class="second-row">
                    <th>Daily Mean <sup>o</sup>C</th>
                    <td>3.0</td>
                    <td>4.0</td>
                    <td>8.0</td>
                    <td>12.0</td>
                    <td>17.0</td>
                    <td>21.0</td>
                    <td>24.0</td>
                    <td>23.0</td>
                    <td>19.0</td>
                    <td>13.0</td>
                    <td>7.0</td>
                    <td>4.0</td>
                    <td>13.0</td>
                </tr>
                <tr class="third-row">
                    <th>Average Low <sup>o</sup>C</th>
                    <td>0.0</td>
                    <td>1.0</td>
                    <td>4.0</td>
                    <td>8.0</td>
                    <td>13.0</td>
                    <td>17.0</td>
                    <td>20.0</td>
                    <td>20.0</td>
                    <td>16.0</td>
                    <td>10.0</td>
                    <td>4.0</td>
                    <td>1.0</td>
                    <td>9.0</td>
                </tr>
                <tr class="fourth-row">
                    <th>Average rainfall mm</th>
                    <td>35.0</td>
                    <td>29.0</td>
                    <td>40.0</td>
                    <td>62.0</td>
                    <td>67.0</td>
                    <td>67.0</td>
                    <td>60.0</td>
                    <td>73.0</td>
                    <td>67.0</td>
                    <td>68.0</td>
                    <td>68.0</td>
                    <td>46.0</td>
                    <td>632.0</td>
                </tr>
                <tr class="fifth-row">
                    <th>Average precipitation days (>1mm)</th>
                    <td>5</td>
                    <td>4</td>
                    <td>5</td>
                    <td>8</td>
                    <td>7</td>
                    <td>6</td>
                    <td>5</td>
                    <td>6</td>
                    <td>6</td>
                    <td>7</td>
                    <td>7</td>
                    <td>5</td>
                    <td>71</td>
                </tr>
                <tr class="sixth-row">
                    <th>Mean Monthly Sunshine Hours</th>
                    <td>72.0</td>
                    <td>93.0</td>
                    <td>140.0</td>
                    <td>171.0</td>
                    <td>225.0</td>
                    <td>258.0</td>
                    <td>291.0</td>
                    <td>250.0</td>
                    <td>195.0</td>
                    <td>127.0</td>
                    <td>71.0</td>
                    <td>58.0</td>
                    <td>1862.0</td>
                </tr>
            </table>            

            <div class="venice-explore">
                <h4 id="economy">Economy</h4>
                <p>
                    Historically, Venice was a major financial and maritime power during the Middle Ages and the
                    Renaissance. Today, the city's economy relies heavily on tourism, art, and craftsmanship. Venice is
                    known for its glasswork, particularly Murano glass, and traditional lacework. The city's economy also
                    thrives on industries such as shipbuilding, biotechnology, and naval technology.
                </p>
            </div>

            <div class="venice-explore">
                <h5 id="tourist">Tourism</h5>
                <p><img src="../images/venice-tourist.jpg" style="float: left">Venice stands as one of the globe's premier tourist destinations, magnetizing millions annually. Its allure lies in a tapestry woven from historic architecture, art, and vibrant culture. Travelers converge upon iconic landmarks such as St. Mark's Square, the Doge's Palace, and the majestic Grand Canal. Exploring the city's waterways aboard gondolas or water taxis offers an enchanting perspective on its beauty and history.
            
                However, beyond its famed structures, Venice is an art lover's haven. The Venice Biennale, an internationally renowned art exhibition, casts a magnetic pull on enthusiasts from across the world. This cultural extravaganza, held every two years, unveils avant-garde installations, contemporary artworks, and thought-provoking displays that transcend boundaries and captivate the imagination.
            
                Moreover, Venice's allure extends to its vibrant culinary scene. Delightful trattorias and quaint cafés tucked into narrow alleys offer authentic Venetian cuisine, inviting visitors to savor local delicacies and immerse themselves in the city's gastronomic treasures.
                <br><br>
                In essence, Venice's tourism narrative extends far beyond its architectural splendors; it's a vibrant tapestry woven with art, culture, culinary delights, and a captivating nocturnal allure that leaves an indelible mark on every visitor's heart.
                </p>
                <h6 id="visitors">Visitors</h6>
                <p><img src="../images/venice-visitors.jpg">
                    Visitors to Venice, Italy, compose a diverse tapestry of global travelers drawn by the city's unparalleled charm. Each year, millions flock to this enchanting labyrinth of canals and historic beauty, mesmerized by its timeless allure.
                    <br><br>
                    These visitors come from every corner of the world, bringing with them a kaleidoscope of cultures, languages, and perspectives. Some arrive seeking a romantic escapade, enchanted by the notion of gliding through Venetian waters on a gondola, embracing the city's fabled romanticism. Others come as art aficionados, lured by the prestigious Venice Biennale, a global stage for contemporary art that ignites creativity and sparks dialogues across boundaries.
                    <br><br>    
                    Adventurers and explorers revel in the city's winding alleys, stumbling upon hidden treasures tucked away in centuries-old buildings. Families create enduring memories, strolling along the cobblestone streets, indulging in gelato, and marveling at the grandeur of St. Mark's Basilica.
                </p>
            </div>

            <div class="venice-explore">
                <h4 id="demographics">Demographics</h4>
                <p>With a population hovering around 260,000 residents, Venice stands as a cultural mosaic adorned with diverse backgrounds and histories. The city's charm extends beyond its iconic canals and historic landmarks; it lies within the vibrant tapestry of its inhabitants.
                <br>
                Venetians, rooted in a rich cultural heritage, contribute to the city's unique identity. Italian serves as the primary language, echoing the nation's heritage and acting as the linguistic thread that binds this diverse populace together.
                </p>
                <br><br>
                <div class="flex-container-2">
                    <div class="flex-container-2-lists">
                        <b>Age Structure</b>
                        <dl>
                            <dt>0-14 years: 13%</dt>
                            <dd>- male 16,908/female 15,897</dd>
                            <dt>15-64 years: 71%</dt>
                            <dd>- male 88,180/female 85,265</dd>
                            <dt>65 years and over: 16%</dt>
                            <dd>- male 16,054/female 20,696</dd>
                        </dl>
                    </div>
                    <div class="flex-container-2-table">
                        <table class="venice-demographics-table">
                            <caption><u>Population Growth</u></caption>
                            <tr>
                                <th>Year</th>
                                <th>Population</th>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>271,073</td>
                            </tr>
                            <tr>
                                <td>2010</td>
                                <td>261,905</td>
                            </tr>
                            <tr>
                                <td>2020 est.</td>
                                <td>Approx. 260,000</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <table class="venice-demographics-table">
                    <caption><u>Largest Localities in Venice</u></caption>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Division</th>
                        <th>Population</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Venice (Venezia)</td>
                        <td>Venice</td>
                        <td>~260,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Murano</td>
                        <td>Venice</td>
                        <td>~5,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Burano</td>
                        <td>Venice</td>
                        <td>~2,800</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Lido di Venezia</td>
                        <td>Venice</td>
                        <td>~20,000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Chioggia</td>
                        <td>Venice</td>
                        <td>~50,000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mestre</td>
                        <td>Venice</td>
                        <td>~175,000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Cavallino-Treporti</td>
                        <td>Venice</td>
                        <td>~15,000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Sant'Erasmo</td>
                        <td>Venice</td>
                        <td>~700</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Quarto d'Altino</td>
                        <td>Venice</td>
                        <td>~8,000</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Pellestrina</td>
                        <td>Venice</td>
                        <td>~3,500</td>
                    </tr>
                </table>                
            </div>
        </div>
    </div>
</div>

<!-- SCROLL -->
<div id="scroll">&#9650;</div>
<script src="../javascript/scroll.js"></script>

<!-- FOOTER -->
<footer>
    <div class="icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
    </div>
    <br>
    <a href = "mailto: op67879@ubt-uni.net ">Contact us</a>
    <address>Travel Organization, Copyright &copy; 2023</address>
</footer>
</body>
</html>