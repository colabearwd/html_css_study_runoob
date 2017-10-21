
/**
 * Created by IntelliJ IDEA.
 * User: Wong Donny
 * Date: 2017-10-20
 * Time: 16:55
 */

<?php
header("Content-type: text/html; charset=utf-8");

$get_content = $_POST["content_text"];
$get_email  = $_POST["email_text"];

echo $get_content;
echo $get_email;

$sql = "INSERT INTO re_1 (content, email)
VALUES ('".$get_content."', '".$get_email."')";

echo $sql;

$servername = "localhost";
$username = "root";
$password = "";
$dbname="review";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//echo "连接成功";

else {
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
