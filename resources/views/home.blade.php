@extends('layouts.sidebar')

@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" href="css/style.css">

<title>Admin</title>
</head>
<body>

<!-- CONTENT -->
      <section id="content">

<!-- MAIN -->
            <main>
              <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                        <ul class="breadcrumb">

              <li>
                  <a href="#">Dashboard</a>
              </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
              <li>
                  <a class="active" href="#">Home</a>
              </li>
              </ul>

              <ul class="box-info">
    <li>
        <i class='bx bx-trending-up' ></i>
            <span class="text">
              <h3>1020</h3>
                <p>Total number of Scholar</p>
        </span>
    </li>

    <li>
        <i class='bx bxs-bar-chart-alt-2' ></i>
            <span class="text">
              <h3>35</h3>
                <p>Number of Available Scholarship</p>
          </span>
    </li>

    <li>
        <i class='bx bx-question-mark' ></i>
          <span class="text">
            <h3>TBA</h3>
                <p>etc</p>
          </span>
    </li>
</ul>


</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="js/script.js"></script>
</body>
</html>
