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
                <table class="table table-striped">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên khách hàng
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Địa chỉ nhận
                    </th>
                    <th>
                       Lời nhắn
                    </th>
                    <th>
                       Ngày nhận
                    </th>
                    <th>
                       Ngày gửi
                    </th>
                    <th>
                       Tổng tiền
                    </th>
                    <th>
                       Người giao hàng
                    </th>
                    <th>
                       Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($model as $lc)
                <tbody>
                <tr>
                    <td>
                       {{$lc->id}}
                    </td>
                    <td style="width: 150px;">
                       {{$lc->name}}
                    </td>
                    <td>
                       {{$lc->phone_number}}
                    </td>
                    <td style="width: 250px;">
                       {{$lc->order_address}}
                    </td>
                    <td style="width: 200px;">
                       {{$lc->note}}
                    </td>
                    <td>
                       {{$lc->order_date}}
                    </td>
                    <td>
                       {{$lc->sent_date}}
                    </td>
                    <td>
                       {{$lc->total_price}} VNĐ
                    </td>
                    <td>
                       @isset($lc->shipper->name)
                        {{$lc->shipper->name}}
                       @endisset
                    </td>
                    <td>
                      @if($lc->status == 0)
                       <p class="btn btn-warning">Chưa xử lý</p>
                      @elseif($lc->status == 1)
                       <p class="btn btn-info">Đang giao hàng</p>
                      @elseif($lc->status == 2)
                       <p class="btn btn-success">Đã giao</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('cart.edit', ['id' => $lc->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="{{route('homecartdetail', ['id' => $lc->id])}}" class="btn btn-success">
                      <i class="fa fa-edit"></i> Chi tiết </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$model->links()}}</td>
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