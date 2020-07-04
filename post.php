<?php
$title = $_GET["title"];
echo $title;

$rs = mysqli_query($link, $sql);
$servername = "database.idatac.com";
$username = "oc";
$password = "cf286b25a022976f6bd75a5be7b8a442ce0b078d";
$dbname = "oc";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM reply WHERE content='$title'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $pid = 2;
    // 输出数据
    while($row = $result->fetch_assoc()) {

        echo "<div style='width: 1600px; height: 260px; background: #f0F0F0; border-radius: 10px; transition: all 0.4s; overflow-x: hidden;
            overflow-y: scroll;' class='shadow'>";
        echo "</p>";
        $title1 = $row["title"];
        echo "<a href='post.php?title=$title1'>";
        echo  "<b style='font-size: 150%; font-weight: 300; position: relative; top: 10px; left: 20px; '>";
        echo $row["title"];
        echo "</b>";
        echo "</a>";
        echo "<p style='font-size: 80%; font-weight: 300; position: relative; left: 20px; '>";
        echo "user:";
        echo $row["username"];
        echo "<p style='font-size: 80%; font-weight: 300; position: relative; left: 120px; top: -30px; '>";
        echo "时间:";
        echo $row["posttime"];
        echo "</p>";
        echo "<p style='font-size: 80%; font-weight: 300; position: relative; left: 280px; top: -60px; '>";
        echo "#";
        echo $pid;
        echo "<br>";
        echo "<p style='font-size: 60%; position: relative; top: 30px; left: 30px; font-weight: 200; '>";
        echo $row["message"];
        echo "</p>";
        echo "</div>";
        echo "<div style='height: 16px; '>";
        echo "</div>";
        $pid = $pid + 1;
    }
} else {
    echo "0 结果";
}
echo "<a href='../repform.php?title=$title'>回帖</a>";
$conn->close();
?>
