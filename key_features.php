<!-- key_features.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Key Features - Classroom by Numbers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('asserts/CLASSROOM.jpeg') no-repeat center center fixed;
      background-size: cover;
      padding: 20px;
      margin: 0;
    }

    h2 {
      color: #007bff;
      text-align: center;
      margin-bottom: 30px;
      text-shadow: 1px 1px 2px #ffffff;
    }

    .feature-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.9); /* semi-transparent for readability */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 20px;
      width: 300px;
      position: relative;
    }

    .feature-card strong {
      display: block;
      font-size: 18px;
      color: #333;
      margin-bottom: 5px;
    }

    .feature-card p {
      color: #555;
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <h2>Key Features</h2>
  <div class="feature-container">
    <div class="feature-card">
      <strong>Subject-Wise Score Analysis</strong>
      <p>Shows average scores across Math, Science, English, Computer Science, and History.</p>
    </div>
    <div class="feature-card">
      <strong>Overall Performance & Dropout Risk</strong>
      <p>Visualizes student performance and categorizes dropout risk levels (High, Medium, Low).</p>
    </div>
    <div class="feature-card">
      <strong>Study Hours Per Week</strong>
      <p>Pie chart representation of how much time students spend studying weekly.</p>
    </div>
    <div class="feature-card">
      <strong>Homework vs Average Marks</strong>
      <p>Radial graph indicating correlation between homework completion and average scores.</p>
    </div>
    <div class="feature-card">
      <strong>Library Usage</strong>
      <p>Bubble chart to show how frequently students use library resources (in hours/week).</p>
    </div>
    <div class="feature-card">
      <strong>Travel to School Metrics</strong>
      <p>Line chart visualizing distance from school and commute time.</p>
    </div>
    <div class="feature-card">
      <strong>Parent Income Impact</strong>
      <p>Waterfall chart showing how income changes affect student academic performance.</p>
    </div>
    <div class="feature-card">
      <strong>Behavioral Incidents</strong>
      <p>Bar chart analyzing incidents and mentor feedback remarks.</p>
    </div>
    <div class="feature-card">
      <strong>Mentor Motivation Rate</strong>
      <p>Displays how many students received encouragement or support from mentors.</p>
    </div>
    <div class="feature-card">
      <strong>Attendance Rate Network</strong>
      <p>Network diagram showing last year’s attendance percentage for each student.</p>
    </div>
    <div class="feature-card">
      <strong>Treemap of Overall Scores</strong>
      <p>Tree-based visual to represent performance distribution.</p>
    </div>
  </div>
</body>
</html>
