<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>myHRM | Leave Management System</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #f4f4f4;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .heading {
      margin: 20px 0;
      text-align: center;
      color: #333;
    }

    h1 {
      font-size: 3em;
      color: #0073e6;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 2em;
      color: #333;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 40px;
    }

    nav {
      text-align: center;
      margin-bottom: 40px;
    }

    nav ul {
      list-style: none;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #0073e6;
      font-size: 1.2em;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #005bb5;
    }

    footer {
      text-align: center;
      padding: 20px 0;
      background-color: #0073e6;
      color: white;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <header class="heading">
      <h1>myHRM</h1>
    </header>

    <?php include 'nav.php';?>

    <section class="heading">
      <h2>Leave Management Tool</h2>
      <p>A Small Leave Management System, fully created in PHP</p>
    </section>
  </div>

  <footer>
    &copy; <?php echo date('Y'); ?> myHRM. All rights reserved.
  </footer>
</body>
</html>
