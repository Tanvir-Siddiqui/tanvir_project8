<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Ecommerce Batch-5||@yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/maind134.css?v=3.4">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/xzoom.css">

</head>

<body>
<!-- Modal -->
{{--<div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="deal" style="background-image: url('{{asset('/')}}website/assets/imgs/banner/menu-banner-7.png')">--}}
{{--                    <div class="deal-top">--}}
{{--                        <h2 class="text-brand">Deal of the Day</h2>--}}
{{--                        <h5>Limited quantities.</h5>--}}
{{--                    </div>--}}
{{--                    <div class="deal-content">--}}
{{--                        <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>--}}
{{--                        <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>--}}
{{--                    </div>--}}
{{--                    <div class="deal-bottom">--}}
{{--                        <p>Hurry Up! Offer End In:</p>--}}
{{--                        <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span></div>--}}
{{--                        <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Quick view -->
<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-2.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-1.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-3.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-4.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-5.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-6.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{asset('/')}}website/assets/imgs/shop/product-16-7.jpg" alt="product image">
                                </figure>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails pl-15 pr-15">
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                            </div>
                        </div>
                        <!-- End Gallery -->
                        <div class="social-icons single-share">
                            <ul class="text-grey-5 d-inline-block">
                                <li><strong class="mr-10">Share this:</strong></li>
                                <li class="social-facebook"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                <li class="social-twitter"> <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                <li class="social-instagram"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                <li class="social-linkedin"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info">
                            <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                            <div class="product-detail-rating">
                                <div class="pro-details-brand">
                                    <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                </div>
                                <div class="product-rate-cover text-end">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width:90%">
                                        </div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                </div>
                            </div>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <ins><span class="text-brand">$120.00</span></ins>
                                    <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                    <span class="save-price  font-md color3 ml-15">25% Off</span>
                                </div>
                            </div>
                            <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                            <div class="short-desc mb-30">
                                <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                            </div>

                            <div class="attr-detail attr-color mb-15">
                                <strong class="mr-10">Color</strong>
                                <ul class="list-filter color-filter">
                                    <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                    <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                    <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                    <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                    <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                    <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                    <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                </ul>
                            </div>
                            <div class="attr-detail attr-size">
                                <strong class="mr-10">Size</strong>
                                <ul class="list-filter size-filter font-small">
                                    <li><a href="#">S</a></li>
                                    <li class="active"><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="detail-extralink">
                                <div class="detail-qty border radius">
                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                    <span class="qty-val">1</span>
                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                </div>
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                </div>
                            </div>
                            <ul class="product-meta font-xs color-grey mt-50">
                                <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                            </ul>
                        </div>
                        <!-- Detail Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                            <li><i class="fi-rs-marker"></i><a  href="page-contact.html">Our location</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    @if(session('customer_id'))
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"><i class="fi-rs-world"></i>English<i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                    <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                </ul>
                            </li>
                            <li><i class="fi-rs-user"></i><a href="">Hello {{session('customer_name')}}</a></li>
                            <li><a href="{{route('customer.dashboard')}}">My Dashboard</a></li>
                            <li><a href="{{route('customer.logout')}}">Logout</a></li>
                        </ul>
                    </div>
                        @else
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"><i class="fi-rs-world"></i>English<i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li>
                                <li><i class="fi-rs-user"></i><a href="{{route('customer.login')}}">Login</a></li>
                                <li><i class="fi-rs-user"></i><a href="{{route('customer.register')}}">Register</a></li>
                            </ul>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Women's</option>
                                <option>Men's</option>
                                <option>Cellphones</option>
                                <option>Computer</option>
                                <option>Electronics</option>
                                <option> Accessories</option>
                                <option>Home & Garden</option>
                                <option>Luggage</option>
                                <option>Shoes</option>
                                <option>Mother & Kids</option>
                            </select>
                            <input type="text" placeholder="Search for items...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count blue">{{count(Cart::getContent())}}</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <h5 style="color: #088178">{{count(Cart::getContent())}} Items</h5>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-button">
                                            <a href="{{route('cart.show')}}" class="outline">View cart</a>
                                            <a href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                    <br>
                                    <ul>
                                        @php($sum=0)
                                        @foreach(Cart::getContent() as $cartItem)
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href=""><img alt="Evara" src="{{asset($cartItem->attributes->image)}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="">{{$cartItem->name}}</a></h4>
                                                <h4><span>{{$cartItem->quantity}} x </span>{{$cartItem->price}}</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="{{route('cart.remove',['id'=>$cartItem->id])}}"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                            @php($sum = $sum + ($cartItem->quantity * $cartItem->price))
                                        @endforeach
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>TK.{{$sum}}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                @foreach($categories as $category)
                                <li class="has-children">
                                    <a href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            @foreach($category->subCategories as $subCategory)
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('sub-category', ['id' => $subCategory->id])}}">{{$subCategory->name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li>
                                    <a class="" href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="page-about.html">About</a>
                                </li>
                                <li><a href="shop-grid-right.html">Shop <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                        <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                        <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                        <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                        <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                        <li><a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                            <ul class="level-menu">
                                                <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                                <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                                <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-filter.html">Shop – Filter</a></li>
                                        <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                        <li><a href="shop-cart.html">Shop – Cart</a></li>
                                        <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                        <li><a href="shop-compare.html">Shop – Compare</a></li>
                                    </ul>
                                </li>
                                <li class="position-static"><a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Women's Fashion</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Dresses</a></li>
                                                <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                                <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="shop-product-right.html">Wedding Dresses</a></li>
                                                <li><a href="shop-product-right.html">Prom Dresses</a></li>
                                                <li><a href="shop-product-right.html">Cosplay Costumes</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Men's Fashion</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Jackets</a></li>
                                                <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                                <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                                <li><a href="shop-product-right.html">Casual Pants</a></li>
                                                <li><a href="shop-product-right.html">Sweatpants</a></li>
                                                <li><a href="shop-product-right.html">Harem Pants</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Technology</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                                <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                                <li><a href="shop-product-right.html">Tablets</a></li>
                                                <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                                <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="shop-product-right.html"><img src="{{asset('/')}}website/assets/imgs/banner/menu-banner.jpg" alt="Evara"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="shop-product-right.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                        <li><a href="blog-category-list.html">Blog Category List</a></li>
                                        <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                        <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                        <li><a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                            <ul class="level-menu level-menu-modify">
                                                <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                                <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-contact.html">Contact</a></li>
                                        <li><a href="page-account.html">My Account</a></li>
                                        <li><a href="page-login-register.html">login/register</a></li>
                                        <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                        <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="page-terms.html">Terms of Service</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="shop-cart.html">
                                <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-3.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-4.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('body')
