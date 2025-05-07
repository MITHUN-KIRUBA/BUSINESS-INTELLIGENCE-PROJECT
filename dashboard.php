<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classroom by the Numbers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      position: relative;
    }
    .logout-btn {
      position: absolute;
      right: 20px;
      top: 20px;
      background-color: #cc0000;
      color: white;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
    }
    .logout-btn:hover {
      background-color: #990000;
    }
    .content {
      padding: 20px;
      text-align: center;
    }
    iframe {
      width: 90%;
      height: 600px;
      border: none;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    footer {
      text-align: center;
      padding: 10px;
      background-color: #003366;
      color: white;
      position: fixed;
      bottom: 0;
      width: 100%;
      font-size: 14px;
    }
  </style>
</head>
<body>

<header>
  Classroom by the Numbers
  <button class="logout-btn" onclick="window.location.href='index.php'">Logout</button>
</header>

<div class="content">
  <p>Explore student data and insights through the interactive dashboard below:</p>
  <iframe 
    src="https://us1.ca.analytics.ibm.com/bi/?perspective=dashboard&amp;pathRef=.my_folders%2FBI%2BPROJECT&amp;closeWindowOnLastView=true&amp;ui_appbar=false&amp;ui_navbar=false&amp;shareMode=embedded&amp;action=view&amp;mode=dashboard&amp;subView=model000001963076d1c1_00000000" 
    allowfullscreen>
  </iframe>
</div>

<footer>
  &copy; 2025 Classroom Insights Dashboard
</footer>

</body>
</html>
