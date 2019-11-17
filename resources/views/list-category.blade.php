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
        <lhan class="input-group-btn">
        <button type="submit" class="btn btn-success" style="height: 33px;"><i class="fa fa-search"></i></button>
        </lhan>
      </div>
    </form>
    </div>
    <div class="col-md-3"></div>
    </div>




<!-- <form action="" method="get">
  <input style="width: 1000px; margin: auto;" class="nav-item form-control mr-sm-2" type="text" name="keyword" placeholder="tìm kiếm.....">
</form> -->
  <div class="row">
    <div class="col-md-8" style="margin-left:265px;" >
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách liên hệ
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
                <table class="table table-condensed">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên danh mục
                    </th>
                    <th>
                       Mô tả
                    </th>
                    <th>
                       Loại danh mục
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                     <a href="{{route('category.add')}}" class="btn btn-success">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($danhmuc as $lh)
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->name}}
                    </td>
                    <td style="width: 200px;">
                       {{Str::limit($lh->description, $limit = 30, $end = '...')}}
                    </td>
                    <td>
                       @if($lh->category_type == 0)
                       Sản Phẩm
                       @elseif($lh->category_type==1)
                       Bài viết
                       @endif
                    </td>
                    <td>
                      @if($lh->status == 0)
                       <p class="btn btn-warning">Ẩn danh mục</p>
                      @elseif($lh->status == 1)
                       <p class="btn btn-success">Hiển thị</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('category.edit', ['id' => $lh->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('category.remove', ['id' => $lh->id])}}" class="btn default btn-danger red xoa"><i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$danhmuc->links()}}</td>
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