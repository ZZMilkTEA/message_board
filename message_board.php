<?php
require "DB_connect.php";
?>

<!DOCTYPE html>
<head>
    <title>留言板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>
    留言板
</h1>
<article>
    <?php
    $sql = "SELECT * FROM content;";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo
            "
    <div class='commentBox'>
        <p>序号：" . $row["id"] . "</p> 
        <p>作者：" . $row["user"] . "</p> 
        <p>" . $row["text"] . "</p>
        <p>评论时间：" . $row["date"] . " </p>
    </div>
    ";
    }
    mysqli_close($conn);
    ?>
</article>
<?php

?>
</body>