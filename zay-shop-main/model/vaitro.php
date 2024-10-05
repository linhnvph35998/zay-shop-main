<?php
function loadAllVaitro(){
    $sql = "SELECT * FROM vaitro";
    $vaitro = pdo_query($sql);
    pdo_query($sql);
    return $vaitro;
}

?>