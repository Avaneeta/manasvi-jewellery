<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(Type $var = null)
    {
       $title="Jewel";
       return view('base.pages.home.index', ['title'=>$title]);
    }
    public function about()
    {
       $title="About Us";
       return view('base.pages.about', ['title'=>$title]);
    }
    public function contact()
    {
       $title="Contact Us";
       return view('base.pages.contact', ['title'=>$title]);
    }
    public function shop()
    {
       $title="Shop";
       return view('base.pages.product.shop', ['title'=>$title]);
    }
    public function product_details()
    {
       $title="Product_details";
       return view('base.pages.product.product_details', ['title'=>$title]);
    }
    public function my_account()
    {
       $title="My_account";
       return view('base.pages.auth.my_account', ['title'=>$title]);
    }
    public function login()
    {
       $title="Login/Register";
       return view('base.pages.auth.login', ['title'=>$title]);
    }
    public function cart()
    {
       $title="Cart";
       return view('base.pages.cart', ['title'=>$title]);
    }
    public function Checkout()
    {
       $title="Checkout";
       return view('base.pages.checkout', ['title'=>$title]);
    }
    public function wishlist()
    {
       $title="Wishlist";
       return view('base.pages.wishlist', ['title'=>$title]);
    }
    public function compare()
    {
       $title="Compare";
       return view('base.pages.compare', ['title'=>$title]);
    }
    public function privacy()
    {
       $title="Privacy";
       return view('base.pages.privacy', ['title'=>$title]);
    }
    public function blog_list()
    {
       $title="Blog";
       return view('base.pages.blog_list', ['title'=>$title]);
    }
    public function blog_details()
    {
       $title="Blog Details";
       return view('base.pages.blog_details', ['title'=>$title]);
    }

}