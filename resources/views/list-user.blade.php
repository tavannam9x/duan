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
    <div class="col-md-12">
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách tài khoản
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
                       Họ và tên
                    </th>
                    <th>
                       Ảnh đại diện
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Email
                    </th>
                    <th>
                       Địa chỉ
                    </th>
                    <th>
                       Giới Tính
                    </th>
                    <th>
                      Điểm đánh giá
                    </th>
                    <th>
                      Quyền
                    </th>
                    <th>
                      <a href="{{route('user.add')}}" class="btn default btn-xs blue">
                      <i class="fa fa-plus"></i>Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($taikhoan as $tk)
                <tbody>
                <tr>
                    <td>
                       {{$tk->id}}
                    </td>
                    <td>
                       {{$tk->name}}
                    </td>
                    <td>
                       {{$tk->image}}
                    </td>
                    <td>
                       {{$tk->phone_number}}
                    </td>
                    <td>
                       {{$tk->email}}
                    </td>
                    <td>{{$tk->address}}</td>
                    <td>
                       {{$tk->gender}}
                    </td>
                    <td>
                       {{$tk->rate_star}}
                    </td>
                    <td>
                       {{$tk->role}}
                    </td>
                    <td>
                      <a href="{{route('user.edit', ['id' => $tk->id])}}" class="btn default btn-xs green">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('user.remove', ['id' => $tk->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$taikhoan->links()}}</td>
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