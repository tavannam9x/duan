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
		<form action="{{route('category.edit',['id'=>$model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="text" name="name" value="{{old('name', $model->name)}}" class="form-control">
						<label for="form_control_1">Tên danh mục</label>
						@if($errors->first('name'))
						<span class="text-danger">{{$errors->first('name')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="text" name="description" value="{{old('description', $model->description)}}" class="form-control">
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
						<label for="form_control_1">Trạng thái danh mục</label>
						<select name="category_type" class="form-control">
							<option value="1">Hiển thị</option>
							<option value="0">Ẩn</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homehome')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection