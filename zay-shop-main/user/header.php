<?php 
 if(isset($_POST["dangxuat"])){
    unset($_SESSION["user"]);
    header("Location: index.php");
} 
?>
<header class="header">
    <div class="menu-icon">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="logo">
    <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                ZAY SHOP
            </a>
    </div>
    <div class="menu">
        <li><a href="../client/index.php">Trang chủ</a></li>
        <li><a href="">Shop</a></li>
        <li><a href="index.php?act=tatcasp">Sản phẩm</a></li>
        <li><a href="index.php?act=vewebsite">Liên hệ</a></li>
        <li><a href="index.php?act=vewebsite">Về website</a></li>
    </div>
    <div class="menu-res">
        <i class="fa-regular fa-circle-xmark"></i>
        <div class="menu-res-inner">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="index.php?act=vewebsite">Về website</a></li>
        </div>
    </div>
    <div class="form">
        <form action="index.php?act=timkiem" method="post" class="header-icon">
            <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
            <div class="form-search">
                <input type="text" placeholder="Tìm kiếm sản phẩm" name="kyw" />
                <button type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        <div class="header-icon">
            <i class="fa-regular fa-user" id="user-icon"></i>
            <div class="user-dropdown">

                <?php if(isset($_SESSION["user"])){
                    extract($_SESSION['user']);
                    echo '<p>'.$username.'</p>
                    <form action="" method="post">
                    <button type="submit" name="dangxuat" style="background: none; border: none;"><i class="fa-solid fa-arrow-right-to-bracket"></i><span>đăng xuất</span></button>
                </form>';
                } else {
                    echo " <li><a href='index.php?act=dangnhap'><i class='fa-solid fa-arrow-right-to-bracket'></i> <span>Đăng
                    nhập</span></a></li>
                <li><a href='index.php?act=dangky'><i class='fa-solid fa-user-plus'></i><span>Đăng ký</span></a></li>
                    ";
                }?>

            </div>
        </div>
        <div class="header-icon">
            <a href="index.php?act=giohang" class="bag-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </a>
        </div>
    </div>
    </div>
</header>
<div class="overlay"></div>