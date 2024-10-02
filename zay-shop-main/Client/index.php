<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/giohang.css" />
<link rel="stylesheet" href="./CSS/dathang.css" />
<link rel="stylesheet" href="./CSS/timkiem.css" />
<link rel="stylesheet" href="./CSS/sanpham.css" />


<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}


if (isset($_SESSION["user"])) {
    extract($_SESSION['user']);
    if ($trangthai === 1) {
        echo "Bạn đã bị khóa tài khoản vui lòng liên hệ admin để khôi phục lại tài khoản của bạn";
        echo "<form action='' method='post'>
        <input type='submit' name='dangxuat' value='Quay lại trang chủ và đăng xuất'/>
        </form>";
        die;
    }
}
include "./hearder.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap":
            include "./dangnhap.php";
            break;
        case "dangky":
            include "./dangky.php";
            break;
            case 'dangxuat':
                session_unset();
                header('location:index.php', true);
                break;
        default:
            $listdanhmuc = loadAllDm();
            $listsanpham = loadAllSp();
            $topsp = topSp();
            $spkhac = spKhac();
            
            break;
    }
} else {
    if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kym = $_POST['kym'];
        $iddm = $_POST['iddm'];
    } else {
        $kym = "";
        $iddm = 0;
    };
    $topsp = topSp();
    $spkhac = spKhac();
    $listdanhmuc = loadAllDm();
    $listsanpham = loadAllSp($kym, $iddm);
    
}

include "home.php";


include "footer.php";
?>
<div class="back-to-top"><i class="fa-solid fa-arrow-up"></i></div>
<script src="./JS/script.js"></script>
<script src="./JS/amount.js">

</script>