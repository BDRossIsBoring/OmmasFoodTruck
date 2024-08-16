<!-- Two empty arrays for dealing with the missing or empty fields -->
<?php
$errors = [];
$missing = [];
// conditional statement here
if (isset($_POST['submit'])) {
    $expected = ['fname', 'email', 'phone', 'message'];
    $required = ['fname', 'phone', 'time', 'party', 'date', 'message', 'email'];
    require './includes/process_mail.php';
}
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
    <body id="background" class="grid_container">
        <!-- Header -->
        <header id="header" class="header">
            <div class="omma">
                <img src="images/OmmasKitchenLogo.png" alt="A bowl of noodles with Text"
                srcset="images/OmmasKitchenLogo302W.png 302w,
                        images/OmmasKitchenLogo.png 420w"
                    sizes="40vw">
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
            <!-- header -->
                <h2 id="h2header">Contact Us</h2>
                <p class="w3-center">
                    Here at Omm's Food Truck, we are always interested in hearing of ways in which we could deliver better experiances and tastes. We would love to here what you have to say: Whether it's a suggestion for a new dish or a compliant about a too much spice, we want to hear from here. You can also make reservations here as well.
                </p>
                    <!-- Conditional statement asking that if error or missing is true then the message should show.  The colon is alernative syntax for condentional statements-->

<!-- Form using the post method so the url will stay the same. The action is so that  -->
                <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="w3-container"  >
                <div class="form"  >
                    <!-- Conditional statement asking that if error or missing is true then the message should show.  The colon is alernative syntax for condentional statements-->
                <?php if ($errors || $missing): ?>
                <p class="warning">Please correct the missing item(s)</p>
            <?php endif;?>
                    <!-- First Name -->
                        <div class="fname w3-row w3-section" >
                            <label for="fname">First Name:
                                <?php if ($missing && in_array('fname', $missing)): ?>
                                    <span class="warning">Please enter your first name.</span>
                                <?php endif;?>
                            </label>
                            <input type="text" name="fname" id="fname" class="w3-input w3-round-large" placeholder = "John/Jane">
                        </div>
                    <!-- Last Name -->
                        <div class="w3-row w3-selection">
                            <label for="lname">Last Name:
                                <?php if ($missing && in_array('lname', $missing)): ?>
                                    <span class="warning">Please enter your last name.</span>
                                <?php endif;?>
                            </label>
                            <input type="text" name="lname" id="lname" class="w3-input w3-round-large" placeholder ="Joe">
                        </div>
                    <!-- Email -->
                        <div class="email w3-row w3-section">
                            <label for="email">Email:
                                <?php if ($missing && in_array('email', $missing)): ?>
                                    <span class="warning">Please enter your email.</span>
                                <?php endif;?>
                            </label>
                            <input type="email" name="email" id="email" placeholder="email@gmail.com" class="w3-input w3-round-large">
                        </div>
                    <!-- Phone -->
                        <div class="phone w3-row w3-section">
                            <label for="phone">Phone:
                                <?php if ($missing && in_array('phone', $missing)): ?>
                                    <span class="warning">Please enter your phone number.</span>
                                <?php endif;?>
                            </label>
                            <input type="tel" name="phone" id = "phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="124-124-1234" class="w3-input w3-round-large">
                        </div>
                    <!-- Message Box -->
                        <div class="message w3-row w3-section">
                            <label for="message">Give us a Message:
                                <?php if ($missing && in_array('message', $missing)): ?>
                                    <span class="warning">Please enter your text in the message space.</span>
                                <?php endif;?>
                            </label>
                            <textarea id="message" name="message" cols="30" rows="7" class="w3-input w3-round-medium"></textarea>
                        </div>
                    <!-- Reservation Selection Bar/Form with Submit Button -->
                    <h2 id="h2header">Reservation</h2>
                        <div>
                            <div class="reservation" >
                                <div class="date">
                                    <label for="date">
                                    <?php if ($missing && in_array('date', $missing)): ?>
                                    <span class="warning">Please choose the date.</span>
                                <?php endif;?>
                                    </label>
                                    <input type="date" id="date" name="date">
                                </div>
                                <div class="time">
                                    <label for="time">
                                    <?php if ($missing && in_array('time', $missing)): ?>
                                    <span class="warning">Please enter your time</span>
                                <?php endif;?>
                                    </label>
                                        <input type="time" id="time" name="time" min="12:00" max="21:00">
                                        <span class="validity"></span>
                                </div>
                                <!-- People -->
                                <div class="party">
                                    <label for="party"><?php if ($missing && in_array('party', $missing)): ?>
                                    <span class="warning">Please enter your party</span>
                                    <?php endif;?>
                                </label>
                                        <select id="party" name="party">
                                            <option value="">Party Size </option>
                                            <option value="1 Person">1 Person</option>
                                            <option value="2 Persons">2 Persons</option>
                                            <option value="3 Persons">3 Persons</option>
                                            <option value="4 Persons ">4 Persons</option>
                                            <option value="5 Persons ">5 Persons</option>
                                            <option value="6 Persons ">6 Persons</option>
                                            <option value="7 Persons ">7 Persons</option>
                                            <option value="8 Persons ">8 Persons</option>
                                            <option value="9 Persons ">9 Persons</option>
                                            <option value="10 Persons ">10 Persons</option>
                                        </select>
                                </div>
                                <div>
                                    <input type="submit" id="submit" class="submit" name="submit" value="Lets' Eat!">
                                </div>
                            </div>
                        </div>
                </div>
            </form>
            <!-- This will echo/post the contents of the form -->
            <pre>
                <?php
if ($_POST) {
    echo 'Content of the Form:<br>';
    print_r($_POST);
}
?>
            </pre>
        </main>
        <!-- korean flag -->
        <div id="symbol" class="flag"><figure><img src="images/South-Korea-flag.png" alt="south korean flag"
        sizes='10vw'
        srcset='images/South-Korea-flag135w.png, images/South-korean-flag' ><figcaption class="symbol-item"><a  href="https://www.vecteezy.com/free-vector/korean-flag">Korean Flag Vectors by Vecteezy</a></figcaption></figure></div>
        <!-- korean symbol -->
        <div id="symbol2" class="pattern"><figure><img src="images/vecteezy_korean-pattern-with-figure_.png" alt='south korean pattern' sizes='30vw' srcset='images/vecteezy_korean-pattern-with-figure_90w.png' ><figcaption class="symbol-item"><a href="https://www.vecteezy.com/korean-pattern-with-figure">Korean Symbols by Vecteezy</a></figcaption></figure>

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
