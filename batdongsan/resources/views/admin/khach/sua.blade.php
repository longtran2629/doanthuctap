@include('admin.layout.header')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Khách hàng
                            <small>Fix</small>
                        </h1>
                    </div>

                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach  
                    </div>
                    @endif

                    @if(count($errors)<1)
                    <div class="alert alert-success">
                        <a><b>Hệ thống đang hoạt động</b></a><br>
                        {{session('thongbao')}}
                    </div>
                    @endif

                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                       <form action="admin/khach/sua/{{$khach->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Admin quản trị: <b>{{$khach->user->name}}</b></label>
                                <input class="form-control" name="idadmin" value="{{$khach->id}}" readonly="" />
                            </div>
                            <div class="form-group">
                                <label>Họ tên khách hàng</label>
                                <input class="form-control" name="hoten" value="{{$khach->hoten}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="diachi" value="{{$khach->diachi}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ thường trú</label>
                                <input class="form-control" name="diachitt" value="{{$khach->diachitt}}" />
                            </div>
                            <div class="form-group">
                                <label>CMND</label>
                                <input class="form-control" name="cmnd" value="{{$khach->cmnd}}" readonly="" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="date" name="ngaysinh" value="{{$khach->ngaysinh}}"/>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="sodienthoai" value="{{$khach->sodienthoai}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$khach->email}}" readonly="" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <label class="radio-inline">
                                    <input name="gioitinh" value="0" checked="" type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gioitinh" value="1" type="radio">Nữ
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Type khách hàng</label>
                                <label class="radio-inline">
                                    <input name="loaikh" value="0" checked="" type="radio">Standard
                                </label>
                                <label class="radio-inline">
                                    <input name="loaikh" value="1" type="radio">Vip
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <label class="radio-inline">
                                    <input name="trangthai" value="1" checked="" type="radio">Active
                                </label>
                                <label class="radio-inline">
                                    <input name="loaikh" value="0" type="radio">None
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="mota" value="" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
