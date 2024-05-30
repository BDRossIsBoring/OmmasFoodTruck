<!-- Two empty arrays for dealing with the missing or empty fields -->
<?php
$errors = [];
$missing = [];
?>
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
    <body id="background">
        <!-- Header -->
        <header id="header">
            <div class="omma">
                <img src="images/OmmasKitchenLogo.png" alt="A bowl of noodles with Text" width = 420 height = 235 >
            </div>
            <div>
                <h1 id="truckName">
                    Omma's Kitchen
                </h1>
            </div>
                <!-- Top navigation -->
        </header>
        <nav>
            <div id="top-nav">
                <div id="top-nav-item1"><a href="index.php">Home</a></div>
                <div id="top-nav-item2"><a href="contactus.php">Contact Us</a></div>
                <div id="top-nav-item3"><a href="menu.php">Menu</a></div>
            </div>
        </nav>
        <main>
            <!-- header -->
                <h2 id="h2header">Contact Us</h2>
                <div>
                    Here at Omm's Food Truck, we are always interested in hearing of ways in which we could deliver better experiances and tastes. We would love to here what you have to say: Whether it's a suggestion for a new dish or a compliant about a too much spice, we want to hear from here. You can also make reservations here as well.
                </div>
                <!-- Conditional statement asking that if error or missing is true then the message should show.  The colon is alernative syntax for condentional statements-->
            <?php if ($errors || $missing): ?>
                <p class="warning">Please correct the missing item(s)</p>
            <?php endif;?>
<!-- Form using the post method so the url will stay the same. The action is so that  -->
                <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="w3-container" >
                <div class="form" style="width:500px" >
                    <!-- First Name -->
                        <div class="fname w3-row w3-section" >
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" id="fname" class="w3-input w3-round-large" placeholder = "John/Jane">
                        </div>
                    <!-- Last Name -->
                        <div class="w3-row w3-selection">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" id="lname" class="w3-input w3-round-large" placeholder ="Joe">
                        </div>
                    <!-- Email -->
                        <div class="email w3-row w3-section">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="email@gmail.com" class="w3-input w3-round-large">
                        </div>
                    <!-- Phone -->
                        <div class="phone w3-row w3-section">
                            <label for="phone">Phone:</label>
                            <input type="tel" name="phone" id = "phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="124-124-1234" class="w3-input w3-round-large">
                        </div>
                    <!-- Message Box -->
                        <div class="message w3-row w3-section">
                            <label for="message">Give us a Message:</label>
                            <textarea id="message" name="message" cols="30" rows="7" class="w3-input w3-round-medium"></textarea>
                        </div>
                    <!-- Reservation Selection Bar/Form with Submit Button -->
                        <div>

                        </div>
                </div>
            </form>
        </main>
        <!-- korean flag -->
        <div id="symbol"><figure><img src="images/South-Korea-flag.png" height =184 width= 270><figcaption id="symbol-item"><a  href="https://www.vecteezy.com/free-vector/korean-flag">Korean Flag Vectors by Vecteezy</a></figcaption></figure></div>
        <!-- Footer -->
    <footer id="footer">
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
