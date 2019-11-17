@extends('layout2.main')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"  src="../../../ckeditor/ckeditor.js"></script>
<script type="text/javascript"  src="../../../ckfinder/ckfinder.js"></script>
@section('content')
<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm bài viết</span>
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
		<form action="{{route('post.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="title" value="" class="form-control">
						<label for="form_control_1">Tên bài viết</label>
						@if($errors->first('title'))
						<span class="text-danger">{{$errors->first('title')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="file" name="image" value="" class="form-control">
						@if($errors->first('image'))
						<span class="text-danger">{{$errors->first('image')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="short_desc" value="" class="form-control">
						<label for="form_control_1">Nội dung tóm tắt bài viết</label>
						@if($errors->first('short_desc'))
						<span class="text-danger">{{$errors->first('short_desc')}}</span>
						@endif
					</div>
				</div>
				<!-- <div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="description" value="" class="form-control">
						<label for="form_control_1">Chi tiết nội dung bài viết</label>
						<span class="help-block">Mời bạn nhập chi tiết nội dung bài viết</span>
						<i class="icon-user"></i>
					</div>
				</div> -->
				<span class="form_control">Nội dung chi tiết bài viết:</span>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<textarea id="demo" class="form-control cheditor" rows="5" value="" name="description" style="margin-top: 10px;"></textarea>
						<script type="text/javascript">
							CKEDITOR.replace("demo", {
					          uiColor: '#14B8C4',
					       });
						</script>
					</div>
					@if($errors->first('description'))
					<span class="text-danger">{{$errors->first('description')}}</span>
					@endif
				</div>
					<input type="hidden" name="views" value="0" class="form-control">
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Danh mục bài viết</label>
						<select name="category_post_id" class="form-control">
							@foreach ($category_post as $ca)
							<option value="{{$ca->id}}">{{$ca->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				
				<!-- div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="date" value="" class="form-control">
						<label for="form_control_1">Ngày xuất bản</label>
						<span class="help-block">Mời bạn nhập ngày xuất bản</span>
						<i class="icon-user"></i>
					</div>
				</div>
 				-->
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="author" value="" class="form-control">
						<label for="form_control_1">Tác giả bài viết</label>
						@if($errors->first('author'))
						<span class="text-danger">{{$errors->first('author')}}</span>
						@endif
					</div>
				</div>
				<input type="hidden" value="1" name="status">
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homepost')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
@endsection
