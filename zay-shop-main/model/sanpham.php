<?php
function loadAllDm(){
    $sql = "SELECT * FROM danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

?>