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

  </table>
</div>
<div class="comment">
  <form style="margin: 10px 15px;" action="binhluanform.php" method="POST">
    <input type="hidden" name="idpro" value="<?= $idpro ?>">
    <input type="hidden" name="iduser" value="<?= $iduser ?>">

    <input type="text" name="noidung">
    <input type="submit" name="guibinhluan" value="Gửi bình luận">
  </form>
</div>