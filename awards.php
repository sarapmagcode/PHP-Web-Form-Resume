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
        <title>Hobbies Page</title>
    </head>
    <body style="background-color: white;">
        <!-- Include base.php -->
        <?php include("base.php"); ?>

        <!-- Start of Awards Hero -->
        <div class="awards-hero">
            <h2><a href="index.php"><i class="uil uil-arrow-left"></i>Back</a></h2>
            <h1><?php echo $awards ?></h1>
        </div>
        <!-- End of Awards Hero -->
        
        <!-- Start of Awards Container -->
        <div class="awards-container">
            <?php 
                for ($i = 0; $i < count($award_names); $i++) {
                    ?>
                        <div class="awards-each">
                            <h1><i class="uil uil-award"></i><?php echo $award_names[$i]; ?></h1>
                            <img src="<?php echo $images[$i]; ?>" alt="award">
                        </div>
                    <?php
                }
            ?>
        </div>
        <!-- End of Awards Container -->
    </body>
</html>