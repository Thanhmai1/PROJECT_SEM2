<?php
    //tạo 4 biến

    //tên server: localhost
    $server = 'localhost';
    //tạo biến người dùng
    $user = 'root';
    //tạo pass của người dùng
    $pass = '';
    //tên của database
    $database = 'sem2';

    // tạo biến kết nối database = hàm new mysqli
    // -> gọi lần lượt biến trên
    $conn = new mysqLi($server, $user, $pass, $database);

    //kiểm tra xem đã kết nối db chưa
    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo 'Connect Success!';
    }else{
        echo 'Connect Fail!';
    }

?>