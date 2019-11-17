@extends('layout2.main')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" type="text/javascript"></script>
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
        <bvan class="input-group-btn">
        <button type="submit" class="btn btn-success" style="height: 33px;"><i class="fa fa-search"></i></button>
        </bvan>
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
                  <i class="fa fa-picture"></i>Danh sách bài viết
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
                       Tiêu đề bài viết
                    </th>
                    <th>
                       Ảnh bài viết
                    </th>
                    <th>
                       Tóm tắt nội dung
                    </th>
                    <th>
                      Chi tiết nội dung
                    </th>
                    <th>
                       Danh mục
                    </th>
                    <th>
                       Lượt xem
                    </th>
                    <th>
                      Ngày đăng bài
                    </th>
                    
                    <th>
                      Tác giả
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                     <a href="{{route('post.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($baiviet as $bv)
                <tbody>
                <tr>
                    <td>
                       {{$bv->id}}
                    </td>

                    <td style="width: 150px;">
                       {{$bv->title}}
                    </td>

                    <td>
                       <img src="{{$bv->image}}" style="width: 200px;">
                    </td>

                    <td style="width: 200px;">
                       {{Str::limit($bv->short_desc, $limit = 50, $end = '...')}}
                    </td>

                    <td style="width: 250px;">
                        <div class="portlet-body" style="width: 250px;">
                          <div class="scroller" style="height:250px;" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                            {!!Str::limit($bv->description, $limit = 300, $end = '...')!!}
                          </div>
                        </div>
                    </td>

                    <td>
                       @isset($bv->post->name)
                        {{$bv->post->name}}
                       @endisset
                    </td>
                    <td>
                       {{$bv->views}}
                    </td>
                    <!-- <td style="width: 300px;">
                        {!!$bv->description!!}
                      
                    </td> -->
                    <!-- <td style="overflow: scroll; height: 100px;">
                    {!!$bv->description!!}
                    </td> -->
                    <td>
                       {{$bv->date}}
                    </td>
                    <td>
                       {{$bv->author}}
                    </td>
                    <td>
                      @if($bv->status == 1)
                       <p class="label label-sm label-warning">Đang chờ duyệt</p>
                       <a href="{{route('post.edits', ['id' => $bv->id])}}" class="btn btn-warning">
                       <i class="fa fa-edit"></i> Sửa </a>
                      @elseif($bv->status == 2)
                       <p class="btn btn-success">Đã duyệt</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('post.edit', ['id' => $bv->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('post.remove', ['id' => $bv->id])}}" class="btn btn-danger xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr colbvan="11">
                  <td colspan="11" class="text-center" style="margin: auto;">{{$baiviet->links()}}</td>
                </tr>
                </table>
            </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
          </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(selector).slimScroll({
    width: '300px',
    height: '500px',
    size: '10px',
    position: 'left',
    color: '#ffcc00',
    alwaysVisible: true,
    distance: '20px',
    start: $('#child_image_element'),
    railVisible: true,
    railColor: '#222',
    railOpacity: 0.3,
    wheelStep: 10,
    allowPageScroll: false,
    disableFadeOut: false
    });
</script>
@endsection();