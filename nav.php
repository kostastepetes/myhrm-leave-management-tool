<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Navigation</title>
  <style>
    /* General body styling */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    /* Sidebar container */
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #343a40;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    /* Sidebar links */
    .sidebar a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #f1f1f1;
      display: block;
      transition: 0.3s;
    }

    /* Links hover effect */
    .sidebar a:hover {
      background-color: #495057;
      color: #ffffff;
    }

    /* Close button */
    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 0px;
      font-size: 36px;
      margin-left: 50px;
      color: #f1f1f1;
      cursor: pointer;
    }

    /* Button to open the sidebar */
    .openbtn {
      font-size: 18px;
      cursor: pointer;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      text-align: center;
      position: fixed;
      top: 20px;
      left: 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    /* Button hover effect */
    .openbtn:hover {
      background-color: #0056b3;
    }

    /* Dropdown content inside the sidebar */
    #dropdownContent {
      display: none;
      padding-left: 30px;
    }

    /* Dropdown link styling */
    #dropdownContent a {
      font-size: 16px;
      padding: 5px 0;
    }

    /* Dropdown hover effect */
    #dropdownContent a:hover {
      background-color: #6c757d;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Button to open the sidebar -->
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

  <!-- Sidebar menu -->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="index.php">Home</a>
    <a href="#" onclick="toggleDropdown()">Login ▼</a>
    <div id="dropdownContent">
      <a href="admin/index.php">Admin</a>
      <a href="client/index.php">Client</a>
    </div>
  </div>

  <script>
    /* Open the sidebar */
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
    }

    /* Close the sidebar */
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    }

    /* Toggle the dropdown menu */
    function toggleDropdown() {
      var dropdown = document.getElementById("dropdownContent");
      if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
      } else {
        dropdown.style.display = "none";
      }
    }
  </script>

</body>
</html>
