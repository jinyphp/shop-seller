<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$shop_prefix = "shop";

Route::middleware(['web'])
->name("admin.shop")
->prefix("/admin/shop")->group(function () {

});