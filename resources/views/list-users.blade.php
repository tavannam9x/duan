@extends('layouts.main')
@section('content')

<form method="get" action="" class="form-inline my-2 my-lg-5" style="padding-left: 520px;">
    <input name="keyword" class="nav-item form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" style="width: 500px">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
</form>
<br/>


<!-- <form action="" method="get">
	<input style="width: 1000px; margin: auto;" class="nav-item form-control mr-sm-2" type="text" name="keyword" placeholder="tìm kiếm.....">
</form> -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                  <tbody>
                  <tr>
                    <th style="width: 30px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
                    <th style="width: 200px">Họ tên</th>
                    <th style="width: 200px">Email</th>
                      <th>
                      <a href="/add" class="btn btn-success">
                        <i class="fa fa-plus"></i> Thêm mới
                      </a>
                    </th>
                  </tr>
                     @foreach($people as $us)                 
                    <tr>
                      <td>{{$us->id}}</td>
                      <td>{{$us->name}}</td>
                      <td>{{$us->email}}</td>
                      <td>
                        <a href="/edit?id={{$us->id}}" class="btn btn-info">
                          <i class="fa fa-pencil"></i> Cập nhật
                        </a>

                        <a href="javascript:;" linkurl="/remove?id={{$us->id}}" class="btn  btn-danger xoa">
                          <i class="fa fa-trash"></i> Xoá
                        </a>
                      </td>
                    </tr>                                      
                    </tbody>
                   @endforeach
                   <tr>
                     <td colspan="4" class="text-center">{{$people->links()}}</td>
                   </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </section>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
  $('.xoa').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá danh mục này không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>
@endsection();