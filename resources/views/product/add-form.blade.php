@extends('layout2.main')
<script type="text/javascript"  src="../../../ckeditor/ckeditor.js"></script>
<script type="text/javascript"  src="../../../ckfinder/ckfinder.js"></script>
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
		<form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="text" name="name" value="" class="form-control">
						<label for="form_control">Tên sản phẩm</label>
						@if($errors->first('name'))
						<span class="text-danger">{{$errors->first('name')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="file" name="image" value="" class="form-control">
						<label for="form_control_1">Ảnh sản phẩm</label>
						@if($errors->first('image'))
						<span class="text-danger">{{$errors->first('image')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="list_price" value="" class="form-control">
						<label for="form_control_1">Giá niêm yết sản phẩm</label>
						@if($errors->first('list_price'))
						<span class="text-danger">{{$errors->first('list_price')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="sell_price" value="" class="form-control">
						<label for="form_control_1">Giá khuyến mãi</label>
						@if($errors->first('sell_price'))
						<span class="text-danger">{{$errors->first('sell_price')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="short_desc" value="" class="form-control">
						<label for="form_control_1">Mô tả sản phẩm</label>
						@if($errors->first('short_desc'))
						<span class="text-danger">{{$errors->first('short_desc')}}</span>
						@endif
					</div>
				</div>
				<span class="form_control">Nội dung chi tiết bài viết:</span>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<textarea id="demo" class="form-control cheditor" rows="5" value="" name="description" style="margin-top: 10px;"></textarea>
						<script type="text/javascript">
							CKEDITOR.replace("demo");
						</script>
					</div>
					@if($errors->first('description'))
					<span class="text-danger">{{$errors->first('description')}}</span>
					@endif
				</div>
				
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Danh mục</label>
						<select name="category_id" class="form-control">
							@foreach ($category_product as $ca)
							<option value="{{$ca->id}}">{{$ca->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<input type="hidden" name="views" value="0" class="form-control">
				<div class="form-group form-md-line-input has-success form-md-floating-lable">
					<div class="input-icon">
						<input type="date" name="expiry_date" value="" style="width: 300px; border: 2px solid #d2f6d3; border-radius: 3px;">
						<label for="form_control_1">Hạn sử dụng</label>
						@if($errors->first('expiry_date'))
						<span class="text-danger">{{$errors->first('expiry_date')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="checkbox">
					    <label>
					    	<input type="checkbox" name="status" value="1"> Trạng thái
					    </label>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('home')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection