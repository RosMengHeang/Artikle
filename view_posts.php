<?php
// view_posts.php
include 'db.php'; // Include your database connection file

// Fetch all posts along with the username of the author
$sql = "SELECT posts.id, posts.title, posts.body,posts.created_at, users.username 
        FROM posts 
        INNER JOIN users ON posts.user_id = users.id 
        ORDER BY posts.created_at DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
</head>
<body>
    <h2>All Posts</h2>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $row['title'] . "</h3>";
            echo "<p>" . $row['body'] . "</p>";
            echo "<small>Posted by: " . $row['username'] . "</small>";
            echo "<p>posted on : " . $row['created_at'] . '</p>';
            echo "<hr>";
            echo "</div>";
        }
    } else {
        echo "No posts found.";
    }

    $conn->close();
    ?>
</body>
</html>
