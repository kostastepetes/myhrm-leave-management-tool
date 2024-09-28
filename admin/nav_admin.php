<!DOCTYPE html>
<html>
<head>
<style>
/* General body styling */
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

/* Top Navigation Bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0073e6;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 17px;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: #f1f1f1;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color: #f1f1f1;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #495057;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #495057;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #f1f1f1;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #6c757d;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="../index.php">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Login ▼</a>
    <div class="dropdown-content">
      <a href="index.php">Admin</a>
      <a href="../client/index.php">Client</a>
    </div>
  </li>
</ul>

</body>
</html>
