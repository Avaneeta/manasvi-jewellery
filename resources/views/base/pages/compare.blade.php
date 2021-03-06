@extends("base.layout.mainlayout")
@section("content")
<main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/shop') }}">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">compare</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- compare main wrapper start -->
        <div class="compare-page-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Compare Page Content Start -->
                            <div class="compare-page-content-wrap">
                                <div class="compare-table table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="first-column">Product</td>
                                                <td class="product-image-title">
                                                    <a href="{{ url('/product_details') }}" class="image">
                                                        <img class="img-fluid" src="{{asset('base\assets\images\product\product-1.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Daimond</a>
                                                    <a href="{{ url('/product_details') }}" class="title">Perfect Diamond Jewelry</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="{{ url('/product_details') }}" class="image">
                                                        <img class="img-fluid" src="{{asset('base\assets\images\product\product-2.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Gold</a>
                                                    <a href="{{ url('/product_details') }}" class="title">Handmade Golden Necklace</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="{{ url('/product_details') }}" class="image">
                                                        <img class="img-fluid" src="{{asset('base\assets\images\product\product-3.jpg')}}" alt="Compare Product">
                                                    </a>
                                                    <a href="#" class="category">Ring</a>
                                                    <a href="{{ url('/product_details') }}" class="title">Diamond Exclusive Ornament</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                                                        nulla, explicabo iste a rerum pariatur.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                                                        commodi obcaecati cumque consectetur alias incidunt?</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius,
                                                        facere. Fuga asperiores inventore iste tempora.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">Rs 29500</td>
                                                <td class="pro-price">Rs 27500</td>
                                                <td class="pro-price">Rs 39500</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Red</td>
                                                <td class="pro-color">Blue</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">Stock Out</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Add to cart</td>
                                                <td><a href="{{ url('/cart') }}" class="btn btn-sqr">Add to Cart</a></td>
                                                <td><a href="{{ url('/cart') }}" class="btn btn-sqr disabled">Add to Cart</a></td>
                                                <td><a href="{{ url('/cart') }}" class="btn btn-sqr">Add to Cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Rating</td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Remove</td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Compare Page Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- compare main wrapper end -->
    </main>

@stop