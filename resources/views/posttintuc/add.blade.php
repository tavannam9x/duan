@extends('layout2.main')
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
		<form action="" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<!-- <div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon">
						<input type="text" name="title" value="" class="form-control">
						<label for="form_control_1">Tên bài viết</label>
						<span class="help-block">Mời bạn nhập tên bài viết</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div> -->
				<textarea id="demo" class="form-control cheditor" rows="5" name="noidung"></textarea>
				<script type="text/javascript">
					CKEDITOR.replace("demo");
				</script>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('homepost')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>
@endsection
