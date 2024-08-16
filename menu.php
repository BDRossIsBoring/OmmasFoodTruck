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
    <!-- Body -->
    <body id="background" class="grid_container">
        <!-- Header -->
        <header id="header" class="header">
            <div class="omma">
                <!-- 1st Attempt at responive images. I am finding that, for some reason, I don't need to do this for all of my images for this to work -->
                <img src="images/OmmasKitchenLogo.png" alt="A bowl of noodles with Text"
                    srcset="images/OmmasKitchenLogo302W.png 302w,
                        images/OmmasKitchenLogo.png 420w"
                    sizes="40vw"
                >

                <!-- <picture>
                    <img src='images/OmmasKitchenLogo.png'>
                    <source media='(max-width:305px)' srcset='images/OmmasKitchenLogo302W.png' >
                    <source media='(max-width:600px)' srcset='images/OmmasKitchenLogo.png'>
                </picture> -->
            </div>
            <div>
                <h1 id="truckName" class="truckname">
                    Omma's Kitchen
                </h1>
            </div>
                <!-- Top navigation -->
        </header>
        <nav class="nav">
            <div id="top-nav">
                <div id="top-nav-item1"><a href="index.php">Home</a></div>
                <div id="top-nav-item2"><a href="menu.php">Menu</a></div>
                <div id="top-nav-item3"><a href="contactus.php">Contact Us</a></div>
            </div>
        </nav>
        <main class="main">
            <!-- H2 Header -->
                <h2 id="h2header">Menu</h2>
                <h3 id="h3header">Happy Hours @ 4pm - 6pm</h3>

                <p class="w3-center">
                    We not only serve traditional Korean food, but also Korean street food as well as some Korean Chinese dishes. Most of the menu can be delivered. those that can't will be marked. We also have some dishes that would better consumed at the truck stop rather than delivered.
                </p>
                <!-- Container for Cards -->
                <div class="grid">
                    <!-- Plates Card -->
                    <div class="plates">
                        <img src="images/plates.png" alt="a place setting for a meal">
                        <div class="w3-container w3-center">
                            <p>Plates(Comes with a side of rice, kimchi and other standard banchan <small>sides</small>) </p>
                                <ul class="list">
                                        <li>Beef Bulgogi Platter <small>Maeun-sobulgogi</small> - Normal: $17.00; Spicy: $18.75</li>
                                        <li>Pepper Chicken <small>Yuringi</small> - $15.00</li>
                                        <li>Sweet and Sour Pork(or Beef) <small>Tangsuyuk</small> - $16.00</li>
                                        <li>Korean-Style Mapo Tofu <small>Mapadubu</small> - $15.50</li>
                                    </ul>
                        </div>
                    </div>
                    <!-- Noodles Card -->
                    <div class="noodles">
                        <img src="images/noodles.png" alt="bowl of cold, spicy noodles" >
                        <div class="w3-container w3-center">
                            <p>Noodles </p>
                                <ul>
                                    <li>Spicy Mixed Noodles <small>Bibim-guksu</small> - $12.00 </li>
                                    <li>Noodles with Blackbean Sauce <small>Jjajangmyeon</small> - 12.50</li>
                                    <li>Stir Fried Sweet Potato Noodles with Vegetables <small>Japchae</small> $10.00</li>
                                    <li>Cold Noodles in Chilled Broth <small>Mul-naengmyeon</small> - $12.75</li>
                                    <li>Cold, Spicy, Chewy Noodles <small>Bibim-naengmyeon</small> - $13.00</li>
                                    <li>Spicy Mixed Seafood Noodle Soup <small>Jjamppong</small> - $13.75</li>
                                </ul>

                        </div>
                    </div>
                    <!-- Appetizers Card -->
                    <div class="apps">
                        <img src="images/kimbap.png" alt="Korean kimbap" >
                        <div class="w3-container w3-center">
                            <p>Appetizers </p>
                                <ul>
                                    <li>Kimchi Korean Pancake <small>Kimchi jeon</small> - $2.00</li>
                                    <li>Corn Cheese - $3.00</li>
                                    <li>Fish Cakes <small>Eomuk</small> - $3.00</li>
                                    <li>Steam Mandu(Kimchi, Pork, BBQ, Shrimp and Asian Chive) -6 pack $10.00; 12 pack, $14.00</li>
                                </ul>

                        </div>
                    </div>
                    <!-- Beef Card -->
                    <div class="beef w3-center">
                        <img src="images/beef.png" alt=" a plate of korean beef">
                        <div class="w3-container w3-center">
                            <p>Beef </p>
                                <ul>
                                        <li>Spicy Soft Tofu Stew with Beef <small>Gogi Sundubu-jjigae</small> - $12.00</li>
                                        <li>Squash & Beef over Rice <small>Hobak-Sogogi-Deopbap</small> - $13.00</li>
                                        <li>Dumpling Soup <small>Mandu-guk</small> - $12.50</li>
                                        <li>Minced, Seasoned and Grilled Beef Ribs <small>Tteokgalbi</small> - $15.00</li>
                                    </ul>

                        </div>
                    </div>
                    <!-- Rice Card -->
                    <div class="rice w3-center" >
                        <img src="images/rice.png" alt="Several plates of rice dishes" >
                        <div class="w3-container w3-center">
                            <p>Rice Entrees </p>
                                <ul>
                                        <li>Omurice <small>Omeu-raiseu</small> - $12.00</li>
                                        <li>Rice with Red Beans <small>Patbap</small> - $13.00</li>
                                        <li>Sweet Pumpkin Rice(Seasonal-Winter) <small>Danhobakbap</small> - $15.00</li>
                                        <li>Kimchi Fired Rice <small>Kimchi-bokkeumbap</small> - $11.00</li>
                                    </ul>

                        </div>
                    </div>
                    <!-- Extra Card -->
                    <div class="extra">
                        <img
                        sizes="50vh"
                        srcset="
                            images/plates.png 600w,
                            images/plates300pxW.png 300w
                        "
                        alt="A bowl of kimchi"
                        >
                        <div class="w3-container w3-center">
                            <p>Extras </p>
                                <ul>
                                        <li>Extra Rice - Small: $2.00, Large: $3.00</li>
                                        <li>Gimbap - Bulgogi: $2.00; Inside-Out: $3.00 </li>
                                        <li>Sweetened Rice with Dried Fruits and Nuts(Seasonal-Winter) <small>Yaksik</small> - $4.00</li>
                                        <li>Sweet Pancakes with Brown Sugar Syrup Filling <small>Hotteoko</small> - 2 pack: $5.00</li>
                                    </ul>

                        </div>
                    </div>
                    <!-- Drinks Card -->
                    <div class="drinks">
                        <img src="images/drinks.png" alt="A bottle of Soju with a cup beside it. Another can is in the foreground." >
                        <div class="w3-container w3-center">
                            <p>Drinks </p>
                                <ul>
                                        <li>Yuja Tea <small>Yujacha</small> - Small: $1.29, Medium: $2.39, Large: $3.49</li>
                                        <li>Iced Coffee - $2.99</li>
                                        <li>Soju - 1 bottle: $3.99</li>
                                        <li>Soda - Small: $1.29, Medium: $2.39, Large: $3.49 </li>
                                    </ul>

                        </div>
                    </div>
                    <!-- Pork Card -->
                    <div class="pork">
                        <img src="Images/pork.png" alt="pork belly being grilled">

                        <div class ="w3-container w3-center">
                            <p>Pork </p>
                                <ul>
                                        <li>Spicy Stir-Fried Blood Sausage <small>Sundae-Bokkeum</small> - $12.00</li>
                                        <li>Spicy Stir-Fried Pork and Kimchi <small> Dwaeji-Kimchi Duruchigi</small> - $13.00</li>
                                        <li>Braised Pig's Trotters <small>Jokbal</small> - $15.00</li>
                                        <li>Spicy Pork Bulgogi BBQ <small>Dwaeji Bulgogi</small> - $12.00</li>
                                    </ul>

                        </div>
                    </div>
                    <!-- Soups Card -->
                    <div class="soup w3-center">
                        <picture>
                            <img src="images/soups.png" alt="A bowl of beef and veggies waiting for the broth. A hearty beef soup awaits in the future." >
                        </picture>
                        <div class ="w3-container w3-center">
                            <p>Soup </p>
                                <ul>
                                        <li>Beef Bone Broth <small>Sagol-gukmul </small> - $10.00</li>
                                        <li>Kimchi Soup <small>Kimchi-guk </small> - $11.00</li>
                                        <li>Ox-Bone Soup <small>Seolleongtang </small> - $13.75</li>
                                        <li>Cold Noodle Soup with Radish Water Kimchi <small>Dongchimi-guksu</small> - $12.99</li>
                                    </ul>

                        </div>
                    </div>
                </div>
        </main>
        <!-- Korean Flag -->
        <div id="symbol" class="flag"><figure><img src="images/South-Korea-flag.png"
        alt="south korean flag"
        sizes='10vw'
        srcset='images/South-Korea-flag135w.png, images/South-korean-flag'><figcaption id="symbol-item"><a  href="https://www.vecteezy.com/free-vector/korean-flag">Korean Flag Vectors by Vecteezy</a></figcaption></figure></div>
        <!-- Korean Symbol -->
        <div id="symbol2" class="pattern"><figure><img src="images/vecteezy_korean-pattern-with-figure_.png"  alt='south korean pattern' sizes='30vw' srcset='images/vecteezy_korean-pattern-with-figure_90w.png'><figcaption class="symbol-item"><a href="https://www.vecteezy.com/korean-pattern-with-figure">Korean Symbols by Vecteezy</a></figcaption></figure>
        </div>
        <!-- Footer -->
    <footer id="footer" class="footer">
        <!-- Bottom Navigation -->
        <div id="bottom-nav">
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
