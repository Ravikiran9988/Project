<?php
session_start();

// Include connection and function files
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Fetch username and password from form
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Validate user credentials against database
        $query = "SELECT * FROM users WHERE username = '$user_name' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            
            // Verify password
            if(password_verify($password, $user_data['password'])) {
                // Password is correct, set session variables
                $_SESSION['user_id'] = $user_data['user_id'];
                $_SESSION['username'] = $user_data['username'];

                // Redirect to profile page or dashboard
                header("Location: profile.php");
                exit; // Ensure no further code execution after redirection
            } else {
                // Password is incorrect
                echo "Invalid username or password!";
            }
        } else {
            // User not found
            echo "Invalid username or password!";
        }
    } else {
        // Empty username or password
        echo "Invalid username or password!";
    }
}
?>
