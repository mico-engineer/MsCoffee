
<?php
$action = $_POST['action'];
$name =$_POST['name'];
$mail =$_POST['mail'];
$tel =$_POST['phone'];
$message =$_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M's coffee</title>
    <link rel="stylesheet" type="text/css" href="./css/contact_pc.css">
    <link rel="stylesheet" type="text/css" href="./css/contact_sp.css">

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cardo:wght@700&family=Cutive+Mono&family=Domine&family=Playfair+Display&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <section id="container">
            <h2>CONTACT</h2>
            <div class="contact-wrapper">
                <div class="contact-comfirm">
                    <div class="formtitle">Name</div>
                        <?= $name?>
                    <div class="underline"></div>
                    <div class="formtitle">Email</div>
                        <?= $mail?>
                    <div class="underline"></div>
                    <div class="formtitle">Telephone</div>
                        <?= $tel?>
                    <div class="underline"></div>
                    <div class="formtitle message">Message</div>
                        <?= $message?>
                        <form action="./complete.php">
                        <div><input type="submit" class="submit" value="SEND TO US"></div>
                        </form>
                    
                </div>
            </div>
            <hr>
    </main>
    <footer>
        <div id="footer-logo">
            <a href="index.html"><img src="images/logo/footer-logo.png" alt="M's Coffee"></a>
        </div>

        <div id="SNS-link">
            <a class="btn facebook" href="https://www.facebook.com/">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a class="btn instagram" href="https://www.instagram.com/">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a class="btn twitter" href="https://twitter.com/">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
        </div>
        <p class="copy-right">© 2020 M's Coffee, all right reserved</p>
        </div>
        </section>
    </footer>
</body>
</html>