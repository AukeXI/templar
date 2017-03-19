<?php
// Written by Auke Scheepstra
// Basic showcase with nav, footer and shop
$title = 'Shop | Templar Demo';
$pagetype = 'shop';
include 'header.php';
include 'nav.php';
echo '<div id="shop">';
include 'shop-grid.php';
echo '</div>';
include 'footer.php'?>