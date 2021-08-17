<?php include_once("partial/header.php") ?>
<?php include_once("partial/navbar.php") ?>
<?php
    if(isset($_GET["page"])){
        $pages = ["home", "laptop", "desktop", "accessory", "software"];
        if(in_array($_GET["page"], $pages)){
            include_once("pages/" . $_GET["page"] . ".php");
        }else{
            include_once("pages/error.php");
        }
    }
?>
<?php include_once("partial/footer.php") ?>