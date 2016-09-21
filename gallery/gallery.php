<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Property</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/main_style.css">
        <script src="functions.js"></script>
        <script src="house-nav.js"></script>
        <script src="image-gallery-simple.js"></script>
        
        <style>
            #gallery {
                min-height: 150px;
                max-height: 150px;
                overflow-y: scroll;
            }
            #gallery-selection {
                height: 500px;
            }
            #gallery-selection p {
                text-align: center;
            }
            .gallery-image {
                max-height: 100px;
                padding: 15px;
                margin: auto;
                width: 90%;
            }
            .gallery-container {
                width: 150px;
                height: 150px;
                float: left;
            }
            .gallery-container p {
                font-size: 75%;
                font-weight: 400;
                text-align: center;
            }
            .gallery-container:hover {
                border: 1px;
                border-color: #ffd800;
                border-style: solid;
            }
            .selected-image {
                display: block;
                margin: auto;
                max-width: 90%;
                max-height: 90%
            }
            #address {
                text-align: center;
                font-size: 200%;
                font-weight: 700;
            }
            .entry,
            .kitchen, 
            .greatroom, 
            .diningroom, 
            .mastersuite,
            .loft,
            .bedroomsuite,
            .exerciseroom,
            .outside,
            .apartment,
            .timberframe {
                display: none;
            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/navbar.php";
                include $path;
            ?>        
        </div>
        <div class="container">
            <div id="gallery">
            
            </div><br>
            <div id="gallery-selection">
            
            </div>
        </div>
        <nav class="navbar navbar-default navbar-left">
            
                <ul class="nav navbar-nav">
                    <li><a id="main" href="#">The Property</a></li>
                    <li><a id="entry" href="#">Entry Way</a></li>
                    <li><a id="kitchen" href="#">Kitchen</a></li>
                    <li><a id="greatroom" href="#">Living Room</a></li>
                    <li><a id="diningroom" href="#">Dining Room</a></li>
                    <li><a id="mastersuite" href="#">Master Suite</a></li>
                    <li><a id="loft" href="#">Loft</a></li>
                    <li><a id="bedroomsuite" href="#">Bedroom Suites</a></li>
                    <li><a id="exerciseroom" href="#">Exercise Room</a></li>
                    <li><a id="outside" href="#">Outside Property</a></li>
                    <li><a id="apartment" href="#">Apartment</a></li>
                    <li><a id="timberframe" href="#">Timber Framing</a></li>
                </ul>
            
        </nav>
        <div class="container info main">
            <p id="address">51, 23033 Wye Road,<br>Sherwood Park, Alberta<br>Canada<br><br>$1,745,000</p><br>
            <p>Executive dream home located in exclusive Sherwood Hills Estates subdivision.  This stunning hand crafted timber frame home, enclosed with stone and Hardi board, exudes warmth and beauty.  It is filled with high end finishing including an all granite gourmet kitchen with Viking & Meile appliances; cumaru hardwood floors, AC, built in vacuum, beautiful raised loft for pool or music room, adjacent is the living room with stunning rock wall fireplace famed by timbers and backing onto a large deck overlooking a beautiful backyard including a putting green, dry creek and expansive lawn enclosed by blue spruce and natural aspens.  The house features four bedrooms all with attached bathrooms.  The master has 2 walk-in California Closets, a full fireplace and the five piece en-suite features a large steam shower.  The walk out basement has 3 suites, in-floor heating, a large theatre room, exercise room, storage room and wine cellar.  It opens onto the back yard and patios surrounding the back area.  The three-car garage is separated with one bay wired and finished as a fully equipped carpentry shop. The upper area contains an 800 sq. ft care- givers apartment.  </p>
            <h3>Features Include:</h3><br>
            <p>
                3434 plus lower floor sq. feet<br>
                0.67 acre lot<br>
                Geothermal in-floor lower floor heating<br>
                Heated 3 car garage<br><br>
                For a detailed virtual tour, select the rooms to the left for more specific information
            </p>
        </div>
        <div class="container info entry">
            <p>The main entrance to the house...</p>
        </div>
        <div class="container info kitchen">
            <p>The huge custom designed gourmet kitchen will meet all 
            your culinary needs with 2 Miele dishwashers, gas range, wall ovens 
            and a warming oven. </p>
            <p>Distilled cold water is available from both the sink and refridgerator, and 
            the counter tops are granite throughout, complete with immense island and sink, with 
            the main sink faces the tree belt at the back of the lot, so you can enjoy cooking and 
            a view.</p>
            <p>For the disposal of organic waste, the kitchen comes equipped with 2 industrial strength 3.5 hp garburators 
            that will dispose of it in no time. </p>
            <p>A walkthrough pantry services your food storage needs, along with a large storage room near the back entry</p>
        </div>
        <div class="container info greatroom">
            <p>Living room description...</p>
        </div>
        <div class="container info diningroom">
            <p>Dining room description...</p>
        </div>
        <div class="container info mastersuite">
            <p>The large main floor Master Suite has 2 walk in "California Closets" with adjacent laundry 
            and access to both patio and great room through french doors.</p>
            <p>The ensuite has granite and Grohe fixtures throughout, with double sinks, large steam shower 
            with multiple shower jets, jetted tub and beautiful Powder Room finished in limestone</p>
        </div>
        <div class="container info loft">
            <p>Loft description...</p>
        </div>
        <div class="container info bedroomsuite">
            <p>Bedroom suites' description...</p>
        </div>
        <div class="container info exerciseroom">
            <p>Exercise room descriptoin...</p>
        </div>
        <div class="container info outside">
            <p>Outdoors description...</p>
        </div>
        <div class="container info apartment">
            <p>Apartment description...</p>
        </div>
        <div class="container info timberframe">
            <p>Timber Frame description...</p>
        </div>
    </body>
</html>
