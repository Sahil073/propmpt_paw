.<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My PHP Bootstrap Site</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Optional external stylesheet -->
  <link rel="stylesheet" href="./assets/css/style.css" />

</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-2 mb-0">
    <div class="container ">
      <a class="navbar-brand" href="#"><img class="logo" src="assets/imgs/logo.png" alt="Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link " href="./index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link " href="./about.php">About us</a></li>

          <!-- Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu animate-dropdown" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="./erv.php">Equity Research & Valuation</a></li>
              <li><a class="dropdown-item" href="./crr.php">Credit Research & Rating </a></li>
              <li><a class="dropdown-item" href="./AI-efi.php">AI-Enhanced Financial Insights</a></li>
              <li><a class="dropdown-item" href="./mia.php">Market & Industry Analysis</a></li>
              <li><a class="dropdown-item" href="./portfolio.php">Portfolio Monitoring</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link " href="./blogs.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link " href="./contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Spacer -->
  <div style="height: 55px;"></div>

