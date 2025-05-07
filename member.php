<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Our Team</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .team-section {
      background-image: url('asserts/DOWNLOAD6.jpeg'); /* Replace with your path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      padding: 50px 20px;
      color: white;
    }

    .team-section h2 {
      font-size: 36px;
      margin-bottom: 40px;
      text-align: center;
      color: white;
    }

    .team-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }

    .card {
      background: rgba(0, 0, 0, 0.6);
      padding: 20px;
      width: 200px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .profile-icon {
      background-color: #007bff;
      color: white;
      width: 60px;
      height: 60px;
      line-height: 60px;
      border-radius: 50%;
      margin: 0 auto 15px;
      font-size: 20px;
      font-weight: bold;
    }

    .card h4 {
      margin: 10px 0 5px;
      color: #fff;
    }

    .card p {
      color: #ccc;
    }
  </style>
</head>
<body>

<div class="team-section">
  <h2>Project Team Members</h2>
  <div class="team-cards">
    
    <a href="https://github.com/GOPIKASRI-T" style="text-decoration: none; color: inherit;">
      <div class="card">
        <div class="profile-icon">GT</div>
        <h4>GOPIKASRI T</h4>
        <p>927623BAD037</p>
      </div>
    </a>

    <a href="https://github.com/JAINIVASH-2006/JAINIVASH-2006" style="text-decoration: none; color: inherit;">
      <div class="card">
        <div class="profile-icon">JR</div>
        <h4>JAINIVASH R</h4>
        <p>927623BAD043</p>
      </div>
    </a>

    <a href="https://github.com/MITHUN-KIRUBA" style="text-decoration: none; color: inherit;">
      <div class="card">
        <div class="profile-icon">MS</div>
        <h4>MITHUN KIRUBA S K</h4>
        <p>927623BAD061</p>
      </div>
    </a>

  </div>
</div>

</body>
</html>
