<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="{{route('homeadmin')}}">
					<i class="icon-home"></i>
					<span class="title">Admin</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-cube"></i>
					<span class="title">Quản lý sản phẩm</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('home')}}">
							<i class="fa fa-cubes"></i>
							Danh sách sản phẩm</a>
						</li>
						<li>
							<a href="{{route('product.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm sản phẩm</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-group"></i>
					<span class="title">Quản lý tài khoản</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('adminsuper')}}">
							<i class="fa fa-home"></i>
							Danh sách tài khoản</a>
						</li>
						<li>
							<a href="{{route('user.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm sản phẩm</a>
						</li>
					</ul>
				</li>
				<!-- BEGIN ANGULARJS LINK 
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
					<a href="angularjs" target="_blank">
					<i class="icon-paper-plane"></i>
					<span class="title">
					AngularJS Version </span>
					</a>
				</li>
				END ANGULARJS LINK -->
				
				<li>
					<a href="javascript:;">
					<i class="fa fa-stumbleupon"></i>
					<span class="title">Quản lý slideshow</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homeslide')}}">
							<i class="fa fa-sliders"></i>
							Danh sách slideshow</a>
						</li>
						<li>
							<a href="{{route('homeslideimg')}}">
							<i class="fa fa-plus-square"></i>
							Ảnh slideshow</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Quản lý bài viết</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homepost')}}">
							<i class="fa fa-file"></i>
							Danh sách bài viết</a>
						</li>
						<li>
							<a href="{{route('post.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm bài viết</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Quản lý danh mục</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homehome')}}">
							<i class="fa fa-file"></i>
							Danh sách danh mục</a>
						</li>
						<li>
							<a href="{{route('category.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm danh mục</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Quản lý liên hệ</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homecontact')}}">
							<i class="fa fa-file"></i>
							Danh sách liên hệ</a>
						</li>
					</ul>
				</li>


				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Bình luận đánh giá</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homecommentbv')}}">
							<i class="fa fa-file"></i>
							Quản lý bình luận bài viết</a>
						</li>
						<li>
							<a href="{{route('homecommentpro')}}">
							<i class="fa fa-plus-square"></i>
							Quản lý đánh giá sản phẩm</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Quản lý sư kiện giảm giá</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homeevent')}}">
							<i class="fa fa-file"></i>
							Danh sách sự kiện</a>
						</li>
						<li>
							<a href="{{route('event.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm sự kiện</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->