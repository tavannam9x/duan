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
        <skan class="input-group-btn">
        <button type="submit" class="btn btn-success" style="height: 33px;"><i class="fa fa-search"></i></button>
        </skan>
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
                  <i class="fa fa-picture"></i>Danh sách sự kiện giảm giá
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
                <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên sự kiện
                    </th>
                    <th>
                       Ảnh sự kiện
                    </th>
                    <th>
                       Mã giảm giá
                    </th>
                    <th>
                       Ngày bắt đầu
                    </th>
                    <th>
                       Ngày kết thúc
                    </th>
                    <th>
                      Số phần trăm giảm giá
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                      <a href="{{route('event.add')}}" class="btn default btn-xs blue">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($sukien as $sk)
                <tbody>
                <tr>
                    <td>
                       {{$sk->id}}
                    </td>
                    <td>
                       {{$sk->name}}
                    </td>
                    <td>
                      <img src="{{$sk->image}}" width="200">
                    </td>
                    <td>
                       {{$sk->code_sale}}
                    </td>
                    <td>
                       {{$sk->time_sale}}
                    </td>
                    <td>
                       {{$sk->end_time_sale}}
                    </td>
                    <td>
                       {{$sk->percent}}
                    </td>
                    <td>
                       {{$sk->status}}
                    </td>
                     <td>
                      <a href="{{route('event.edit', ['id' => $sk->id])}}" class="btn default btn-xs green">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('event.remove', ['id' => $sk->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$sukien->links()}}</td>
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