<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-email.svg" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>
                        <div class="col my-4 my-md-0 des">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid" style="background-color: #AECCC5" >
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>562 Wellington Road, Street 32, San Francisco
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('/')}}website/assets/imgs/theme/app-store.jpg" alt=""></a>
                                <a href="#" class="hover-up"><img src="{{asset('/')}}website/assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="{{asset('/')}}website/assets/imgs/theme/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2022, <strong class="text-brand">Evara</strong> - HTML Ecommerce Template </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="http://alithemes.com/" target="_blank">Alithemes.com</a>. All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <h5 class="mb-10">Now Loading</h5>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS-->
<script src="{{asset('/')}}website/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/slick.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/wow.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery-ui.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/magnific-popup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/select2.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/waypoints.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/counterup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.countdown.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/images-loaded.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/isotope.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/scrollup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.vticker-min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
{{--<script src="{{asset('/')}}website/assets/js/jquery.js"></script>--}}
<script src="{{asset('/')}}website/assets/js/maind134.js?v=3.4"></script>
<script src="{{asset('/')}}website/assets/js/shopd134.js?v=3.4"></script>
<script src="{{asset('/')}}website/assets/js/xzoom.min.js"></script>
<script src="{{asset('/')}}website/assets/js/setup.js"></script>


</body>

</html>
