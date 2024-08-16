<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omma's Food Truck">
        <meta name="keywords" content="Korean Food Truck, Omma's Food Truck, Kibum's Food Truck, Traditional Korean Food">

        <!-- CSS links -->
        <link rel="stylesheet" type="text/css" href="CSS/styles.css">
        <link rel="stylesheet" type="text/css" href="CSS/w3.css">

        <!-- Javascript link -->
        <script src="scripts/scripts.js"></script>

        <title>Omma's Food Truck</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Farsan&family=Lumanosimo&family=Noto+Sans+Palmyrene&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>
    <!-- Body with grid_container class-->
    <body id="background" class="grid_container">
        <!-- Header with header class for grid-->
        <header id="header" class="header">
            <div class="omma">
                <img src="images/OmmasKitchenLogo.png" alt="A bowl of noodles with Text"
                srcset="images/OmmasKitchenLogo302W.png 302w,
                        images/OmmasKitchenLogo.png 420w"
                    sizes="40vw" >
            </div>
            <div>
                <h1 id="truckName" class="truckname">
                    Omma's Kitchen
                </h1>
            </div>
                <!-- Top navigation -->
        </header>
        <!-- add class of nav for grid -->
        <nav class="nav">
            <div id="top-nav">
                <div id="top-nav-item1"><a href="index.php">Home</a></div>
                <div id="top-nav-item2"><a href="menu.php">Menu</a></div>
                <div id="top-nav-item3"><a href="contactus.php">Contact Us</a></div>
            </div>
        </nav>
        <!-- added class of main for grid -->
        <main class="main">
                <h2 id="h2header">Welcome!</h2>
                <p class="w3-center">
                    Do you remember the feeling of your mom's kitchen? The everlasting warmth? Hectic school morning with rushing or no breakfast except a small snack. Or how about baking warm treats in the oven during winter. That warmth is what we, here at Omma's Food Truck, hope to bring to you. With traditional recipes, a bright smile and a big bowl. We hope to give  A little taste from Mom and a reminder for you to call home.
                </p>
        </main>
        <!-- korean symbol -->
        <!-- might need use grid for this so I added a class for both -->
        <div id="symbol" class="flag"><figure><img src="images/South-Korea-flag.png"
        alt="south korean flag"
        sizes='10vw'
        srcset='images/South-Korea-flag135w.png, images/South-korean-flag'><figcaption class="symbol-item"><a  href="https://www.vecteezy.com/free-vector/korean-flag">Korean Flag Vectors by Vecteezy</a></figcaption></figure></div>

        <!-- korean symbol -->
        <div id="symbol2" class="pattern"><figure><img src="images/vecteezy_korean-pattern-with-figure_.png" alt='south korean pattern' sizes='30vw' srcset='images/vecteezy_korean-pattern-with-figure_90w.png'><figcaption class="symbol-item"><a href="https://www.vecteezy.com/korean-pattern-with-figure">Korean Symbols by Vecteezy</a></figcaption></figure></div>

        <!-- Footer -->
        <!-- I will being using grid on the entire footer -->
    <footer id="footer" class="footer">
        <!-- Bottom Navigation -->
        <div id="bottom-nav" >
            <div id="bottom-nav1"><a href="index.php">Home</a></div>
            <div id="bottom-nav2"><a href="menu.php">Menu</a></div>
            <div id="bottom-nav3"><a href="contactus.php">Contact Us</a></div>
        </div>
        <!-- Copyright -->
        <div id="copyright">
            &copy; Designed and Created By Belita Ross 2024-2025.
        </div>
    </footer>
    </body>
</html>
