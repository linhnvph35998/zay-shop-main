<?php

extract($result);

$ttdh = trangthai_donhang($trangthai);
?>
<!-- Content Wrapper. Contains page content -->
<div class="container  admin ">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">cập nhập trạng thái đơn hàng</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="index.php?act=update_trangthai" method="POST">
            <div class="form-group">
                  <label style="padding-left: 40px;">Trạng thái</label>
                  <select style="width: 90%; margin-left: 40px;" class="form-control" name="trangthai">
                    <option value=""><?=$ttdh ?></option>
                    <option value="1">Đang chuẩn bị</option>
                    <option value="2">Đang giao hang </option>
                    <option value="3">Hoàn tất giao hàng </option>
                  
                   
                    
                  </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="id" value="<?php if (isset($id) &&  $id > 0) echo $id ?>">
                    <input type="submit" name="capnhap_hd" class="btn btn-primary" value="Cập nhập">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=donhang"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

</div>