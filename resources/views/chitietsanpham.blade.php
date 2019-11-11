<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

    @include('shop.script')
    
</head>

<body>

    <!-- Main-Header -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-static hidden-xs hidden-sm">
                        <ul>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <li>
                                <a href="#" title="nst135@gmail.com">thucpham304@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-login">
                        <ul>
                            <li>
                                <a href="login.html" title="đăng nhập"> Đăng nhập </a>
                            </li>
                            <li>
                                <a href="#" title="đăng kí"> Đăng kí </a>
                            </li>
                            <a href="cart.html">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('shop.header')
    </div>

    <!-- Breadcrumb background  -->
    <div class="bread-crumb-background">
        <div class="container-fluid">
            <div class="directional">
                <div class="container">
                    <h3> Trái cây việt </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="home.html"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="product.html"> Trái cây việt </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main product detail -->
    <div class="main-product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-detail" style="padding: 30px 30px;">
                        <img src="{{$cate->image}}" width="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-information">
                        <h2> {{$cate->name}} </h2>
                        <p> {{$cate->list_price}} VNĐ</p>
                        <p style="text-decoration:line-through;"> {{$cate->sell_price}} VNĐ</p>
                        <p> Nguồn gốc: Việt Nam </p>
                        <p> Khối lượng: 1kg/1hộp </p>
                        <p> {{$cate->short_desc}} </p>
                        <button type="submit" class="btn btn-info"> Cho vào giỏ hàng </button>
                        <p style="margin-top: 10px;"> Gọi đặt mua:
                            <span style="color: #80B435">0968 373 262</span> để nhanh chóng đặt hàng </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Thông tin sản phẩm </h2>
                    <p>{!!$cate->description!!}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Để lại nhận xét cho chúng tôi</h2>
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Họ tên
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Nội dung
                                    <span style="color: red">*</span>
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=""></textarea>
                            </div>
                            <button type="submit" style="margin-top: 30px; margin-bottom: 30px;" class="btn btn-info">
                                Gửi nhận xét </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 style="text-align: center; color: #306ac2;"> Sản phẩm liên quan </h2>
            <div class="row task-products">
                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="#">
                                <img src="image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="#">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="#">
                                <img src="image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="#">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="#">
                                <img src="image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="#">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="#">
                                <img src="image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="#">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="#">
                                <img src="image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="#">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer -->
    @include('shop.brand')

</html>