<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css">
<link rel="stylesheet" href="./CSS/list.css">
<link rel="stylesheet" href="./CSS/home.css">
<link rel="stylesheet" href="./CSS/aside.css">

<?php
include "hearder.php";
if(isset($_GET['act'])&&$_GET['act']!=""){
    $act = $_GET['act'];
    switch($act){
        case "adddm";
        if(isset($_POST['them'])&& $_POST['them']){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $target = "../img/";
            $img = $_FILES["img"]["name"];
            $target_file = $target.basename($_FILES["img"]["name"]);
            move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
            addDm($name,$img); 
        }
        case "listdm";
        $listdanhmuc = loadAllDm();
        include "./danhmuc/list.php";
        break;


        default:
        $tongdm = tinhtongdm();
        $tongsp = tinhtong();
        $tongkhachhang = tinhtongkhachhang();
        $tongbinhluan = tinhtongbinhluan();
    };
    

}else{
    $tongdm = tinhtongdm();
    $tongsp = tinhtong();
    $tongkhachhang = tinhtongkhachhang();
    $tongbinhluan = tinhtongbinhluan();
    include "home.php";
}
include "footer.php";
?>


<script src="./JS/script.js"></script>