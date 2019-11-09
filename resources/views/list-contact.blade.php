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
                <table class="table table-bordered table-striped table-condensed flip-content">
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
                       Email
                    </th>
                    <th>
                       Nội dung góp ý
                    </th>
                    <th>
                       Ngày phản hồi
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($lienhe as $lh)
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->name}}
                    </td>
                    <td>
                       {{$lh->phone_number}}
                    </td>
                    <td>
                       {{$lh->email}}
                    </td>
                    <td style="
                        dilhlay:block;
                        padding:5px;
                        margin-top:5px;
                        width:250px;
                        height:200px;
                        overflow:scroll;
                        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                        border-radius: 10px;
                        background-color: #F5F5F5;
                        border-radius: 10px;
                        ">
                        {{$lh->content}}
                      
                    </td>
                    <td>
                       {{$lh->date}}
                    </td>
                    <td>
                       {{$lh->status}}
                    </td>
                    <td>
                      <a href="{{route('category.edit', ['id' => $lh->id])}}" class="btn default btn-xs green">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('contact.remove', ['id' => $lh->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$lienhe->links()}}</td>
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