
<div class="wrapper ">
  <div class="" style=" ">
    <div class="admin">
      <h3>Danh sách bình luận </h3>
    </div>
    <div class="table">
      <table class="table-bordered" border="1">
        <!-- <thead>
          <tr>
            <th style="width: 100px">id cmt</th>
            <th>Tên Khách Hàng</th>
            <th>Tên sản phẩm</th>
            <th>Nội dung</th>
            
            <th>Ngày đánh giá</th>
          </tr>
        </thead> -->
        <tr>
                    <td style="width: 80px">Id</td>
                    <td style="width: 200px">Tên khách hàng</td>
                    <td style="width: 200px">Tên sản phẩm</td>
                    <td style="width: 500px">Nội dung</td>
                    <td style="width: 200px">Ngày bình luận</td>
                    <td>Chức năng</td>
                </tr>
        <tbody>
          <?php
          foreach ($result as $value) {
            extract($value);
            $linkdelete = "index.php?act=xoa_cmt&idcmt=" . $id;
          ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $tennguoidung ?></td>
              <td><?= $tensanpham ?></td>
              <td><?= $noidung ?></td>
              
              <td><?= $ngaybinhluan ?></td>
              <?php
              if (isset($_SESSION['user']['idvaitro']) && ($_SESSION['user']['idvaitro'] < 2)) {
              ?>
                <td>
                  <a href="<?= $linkdelete ?>" class="btn btn-primary">
                    <i class="bi bi-trash3-fill"></i>
                    xóa
                  </a>
                </td>
              <?php
              }

              ?>

            </tr>


          <?php
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->
</div>