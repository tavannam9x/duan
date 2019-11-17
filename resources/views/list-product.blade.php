@extends('layout2.main')
@section('content')
<div class="all" >
<!-- <form method="get" action="" class="form-inline my-2 my-lg-5" style="padding-left: 520px;">
    <input name="keyword" class="nav-item form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" style="width: 500px">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
</form> -->
  <div class="col-md-12" style=" margin-bottom: 20px;">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <form method="get" action="" class="form-inline my-2 my-lg-5">
    <div class="input-group">
      <input type="search" name="keyword" class="form-control" placeholder="Tìm kiếm" style="width: 700px">
      <span class="input-group-btn">
      <button type="submit" class="btn btn-success" style="height: 33px;"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  </div>
  <div class="col-md-3"></div>
  </div>




<!-- <form action="" method="get">
	<input style="width: 1000px; margin: auto;" class="nav-item form-control mr-sm-2" type="text" name="keyword" placeholder="tìm kiếm.....">
</form> -->
<div class="row">
  <div class="col-md-12">
        <div class="col-md-12">
          <!-- BEGIN CONDENSED TABLE PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-picture"></i>Danh sách sản phẩm
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                </a>
                <a href="javascript:;" class="reload" data-original-title="" title="">
                </a>
                <a href="javascript:;" class="remove" data-original-title="" title="">
                </a>
              </div>
            </div>
            <div class="portlet-body flip-scroll">
              <table class="table table-striped ">
              <thead class="flip-content">
              <tr>
                  <th>
                     ID
                  </th>
                  <th>
                     Tên sản phẩm
                  </th>
                  <th>
                     Ảnh sản phẩm
                  </th>
                  <th>
                     Giá niêm yết
                  </th>
                  <th>
                     Giá khuyến mãi
                  </th>
                  <th>
                     Mô tả ngắn
                  </th>
                  <th>
                     Mô tả chi tiết
                  </th>
                  <th>
                    Danh Mục
                  </th>
                  <th>
                    Lượt xem
                  </th>
                  <th>
                    Hạn sử dụng
                  </th>
                  <th>
                    Trang thái
                  </th>
                  
                  <th>
                     <a href="{{route('product.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i> Thêm</a>
                  </th>
                </tr>
              </thead>
              @foreach($sanpham as $sp)
              <tbody>
              <tr>
                  <td>
                     {{$sp->id}}
                  </td>
                  <td style="width: 150px;">
                     {{$sp->name}}
                  </td>
                  <td style="width: 130px;">
                     <img src="{{$sp->image}}" style="width: 130px;">
                  </td>
                  <td style="width: 130px;">
                     {{$sp->list_price}}
                  </td>
                  <td style="width: 150px;">
                     {{$sp->sell_price}}
                  </td>
                  <td style="width: 100px;">
                     {{Str::limit($sp->short_desc, $limit = 50, $end = '...')}}
                  </td>
                  <td>
                      <div class="portlet-body" style="width: 220px;">
                      <div class="scroller" style="height:100px;" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                        {!!Str::limit($sp->description, $limit = 300, $end = '...')!!}
                      </div>
                  </div>
                  </td>
                  <td style="width: 130px;">
                     @isset($sp->product->name)
                        {{$sp->product->name}}
                     @endisset
                  </td>
                  <td style="width: 100px;">
                     {{$sp->views}}
                  </td>
                  <td style="width: 130px;">
                     {{$sp->expiry_date}}
                  </td>
                  <td>
                     @if($sp->status == 0)
                     <p class="btn btn-warning">Đang chờ duyệt</p>
                     <a href="{{route('product.edits', ['id' => $sp->id])}}" class="btn btn-primary" style="margin-top: 10px;">
                     <i class="fa fa-edit"></i> Sửa </a>
                    @elseif($sp->status == 1)
                     <p class="btn btn-primary primary">Đã duyệt</p>
                    @endif
                  </td>
                  
                  <td>
                    <a href="{{route('product.edit', ['id' => $sp->id])}}" class="btn btn-success">
                    <i class="fa fa-edit"></i> Sửa </a>
                    <a href="javascript:;" linkurl="{{route('product.remove', ['id' => $sp->id])}}" class="btn default btn-danger red xoa" style="margin-top:10px;">
                    <i class="fa fa-trash-o"></i> Xóa </a>
                  </td>
                </tr>
              </tbody>
              @endforeach
              <tr>
                <td colspan="13" class="text-center">{{$sanpham->links()}}</td>
              </tr>
              </table>
          </div>
          </div>
          <!-- END CONDENSED TABLE PORTLET-->
        </div>
  </div>
</div>
</div>
@endsection();