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
                    <h3> Tin tức </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="home.html"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="blog.html"> Tin tức </a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="blog.html"> {{$cate->title}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main article detail -->
    <div class="main-article-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2> {{$cate->title}} </h2>
                    <div class="detail-content">
                        <div class="postby">
                            <span style="font-size: 12px;">
                                Đăng bởi
                                <b> {{$cate->author}} </b>
                                vào lúc
                                <b> {{$cate->date}}</b>
                            </span>
                        </div>
                        <p>{!!$cate->description!!}</p>
                    </div>
                    <h2> Viết bình luận của bạn </h2>
                    <div class="detail-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ tên">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung"></textarea>
                            </div>
                            <button type="submit" style="margin-bottom: 30px;" class="btn btn-info">
                                Gửi bình luận </button>
                        </form>
                    </div>
                    <h2> Bài viết liên quan </h2>
                    <div class="related-post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="related-post-img">
                                    <a href="chitietbaiviet.html">
                                        <img src="image/blog1.jpg" width="100%">
                                    </a>
                                </div>
                                <div class="related-post-title">
                                    <a href="#"> Tại sao bạn không nên uống nước ép đóng chai?
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="related-post-img">
                                    <a href="chitietbaiviet.html">
                                        <img src="image/blog2.jpg" width="100%">
                                    </a>
                                </div>
                                <div class="related-post-title">
                                    <a href="#"> Tại sao bạn không nên uống nước ép đóng chai? </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="related-post-img">
                                    <a href="chitietbaiviet.html">
                                        <img src="image/blog3.jpg" width="100%">
                                    </a>
                                </div>
                                <div class="related-post-title">
                                    <a href="#"> Tại sao bạn không nên uống nước ép đóng chai? </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="related-post-img">
                                    <a href="chitietbaiviet.html">
                                        <img src="image/blog1.jpg" width="100%">
                                    </a>
                                </div>
                                <div class="related-post-title">
                                    <a href="#"> Tại sao bạn không nên uống nước ép đóng chai? </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-right">
                        <h4> Danh mục tin </h4>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Tin mới hằng ngày </a>
                                </li>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Tin giá cả </a>
                                </li>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Mẹo vặt </a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Main footer -->
    @include('shop.brand')

</html>