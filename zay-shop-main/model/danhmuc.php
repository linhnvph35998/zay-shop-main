<?php
    function addDm($name,$img){
        $sql = "INSERT INTO danhmuc VALUE(null,'$name','$img')";
        pdo_execute($sql);
        header("location: index.php?act=listdm");
    }
?>