<?php
session_start();
require "includes/db.php";

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));
    $role = $_POST['role'];

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? AND password = ? AND role = ?");
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid login details.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url('asserts/download3.jpeg'); /* Background image */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
    }

    .navbar {
      width: 100%;
      background-color: rgba(0, 123, 255, 0.8); /* Semi-transparent navbar */
      padding: 15px 0;
      text-align: center;
      color: white;
      font-size: 18px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 60px); /* Adjust height below navbar */
      padding: 30px;
      box-sizing: border-box;
    }

    .login-box {
      width: 400px; /* Set fixed width */
      height: 500px; /* Set fixed height */
      border: 2px solid #007bff;
      border-radius: 12px;
      background-color: rgba(255, 255, 255, 0.8); /* Transparent background for form */
      padding: 30px 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
      overflow-y: auto;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .login-box label {
      text-align: left;
      width: 90%;
      display: inline-block;
      margin-bottom: 5px;
      color: #333;
    }

    .login-box input,
    .login-box select {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .login-box button {
      width: 90%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-box button:hover {
      background-color: #0056b3;
    }

    .login-box p {
      margin-top: 15px;
      color: red;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="role">Role:</label><br>
        <select name="role" id="role" required>
          <option value="student">Student</option>
          <option value="staff">Staff</option>
        </select><br><br>

        <button type="submit">Login</button><br><br>

        <?php if ($message) echo "<p style='color: red;'>$message</p>"; ?>
      </form>
    </div>
  </div>
</body>
</html>
