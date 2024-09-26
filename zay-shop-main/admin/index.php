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
include "hearder.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "./tinhtong.php";
include "../model/sanpham.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
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

        case "tatcasp";
        $listsanpham = loadAllSp();
        include "./view/tatcasanpham.php";
        break;  
        case "listsp";
        if(isset($_POST['listok'])&&($_POST['listok'])){
            $kym = $_POST['kym'];
            $iddm = $_POST['iddm'];
        }else{
            $kym = "";
            $iddm = 0;
        }  
        $listdanhmuc = loadAllDm();
        $listsanpham = loadAllSpFilter($kym,$iddm);
        include "./sanpham/list.php";
        break;

        case "addsp";
        if(isset($_POST['them'])&& ($_POST['them'])){
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
                $target_file = $target.basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                addSp($name,$giatien,$img,$mota,$iddm,$luotxem,$ngaytao,$soluong);
        }
        $listdanhmuc = loadAllDm();
        $listsanpham = loadAllSp("",0);
        include "sanpham/add.php";
        break;

        case "deletesp";
        if(isset($_GET['id'])&&($_GET['id']>0)){
            deleteSp($_GET['id']);
        }
        $listsanpham = loadAllSp("",0);
        include "sanpham/list.php";
        break;

        default:
            $tongdm = tinhtongdm();
            $tongsp = tinhtong();
            $listdanhmuc = loadAllDm();
            include "./home.php";
            break;
    };
} else {
    $tongdm = tinhtongdm();
    $tongsp = tinhtong();
    include "./home.php";
}
include "footer.php";
?>


<script src="./JS/script.js"></script>