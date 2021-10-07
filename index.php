<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://www.pngkey.com/png/full/2-23273_desktop-computer-png-file-desktop-computer-png.png" type="image/icon type">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="style.css">
        <title>Resume Web Form</title>
    </head>
    <body>
        <!-- Include base.php -->
        <?php include("base.php"); ?>

        <!-- Start of Container -->
        <div class="container">
            <div class="left">
                <img src="./images/photo.JPG" alt="profile">
            </div>
            <div class="right">
                <h1><?php echo $name; ?></h1>
                <i id="right-icon" class="uil uil-desktop"></i>
                <h2><?php echo $title; ?></h2>
                <p><?php echo $short_info; ?></p>
                <i id="right-icon" class="uil uil-crosshairs"></i>
                <h2><?php echo $goal; ?></h2>
                <ul>
                    <?php
                        for ($i = 0; $i < count($goals); $i++) {
                            echo "<li><i class=\"uil uil-step-forward\"></i>$goals[$i]</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <!-- End of Container -->

        <!-- Start of Menu-->
        <div class="menu">
            <?php
                for ($i = 0; $i < count($pages); $i++) {
                    ?>
                        <div class="<?php echo $pages[$i]; ?>" onclick="window.location='<?php echo $urls[$i]; ?>';">
                            <i class="<?php echo $choice_icons[$i]; ?>"></i>
                            <h3><?php echo $choice[$i]; ?></h3>
                        </div>
                    <?php
                }
            ?>
        </div>
        <!-- End of Menu -->
    </body>
</html>