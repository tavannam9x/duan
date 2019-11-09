<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>


    <!-- Link cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Link Getbootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Slick -->
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick.css">
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick-theme.css">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../../../shop/plugins/style.css">

    <!-- Change number -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <!-- <script language="javascript">
        alert('Xin chào các bạn');
    </script> -->

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
                                <a href="#" title="đăng nhập"> Đăng nhập </a>
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

        <div class="header-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="home.html">
                        <img src="../../../shop/image/logo1.png" width="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="home.html">Trang chủ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="introduce.html">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($category_product as $pr)
                                    <a class="dropdown-item" href="{{$pr->id}}">{{$pr->name}}</a>
                                    <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Tin tức
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($category_post as $po)
                                    <a class="dropdown-item" href="blog.html">{{$po->name}}</a>
                                    <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Liên hệ</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
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
    <!-- Category products -->
    <div class="category-products">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="category-products-view">
                        <h2 style="margin-bottom: 20px;"> Trái cây việt </h2>
                       
                        <div class="row"> 
                            @foreach($model as $pr)
                            <div class="col-md-4">
                                <div class="detail-category-products">
                                    <div class="category-products-img">
                                        <a href="chitietsanpham.html">
                                            <img src="{{$pr->image}}" width="100%">
                                        </a>
                                    </div>
                                    <div class="overlay">
                                        <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                            <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="cart.html" class="icon two" title="Giỏ hàng">
                                            <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="category-products-information">
                                        <div class="category-products-name">
                                            <a href="chitietsanpham.html">
                                                <span style="display: inline-block; font-weight: bold;"> {{$pr->name}} </span>
                                            </a>
                                        </div>
                                        <div class="category-products-price">
                                            <span> {{$pr->price}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-products-menu">
                        <h2> Tìm kiếm sản phẩm </h2>
                        <div class="menu" style="border: 1px solid #ddd; margin: 0px; margin-bottom: 20px; height: 60px; padding: 10px 0px 20px 0px;">
                            <div class="col-md-12">
                            <form class="form-inline my-3 my-lg-0" style="padding-bottom: 20px;margin: auto; padding-left: 20px;">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="category-products-menu">
                        <h2> Danh mục </h2>
                        <div class="menu" style="border: 1px solid #ddd; margin: 0px; margin-bottom: 20px; height: 200px;">
                            <ul>
                                <li>
                                    <a href=" # "> Trang chủ </a>
                                </li>
                                <li>
                                    <a href="# "> Giới thiệu </a>
                                </li>
                                <li>
                                    <a href="# "> Sản phẩm
                                        <i class="fa fa-angle-down " aria-hidden="true "></i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="# "> Trái cây việt </a>
                                        </li>
                                        <li>
                                            <a href="# "> Trái cây nhập khẩu </a>
                                        </li>
                                        <li>
                                            <a href="# "> Rau củ quả </a>
                                        </li>
                                        <li>
                                            <a href="# "> Thực phẩm tươi sống </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="# "> Tin tức
                                        <i class="fa fa-angle-down " aria-hidden="true "></i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="# "> Tin mới hằng ngày </a>
                                        </li>
                                        <li>
                                            <a href="# "> Tin giá cả </a>
                                        </li>
                                        <li>
                                            <a href="# "> Mẹo vặt </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="# "> Liên hệ </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="category-products-filter">
                        <h2> Tìm theo mức giá </h2>
                        <div class="filter-price" style="border: 1px solid #ddd; margin-bottom: 20px;">
                            <ul>
                                <li>
                                    <a href="#"> Giá dưới 30.000đ </a>
                                </li>
                                <li>
                                    <a href="#"> 30.000đ - 70.000đ </a>
                                </li>
                                <li>
                                    <a href="#"> 70.000đ - 100.000đ </a>
                                </li>
                                <li>
                                    <a href="#"> Giá trên 100.000đ </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="category-products-highlight">
                        <img src="image/qc-sp.png" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Brands -->
    <div class="main-brands">
        <div class="container">
            <div class="title-brands">
                <h2 title="top thương hiệu"> Top thương hiệu </h2>
            </div>
            <div class="row task-brands">
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_1.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_2.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_3.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_4.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-footer-1">
                        <h2> Về chúng tôi </h2>
                        <div class="box-border"></div>
                        <div class="pulse">
                            <div class="box-footer-style">
                                <a href="home.html">
                                    <img src="image/logo1.png" width="200">
                                </a>
                            </div>
                            <p> Với cửa hàng phục vụ khách hàng một cách chân thành nhất và luôn mang lại cho khách hàng sự tin
                                cậy nhờ luôn thực hiện đúng các cam kết về chất lượng hàng hóa luôn tươi ngon, có nguồn gốc
                                rõ ràng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-2">
                        <h2> Giới thiệu </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="home.html">Trang chủ
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="introduce.html">Giới thiệu
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="product.html">Sản phẩm
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="blog.html">Tin tức
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="contact.html">Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-3">
                        <h2> Dịch vụ </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="home.html">Trang chủ
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="introduce.html">Giới thiệu
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="product.html">Sản phẩm
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="blog.html">Tin tức
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="contact.html">Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-4">
                        <h2> Thông tin liên hệ </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                                <a href="#"> 0968 373 262 </a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                <a href="#">thucpham304@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
                                <a href="#">257 Trần Cung - Hà Nội </a>
                            </li>
                            <li>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <img src="image/footer2.png" width="150">
                    </div>
                </div>
            </div>
        </div>
        <div class="end-bottom">
            <div class="container">
                © Bản quyền thuộc về
                <p> NST Fruits</p> | Cung cấp bởi NST Fruits
            </div>
        </div>
    </div>
</body>

<!-- Script Slick -->
<script src="../../../shop/plugins/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.task-products').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autospeed: 1,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
        $('.task-brands').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autospeed: 10,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
    });
</script>

</html>