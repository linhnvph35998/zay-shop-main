<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/sanpham.php";

$idpro = $_REQUEST['idpro'];
$listbl = loadall_binhluan($idpro);
$sanpham = loadOneSp($idpro);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/index.css">
<link rel="stylesheet" href="../CSS/sanpham.css">
<div class="mt-3 px-3">
  <h1>Bình luận</h1>
  <table class="table table-borderless">
    <tr>
      <th class="w-5">Tên tài khoản</th>
      <th class="w-5">Nội dung</th>
      <th class="w-5">Ngày bình luận</th>
    </tr>
    <?php
    foreach ($listbl as $ds) {
      extract($ds);
      if ($trangthai == 0) {
        echo '<tr>
                <td>' . $username . '</td>
                <td>' . $noidung . '</td>
                <td>' . $ngaybinhluan . '</td>
              </tr>';
      }
    }
    ?>
  </table>
</div>

<div class="comment">
  <?php if (isset($_SESSION['user'])) : ?>
    <!-- Form bình luận nếu đã đăng nhập -->
    <form style="margin: 10px 15px;" action="binhluanform.php" method="POST">
      <input type="hidden" name="idpro" value="<?= $idpro ?>">
      <input type="hidden" name="iduser" value="<?= $_SESSION['user']['id'] ?>">

      <input type="text" name="noidung" placeholder="Nhập bình luận của bạn">
      <input type="submit" name="guibinhluan" value="Gửi bình luận">
    </form>
  <?php else : ?>
    <!-- Thông báo yêu cầu đăng nhập nếu chưa đăng nhập -->
    <p style="margin: 10px 15px;">Vui lòng đăng nhập để bình luận.</p>
  <?php endif; ?>
</div>

<?php
// Xử lý gửi bình luận
if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
  if (isset($_SESSION["user"])) { // Kiểm tra người dùng đã đăng nhập hay chưa
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['user']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');

    // Thêm bình luận vào cơ sở dữ liệu
    insert_binhluan($noidung, $iduser, $sanpham['id'], $ngaybinhluan);

    // Reload lại trang để hiển thị bình luận mới
    header("Location: " . $_SERVER['HTTP_REFERER']);
  }
}
?>