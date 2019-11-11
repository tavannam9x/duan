@extends('layout2.main')
@section('content')
<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm sản phẩm</span>
		</div>
		<div class="actions">
			<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
			<i class="icon-cloud-upload"></i>
			</a>
			<a class="btn btn-circle btn-icon-only green" href="javascript:;">
			<i class="icon-wrench"></i>
			</a>
			<a class="btn btn-circle btn-icon-only red" href="javascript:;">
			<i class="icon-trash"></i>
			</a>
			<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
			</a>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('user.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon">
						<input type="text" name="name" value="" class="form-control">
						<label for="form_control_1">Tên tài khoản</label>
						<span class="help-block">Mời bạn nhập tên tài khoản</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon">
						<input type="file" name="image" value="" class="form-control">
						
						<span class="help-block">Mời bạn nhập ảnh đại diện</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="email" value="" class="form-control">
						<label for="form_control_1">Email</label>
						<span class="help-block">Mời bạn nhập email</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="phone_number" value="" class="form-control">
						<label for="form_control_1">Số điện thoại</label>
						<span class="help-block">Mời bạn nhập số điện thoại</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="password" value="" class="form-control">
						<label for="form_control_1">Mật khẩu</label>
						<span class="help-block">Mời bạn nhập mật khẩu</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="cf_password" value="" class="form-control">
						<label for="form_control_1">Nhập lại mật khẩu</label>
						<span class="help-block">Mời bạn nhập lại mật khẩu</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="address" value="" class="form-control">
						<label for="form_control_1">Địa chỉ</label>
						<span class="help-block">Mời bạn nhập địa chỉ</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Giới tính</label>
						<select name="gender" class="form-control">
							<option value="1">Nam</option>
							<option value="2">Nữ</option>
						</select>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Quyền</label>
						<select name="role" class="form-control">
							<option value="600">Editor</option>
							<option value="300">Shipper</option>
						</select>
						<i class="icon-user"></i>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('adminsuper')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection