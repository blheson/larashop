<?php

use Illuminate\Support\Facades\Auth;

/**
 * Format price
 * @param float price
 * @param int decimal
 * @return string
 */
function price(float $price, int $decimal = 2)
{
    return "N" . number_format($price, $decimal);
}
function getUserId($request)
{
    return Auth::check() ? $request->session->get('users')['id'] : $request->cookie('larashop_session');
}
function getCartItems()
{
    return session('cart') ?? [];
}
function flashSession($check, $success, $error)
{
    if ($check)
        session()->flash('success', $success);
    else
        session()->flash('error', $error);
}
