<?php
$username = "id10530670_wp_f9b3cacc21af18d68f7f00e3e1d43689"; // Khai báo username
$password = "V]GUY6jB+($_RyLf";      // Khai báo password
$server   = "databases-auth.000webhost.com";   // Khai báo server
$dbname   = "id10530670_wp_f9b3cacc21af18d68f7f00e3e1d43689";      // Khai báo database

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



