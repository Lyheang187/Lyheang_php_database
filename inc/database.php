<?php
    function getDatabase(){
        return new mysqli("localhost", "root", "", "h_store");
    }
    // -----------LAPTOP-----------//
    function getLaptop(){
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '1'");
    }
?>