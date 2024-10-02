<?php
    function insert_taikhoan($user,$pass,$email,$address,$sdt,$trangthai){
        $sql = "INSERT INTO khachhang VALUES(null,'$user','$pass','$email','$address','$sdt',$trangthai,2)";
        pdo_execute($sql);
    }

    function doimatkhau($id,$password){
        $sql = "UPDATE khachhang SET password='$password' where id=$id";
        $doimk = pdo_query_one($sql);
        header("Location: index.php?act=doimk&id=$id");
        return $doimk;
    }

    function laymatkhau($id){
        $sql = "SELECT password from khachhang where id=".$id;
        $laymatkhau = pdo_query_one($sql);
        return $laymatkhau;
    }

    function loadall_taikhoan(){
        $sql="select * from khachhang order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

    function loadone_taikhoan($id){
        $sql="select * from khachhang where id=".$id;
        $listtaikhoan = pdo_query_one($sql);
        return $listtaikhoan;
    }

    function dangnhap($user, $pass){
        $sql="SELECT * FROM khachhang WHERE username='".$user."' and password='".$pass."'";
        $check = pdo_query_one($sql);
        return $check;
    }

    function checkuser($user){
        $sql="SELECT * FROM khachhang WHERE username='".$user."'";
        $check = pdo_query_one($sql);
        return $check;
    }

    function checkemail($email){
        $sql="SELECT * FROM khachhang WHERE email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id, $email, $diachi, $sdt){
        $sql="UPDATE khachhang SET email='".$email."',  diachi='".$diachi."', sdt='".$sdt."' where id=".$id;
        pdo_execute($sql);
        header("Location: index.php?act=thongtin&id=$id");
    }
    function delete_taikhoan($id){
        $sql="delete from user where id=".$id;
        pdo_execute($sql);
    }
    
    function dangxuat(){
        unset($_SESSION['user']);
    }

?>