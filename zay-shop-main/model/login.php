<?php
function check_user($name, $pass)
{
      $sql = "select * from khachhang where username='".$name."' AND password='".$pass."'";
      $result = pdo_query_one($sql);
      return $result; 
}