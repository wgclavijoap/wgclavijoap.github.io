<?php

$database = new mysqli("localhost", "root", "", "PAEplus");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}
