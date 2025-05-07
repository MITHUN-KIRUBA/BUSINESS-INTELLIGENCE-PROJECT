<?php session_start(); require "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url('asserts/download2.jpeg'); /* local image src */
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

    .register-box {
      width: 400px;
      height: 500px;
      border: 2px solid #007bff;
      border-radius: 12px;
      background-color: rgba(255, 255, 255, 0.8); /* Transparent background for form */
      padding: 30px 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
      overflow-y: auto;
    }

    .register-box h2 {
      margin-bottom: 20px;
      color: #333;
    }

    /* Change the text color of labels to black */
    .register-box label {
      color: black;
      font-weight: bold;
    }

    .register-box input,
    .register-box select {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .register-box button {
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

    .register-box button:hover {
      background-color: #0056b3;
    }

    .register-box p {
      margin-top: 15px;
      color: red;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>

  <!-- Top Navigation Bar -->
  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="register-box">
      <h2>Register</h2>
      <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="role">Role:</label><br>
        <select name="role" id="role" required>
          <option value="student">Student</option>
          <option value="staff">Staff</option>
        </select><br>

        <button type="submit">Register</button><br>

        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $password = md5(trim($_POST['password']));
            $role = $_POST['role'];

            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
              echo "<p>User already registered.</p>";
            } else {
              $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
              $stmt->bind_param("sss", $username, $password, $role);
              if ($stmt->execute()) {
                echo "<p class='success'>Registration successful. You can now <a href='login.php'>Login</a></p>";
              } else {
                echo "<p>Registration failed. Please try again.</p>";
              }
            }
          }
        ?>
      </form>
    </div>
  </div>

</body>
</html>
