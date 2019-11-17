@extends('layout2.main')
@section('content')
<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm anh</span>
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
		<form action="{{route('slideshowimg.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<!-- <div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon">
						<input type="text" name="Name" value="" class="form-control">
						<label for="form_control_1">Tên slideshow</label>
						<span class="help-block">Mời bạn nhập tên slideshow</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div> -->
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="file" name="image" value="" class="form-control">
						<label for="form_control_1">Ảnh slideshow</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="description" value="" class="form-control">
						<label for="form_control_1">Mô tả slideshow</label>
						<span class="help-block">Mời bạn nhập mô tả slideshow</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Tên sự kiện</label>
						<select name="parent_id" class="form-control">
							@foreach ($slide_chil as $sl)
							<option value="{{$sl->id}}">{{$sl->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<input type="hidden" name="status" value="1">
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homeslide')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection