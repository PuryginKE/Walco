<?php
switch($id){
    case 'shop': include 'shop.php'; break;
    case 'about': include 'about.php'; break;
    default: include 'content.php';
}
