<?php
function update_taikhoan_admin($id, $username, $password, $email, $diachi, $sdt, $id_role)
{
    $sql = "update taikhoan set username = '" . $username . "', password = '" . $password . "',email = '" . $email . "', diachi = '" . $diachi . "', sdt = '" . $sdt . "', id_role = '" . $id_role . "' where id =" . $id;
    pdo_execute($sql);
}


function loadAllVaitro(){
    $sql = "SELECT * FROM vaitro";
    $vaitro = pdo_query($sql);
    pdo_query($sql);
    return $vaitro;
}
?>