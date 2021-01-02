<?php

session_start();
session_destroy();

echo "you logout will directly to home page";
header('REFRESH:3;URL=1.php');