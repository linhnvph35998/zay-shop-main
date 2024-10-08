<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/index.css">
<link rel="stylesheet" href="../CSS/sanpham.css">

<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

if(isset($_SESSION['user']['id'])&& ($_SESSION['user']['id']>0)){

if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
  $idpro = $_POST['idpro'];
  $iduser = $_POST['iduser'];
  $noidung = $_POST['noidung'];
  $date = date('Y-m-d H:i:s');
  insert_cmt($noidung,$idpro, $iduser,  $date);
}
$id_sp = isset($_POST['idpro']) ? $_POST['idpro'] : 0;
$dsbl = load_cmt_sp($id_sp);
?>
<div class="mt-3 px-3">
  <h1>Bình luận</h1>
  <table class="table table-borderless">
    <tr>
      <th class="w-5">Tên tài khoản</th>
      <th class="w-5">Nội dung</th>
      <th class="w-5">Ngày bình luận</th>
    </tr>

  </table>
</div>
<hr>
<div class="comment">
<form style="margin: 10px 15px;" action="binhluanform.php" method="POST">
  <input type="hidden" name="idpro" value="<?= $_GET['idpro'] ?>">
  
  <input type="hidden" name="iduser" value="<?= $_SESSION['user']['id'] ?>">
  <input type="text" name="noidung">
  <input type="submit" name="guibinhluan" value="Gửi bình luận">

</form>

<hr>
<?php
      foreach ($dsbl as $ds_cmt) {
          extract($ds_cmt);
          $link = "index.php?act=chitietsanpham&idpro=$id_sp";
          echo ' <div class="reviews_comment_box">
    <div class="comment_thmb">
        <img src="../../thu_vien/asset/img/blog/comment2.jpg" alt="">
    </div>
    <div class="comment_text">
        <div class="reviews_meta">
            <p><strong>' . $namekh . '</strong>- ' . $ngaybinhluan . '</p>
            <span>' . $noidung . '</span>
        </div>
                                  
    </div>
                             
</div>';
      }
      ?>
      </div>
<?php
}
else{
  echo "<a href='index.php?act=dangnhap' target='_parent'>Bạn cần đăng nhập để bình luận</a>  ";
}
