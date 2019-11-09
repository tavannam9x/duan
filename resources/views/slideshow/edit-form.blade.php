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
		<form action="{{route('slideshow.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon">
						<input type="text" name="Name" value="{{old('Name', $model->Name)}}" class="form-control">
						<label for="form_control_1">Tên slideshow</label>
						<span class="help-block">Mời bạn nhập tên slideshow</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon">
						<input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
						
						<span class="help-block">Mời bạn nhập ảnh slideshow </span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon right">
						<input type="text" name="description" value="{{old('description', $model->description)}}" class="form-control">
						<label for="form_control_1">Mô tả slideshow</label>
						<span class="help-block">Mời bạn nhập mô tả slideshow</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon right">
						<input type="text" name="link" value="{{old('link', $model->link)}}" class="form-control">
						<label for="form_control_1">Link slideshow</label>
						<span class="help-block">Mời bạn nhập link slideshow</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon right">
						<input type="text" name="status" value="{{old('status', $model->status)}}" class="form-control">
						<label for="form_control_1">Trạng thái slideshow</label>
						<span class="help-block">Mời bạn nhập trạng thái slideshow</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating ">
					<div class="input-icon right">
						<input type="text" name="order_slide" value="{{old('order_slide', $model->order_slide)}}" class="form-control">
						<label for="form_control_1">Số thứ tự slideshow</label>
						<span class="help-block">Mời bạn nhập số thứ tự slideshow</span>
						<i class="icon-user"></i>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('homeslide')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection