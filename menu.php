<?php
    require_once("header.php");

    if($SESSION["loggedin"]){

        //can be done with an sql command setting a boolean to true
        //could have field in table to represent if it was added in the last month
        if(NEW PRODUCTED ADDED TO DATABASE WITHIN LAST MONTH){
            echo "Our newest products.<br><br>";

            //list of products that meet criteria
            //scrolling menu or something to see them all
            //similar to amazon's implementation
        }

        //reset the boolean then set it to true for this statement as well (don't need two booleans here)
        //could have another field to represent if it was replenished within the last month
        if(PRODUCT WAS RESTOCKED FROM EMPTY WITHIN THE LAST MONTH && CURRENTLY IN STOCK){
            echo "Replenished stock.<br><br>";

            //same as above
        }
    }else{
        echo "Log in to access page.";

        //header function to call log in or sign up boxes

    }

?>
