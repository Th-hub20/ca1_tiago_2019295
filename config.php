<?php
$connection = new mysqli("localhost","root","","tiago_db");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}



