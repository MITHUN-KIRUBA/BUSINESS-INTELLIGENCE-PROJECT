<!-- usage.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Usage - Classroom by Numbers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('asserts/download9.jpeg') no-repeat center center fixed;
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

    .usage-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .usage-card {
      background: rgba(255, 255, 255, 0.9); /* semi-transparent for readability */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 20px;
      width: 330px;
      position: relative;
    }

    .usage-card strong {
      display: block;
      font-size: 18px;
      color: #333;
      margin-bottom: 5px;
    }

    .usage-card p {
      color: #555;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <h2>Usage</h2>
  <div class="usage-container">
    <div class="usage-card">
      <strong>Subject-Wise Score Analysis (Table)</strong>
      <p>Displays the average scores in Math, Science, English, Computer Science, and History to identify strong and weak areas.</p>
    </div>
    <div class="usage-card">
      <strong>Overall Performance & Dropout Risk (Stacked Area/Line Chart)</strong>
      <p>Visualizes student performance levels and flags high dropout risks for early intervention.</p>
    </div>
    <div class="usage-card">
      <strong>Study Hours Per Week (Pie Chart)</strong>
      <p>Analyzes weekly study hours, offering insights into student dedication and time management.</p>
    </div>
    <div class="usage-card">
      <strong>Homework vs Average Marks (Radial Chart)</strong>
      <p>Examines the impact of homework completion on academic performance.</p>
    </div>
    <div class="usage-card">
      <strong>Library Usage (Bubble Chart)</strong>
      <p>Tracks library engagement and its correlation with better academic outcomes.</p>
    </div>
    <div class="usage-card">
      <strong>Travel to School Metrics (Line Chart)</strong>
      <p>Analyzes how commute distance and time affect punctuality and energy levels.</p>
    </div>
    <div class="usage-card">
      <strong>Parent Income Impact (Waterfall Chart)</strong>
      <p>Shows how income fluctuations influence academic consistency and focus.</p>
    </div>
    <div class="usage-card">
      <strong>Behavioral Incidents (Bar Chart)</strong>
      <p>Identifies students needing behavioral support through incident patterns and mentor comments.</p>
    </div>
    <div class="usage-card">
      <strong>Mentor Motivation Rate (Bar Percentage Chart)</strong>
      <p>Highlights how mentorship affects student morale and motivation levels.</p>
    </div>
    <div class="usage-card">
      <strong>Attendance Rate Network (Network Diagram)</strong>
      <p>Visualizes attendance patterns across students to address absenteeism.</p>
    </div>
    <div class="usage-card">
      <strong>Treemap of Overall Scores (Treemap)</strong>
      <p>Helps in quickly locating clusters of high or low performance visually.</p>
    </div>
    <div class="usage-card">
      <strong>Average Score (KPI Card)</strong>
      <p>Displays the overall average score to quickly assess classroom-level performance.</p>
    </div>
    <div class="usage-card">
      <strong>Grade-Level Mapping (Network/Tree Chart)</strong>
      <p>Shows which academic levels correspond to student scores for progress tracking.</p>
    </div>
    <div class="usage-card">
      <strong>All Subject Scores (Bar Chart - Measures)</strong>
      <p>Compares scores across all subjects to find trends and learning gaps.</p>
    </div>
  </div>
</body>
</html>
