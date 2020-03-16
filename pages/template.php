<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('page-data/sharedheader.php'); ?>
    </head>
    <body>
        <?php include($page); ?>
        <?php include('page-data/sharedfooter.php'); ?>
        <?php 
            if (isset($js)) {
                echo $js;
            }
        ?>
    </body>
</html>