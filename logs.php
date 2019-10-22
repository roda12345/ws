<?php

require("db.php");
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h6><a href='delete1.php?id=" . $row['id'] . "'>x</a></h6>";
echo "<h5>" . $row['name'] . "</h5>";
echo "<h6>" . $row['date'] . "</h6></br></br>";
echo "<h6>" . $row['comments'] . "</h6>";
echo "</div>";
}
mysqli_close($conn);

?>