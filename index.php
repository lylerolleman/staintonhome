<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome Page</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/main_style.css">
        <style>
            #indeximage {
                max-width: 100%;
            }
            #title {
                font-size: 500%;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h1 id="title">Dream Home for Sale | 梦家出售</h1><br>
            <img id="indeximage" src="indeximage.jpg" alt="Side House with garage and apartment view" />
        
        </div>
        <hr>
        <div class="container-fluid">
            <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/navbar.php";
                include $path;
            ?>
            
        </div>
        <nav class="navbar navbar-default navbar-left">
            
                <ul class="nav navbar-nav">
                    <li><a id="main" href="/gallery/gallery.php">The Property</a></li>
                    <li><a id="entry" href="/gallery/gallery.php?target=entry">Entry Way</a></li>
                    <li><a id="kitchen" href="/gallery/gallery.php?target=kitchen">Kitchen</a></li>
                    <li><a id="greatroom" href="/gallery/gallery.php?target=greatroom">Living Room</a></li>
                    <li><a id="diningroom" href="/gallery/gallery.php?target=diningroom">Dining Room</a></li>
                    <li><a id="mastersuite" href="/gallery/gallery.php?target=mastersuite">Master Suite</a></li>
                    <li><a id="loft" href="/gallery/gallery.php?target=loft">Loft</a></li>
                    <li><a id="bedroomsuite" href="/gallery/gallery.php?target=bedroomsuite">Bedroom Suites</a></li>
                    <li><a id="exerciseroom" href="/gallery/gallery.php?target=exerciseroom">Exercise Room</a></li>
                    <li><a id="outside" href="/gallery/gallery.php?target=outside">Outside Property</a></li>
                    <li><a id="apartment" href="/gallery/gallery.php?target=apartment">Apartment</a></li>
                    <li><a id="timberframe" href="/gallery/gallery.php?target=timberframe">Timber Framing</a></li>
                </ul>
            
        </nav>
        <div class="container">
            <br>
            <p>Executive dream home located in exclusive Sherwood Hills Estates subdivision.  This stunning hand crafted timber frame home exudes warmth and beauty.  It is filled with high end finishing including an all granite gourmet kitchen; cumaru hardwood floors, air conditioning, beautiful raised loft, The living room has stunning rock wall fireplace framed by timbers and backing onto a large deck overlooking a beautiful backyard including a putting green, dry creek and expansive lawn enclosed by blue spruce and natural aspens.  The house features four bedrooms all with attached bathrooms.  The master has 2 walk-in California Closets, a full fireplace and five piece en-suite.  The walk out basement has 3 suites, in-floor heating, a large theatre room, storage room and wine cellar. The three-car garage is separated with one bay wired and finished as a fully equipped carpentry shop. The upper area contains an 800 sq. ft care-givers apartment.  </p>
            <p>行政梦想家园位于舍伍德的独家屋山细分。这个惊人的手工制作的木框架家散发着温暖和美丽。它充满了高端精加工包括所有的花岗岩美食厨房; cumaru硬木地板，空调，美提出的阁楼，伟大的房间拥有迷人的岩壁壁炉用的木材框架和备份到一个大平台，俯瞰美丽的后院包括果岭，干河和蓝云杉和自然白杨封闭广阔的草坪。房子有四个卧室都带连接浴室。主有2个步入式壁橱加州，一个完整的壁炉和五人套间。地下室出来步行有3套房，在地板采暖，大型影院室，储藏室和酒窖。三辆车的车库与有线和完成一个设备齐全的木工店一湾隔开。上部区域包含一个800平方英尺护理人员公寓。</p>
            <a href="gallery/gallery.php?target=entry" class="btn btn-primary">Explore | 探索</a>
            
        </div>
    </body>
</html>
