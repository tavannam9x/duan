@extends('layout2.main')
@section('content')
<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm sự kiện</span>
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
		<form action="{{route('category.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="name" value="" class="form-control">
						<label for="form_control_1">Tên danh mục</label>
						@if($errors->first('name'))
						<span class="text-danger">{{$errors->first('name')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="description" value="" class="form-control">
						<label for="form_control_1">Mô tả danh mục</label>
						@if($errors->first('description'))
						<span class="text-danger">{{$errors->first('description')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Loại danh mục</label>
						<select name="category_type" class="form-control">
							<option value="0">Sản phẩm</option>
							<option value="1">Bài viết</option>
						</select>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="status" value="" class="form-control">
						<label for="form_control_1">Trạng thái danh mục</label>
						<select name="category_type" class="form-control">
							<option value="1">Hiển thị</option>
							<option value="0">Ẩn</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('homehome')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
			</div>
		</form>
	</div>
</div>

@endsection