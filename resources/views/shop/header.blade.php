
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
                            @if(Illuminate\Support\Facades\Auth::check())
                                {{ Illuminate\Support\Facades\Auth::user()->name }}
                                <li>
                                <a href="{{route('logoutUser')}}" title="đăng nhập"> Đăng xuất </a>
                                </li>
                                <li>
                                    <a href="dangki.html" title="đăng kí"> Đổi thông tin cá nhân </a>
                                </li>

                            @else 
                                <li>
                                <a href="login.html" title="đăng nhập"> Đăng nhập </a>
                                </li>
                                <li>
                                    <a href="dangki.html" title="đăng kí"> Đăng kí </a>
                                </li>
                            @endif
                           
                           
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
                    <a class="navbar-brand" href="{{route('trangchu')}}">
                        <img src="../../../shop/image/logo1.png" width="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('trangchu')}}">Trang chủ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('gioithieu')}}">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($category_product as $pr)
                                    <a class="dropdown-item" href="{{route('sanpham', ['id' => $pr->id])}}">{{$pr->name}}</a>
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
                                    <a class="dropdown-item" href="{{route('tintuc', ['id' => $po->id])}}">{{$po->name}}</a>
                                    <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('lienhe')}}">Liên hệ</a>
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