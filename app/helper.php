<?php
use Illuminate\Support\Facades\Auth;
/**
 * Format price
 * @param float price
 * @param int decimal
 * @return string
 */
function price (float $price,int $decimal =2){
    return "N".number_format($price,$decimal);
}
function getUserId($request){
    return Auth::check() ? $request->session->get('users')['id'] : $request->cookie('larashop_session');
}