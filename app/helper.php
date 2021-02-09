<?php
/**
 * Format price
 * @param float price
 * @param int decimal
 * @return string
 */
function price (float $price,int $decimal =2){
    return "N".number_format($price,$decimal);
}
