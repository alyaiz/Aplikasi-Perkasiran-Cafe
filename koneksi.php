<?php

$conn = mysqli_connect('localhost', 'root', '', 'cafecash');

if (!$conn) {
    echo 'belum terhubung';
}
