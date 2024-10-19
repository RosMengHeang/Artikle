<!-- new_post.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Post</title>
</head>
<body>
    <h2>Create a New Post</h2>
    <form method="POST" action="HomePage.php">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="body">Content:</label>
            <textarea id="body" name="body" required></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
    <a href="view_posts.php"><button>View Your Post</button></a>
</body>
</html>
<?php
// create_post.php
session_start();
include 'db.php'; // Include your database connection file

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    echo "Please log in to create a post.";
    exit();
}

// Get the logged-in user's ID (assuming you have it stored in the session)
$username = $_SESSION['username'];

// Fetch the user ID based on the username
$user_query = "SELECT id FROM users WHERE username = '$username'";
$user_result = $conn->query($user_query);

if ($user_result->num_rows == 0) {
    echo "User not found.";
    exit();
}

$user_row = $user_result->fetch_assoc();
$user_id = $user_row['id'];

// Get the form data
$title = $_POST['title'];
$body = $_POST['body'];

// Insert the new post into the database
$sql = "INSERT INTO posts (user_id, title, body) VALUES ('$user_id', '$title', '$body')";

if ($conn->query($sql) === TRUE) {
    echo "New post created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
