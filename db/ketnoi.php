<?php
$username = "sql10388086"; // Khai báo username
$password = "rSwhMZDdXk";      // Khai báo password
$server   = "sql10.freemysqlhosting.net";   // Khai báo server
$dbname   = "sql10388086";      // Khai báo database

// Kết nối database tintuc
$con = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$con) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
    //echo "Kết nối thành công sẽ tiếp tục dòng code bên dưới đây."


//ghi chú
    //tbl_category

?>



