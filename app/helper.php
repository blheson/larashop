<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/**
 * Format price
 * @param mixed price
 * @param int decimal
 * @return string
 */
function price($price, int $decimal = 2): string
{
    return "N" . number_format((float)$price, $decimal);
}
/**
 * Get the current user Id
 * @param Request $request
 * @return string
 */
function getUserId(Request $request): string
{
    return Auth::check() ? $request->session->get('users')['id'] : $request->cookie('larashop_session');
}
/**
 * Get cart items in sessions
 * @return array
 */
function getCartItems(): array
{
    return session('cart') ?? [];
}
/**
 * @param mixed $check
 * @param string $success
 * @param string $error
 * @return void
 */
function flashSession($check, $success, $error): void
{
    ($check)
        ? session()->flash('success', $success) :
        session()->flash('error', $error);
}
