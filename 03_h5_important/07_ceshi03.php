
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-20
 * Time: 21:34
 */


<?php
$servername = "localhost";
$username = "root";
$password = "mysqlroot";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";
?>

