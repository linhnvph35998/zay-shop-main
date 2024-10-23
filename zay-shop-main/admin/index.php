<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css">
<link rel="stylesheet" href="./CSS/list.css">
<link rel="stylesheet" href="./CSS/home.css">
<link rel="stylesheet" href="./CSS/aside.css">
<link rel="stylesheet" href="./CSS/add.css">
<link rel="stylesheet" href="./CSS/edit.css">
<?php
session_start();
if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {


    include "hearder.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "./tinhtong.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/vaitro.php";
    include "../model/donhang.php";
    include "../model/giohang.php";
    include "../model/thongke.php";
    include "../model/binhluan.php";
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
                // Danh mục
            case "adddm";
                if (isset($_POST['them']) && $_POST['them']) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $target = "../img/";
                    $img = $_FILES["img"]["name"];
                    $target_file = $target . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    addDm($name, $img);
                }
                include "./danhmuc/add.php";
                break;
            case "listdm";
                $listdanhmuc = loadAllDm();
                include "./danhmuc/list.php";
                break;

            case "deletedm";
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    deleteDm($_GET['id']);
                };
                $listdanhmuc = loadAllDm("", 0);
                include "./danhmuc/list.php";
                break;
            case "editdm";
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $danhmuc = loadOneDm($_GET['id']);
                }
                if (isset($_POST['sua']) && $_POST['sua']) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    editDm($id, $name);
                }
                include "./danhmuc/edit.php";
                break;
                // Sản phẩm
            case "tatcasp";
                $listsanpham = loadAllSp();
                include "./view/tatcasanpham.php";
                break;
            case "listsp";
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kym = $_POST['kym'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kym = "";
                    $iddm = 0;
                }
                $listdanhmuc = loadAllDm();
                $listsanpham = loadAllSpFilter($kym, $iddm);
                include "./sanpham/list.php";
                break;

            case "editsp":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $sanpham = loadOneSp($_GET['id']);
                }
                if (isset($_POST['sua']) && $_POST['sua']) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $giatien = $_POST['giatien'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $soluong = $_POST['soluong'];
                    $luotxem = $_POST['luotxem'];
                    $soluong = $_POST['soluong'];
                    $target = "../Img/";
                    $img = $_FILES["img"]["name"];
                    $target_file = $target . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    editSp($id, $name, $giatien, $img, $mota, $iddm, $luotxem, $soluong);
                }
                $listdanhmuc = loadAllDm();
                include "sanpham/edit.php";
                break;

            case "addsp";
                if (isset($_POST['them']) && ($_POST['them'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $giatien = $_POST['giatien'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $luotxem = $_POST['luotxem'];
                    $soluong = $_POST['soluong'];
                    $ngaytao = date('h:i:sa d/m/Y');
                    $target = "../Img/";
                    $img = $_FILES["img"]["name"];
                    $target_file = $target . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    addSp($name, $giatien, $img, $mota, $iddm, $luotxem, $ngaytao, $soluong);
                }
                $listdanhmuc = loadAllDm();
                $listsanpham = loadAllSp("", 0);
                include "sanpham/add.php";
                break;

            case "deletesp";
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    deleteSp($_GET['id']);
                }
                $listsanpham = loadAllSp("", 0);
                include "sanpham/list.php";
                break;

                //Tài khoản
            case "listtk";
                $listtk = loadAllTk();
                include "./taikhoan/list.php";
                break;

            case "edittk";
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $taikhoan = loadOneTk($_GET['id']);
                }
                if (isset($_POST['sua']) && $_POST['sua']) {
                    $id = $_POST['id'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $idvaitro = $_POST['idvaitro'];
                    editTk($id, $email, $diachi, $sdt, $idvaitro);
                }
                $vaitro = loadAllVaitro();
                include "./taikhoan/edit.php";
                break;
            case "khoatk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    khoaTk($_GET['id']);
                }
                include "taikhoan/list.php";
                break;
            case "molaitk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    molaiTk($_GET['id']);
                }
                include "taikhoan/list.php";
                break;

                //Đơn hàng
            case "huydonhang":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    huyHang($_GET['id']);
                    update_trangthai($_GET['id'], 4);
                }
                include "./taikhoan/list.php";
                break;
            case "xacnhandonhang":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    xacNhanHang($_GET['id']);
                    update_trangthai($_GET['id'], 1);
                }
                include "./donhang/list.php";
                break;
            case "donhang":
                $listdonhang = loadAllDonHang();
                include "./donhang/list.php";
                break;
            case "chitietdonhang":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $giohang = loadCart($_GET['id']);
                    $donhang = loadOneDonHang($_GET['id']);
                }
                include "./donhang/chitiet.php";
                break;
            case "sua_trangthai":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $result =  loadOneDonHang($_GET['id']);
                }
                include "./donhang/update.php";
                break;
            case "update_trangthai":
                if (isset($_POST['capnhap_hd']) && $_POST['capnhap_hd']) {

                    $id = $_POST['id'];
                    $trangthai = $_POST["trangthai"];
                    update_trangthai($id, $trangthai);
                    $thongbao = "cap nhat thanh cong";
                }
                header('location:index.php?act=xem_update_trangthai');
                include    "./donhang/list.php";
                break;
            case "xem_update_trangthai":
                $listdonhang = loadAllDonHang();
                include "./donhang/list.php";
                break;
            case "thongke":
                $listthongke = loadAllThongKe();
                include "thongke/thongke.php";
                break;
            case "dangxuat":
                session_unset();
                header('location:login_admin.php');
                break;
            default:
                $tongdm = tinhtongdm();
                $tongsp = tinhtongsp();
                $tongbl = tinhtongbinhluan();
                $tongkhachhang = tinhtongkhachhang();
                $listdanhmuc = loadAllDm();
                $listsanpham = loadAllSp();
                include "home.php";
                break;
        };
    } else {
        $tongdm = tinhtongdm();
        $tongsp = tinhtongsp();
        $tongbl = tinhtongbinhluan();
        $tongkhachhang = tinhtongkhachhang();
        $listdanhmuc = loadAllDm();
        $listsanpham = loadAllSp();
        include "home.php";
    }
    include "footer.php";
} else {
    header('location:login_admin.php');
}
?>

<script src="./JS/script.js"></script>