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


<!-- SIDEBAR -->
      <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxl-c-plus-plus icon'></i>
              <span class="text">MMSU Scholarships</span>
        </a>
          <ul class="side-menu top">
              <li>
                <a href="/home">
            <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
              </a>
            </li>
            <li class="active" >
              <a href="/scholarships">
                <i class='bx bx-collection' ></i>
                    <span class="text">Scholarships</span>
            </a>
          </li>
        <li>
            <a href="/colleges">
                <i class='bx bx-grid' ></i>
                  <span class="text">Colleges</span>
            </a>
        </li>
          <li>
              <a href="/donor">
                <i class='bx bxs-heart' ></i>
                  <span class="text">Donors</span>
              </a>
        </li>

  </ul>
          <ul class="side-menu">
        <li>
            <a href="#">
              <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
              <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
          </a>
        </li>
      </ul>
</section>
<!-- SIDEBAR -->

<!-- CONTENT -->
<section id="content">
<!-- NAVBAR -->
      <nav>
          <i class='bx bx-menu' ></i>
              <a href="#" class="nav-link">Categories</a>
                  <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                          </div>
                  </form>
           
           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </a>
      </nav>
<!-- NAVBAR -->

<!-- MAIN -->
<main>
        <div class="head-title">
            <div class="left">
              <h1>Scholarship</h1>
                <ul class="breadcrumb">
            <li>
        <a href="/scholarships">Scholarships</a>
          </li>
              <li><i class='bx bx-chevron-right' ></i></li>
          <li>
              <a class="active" href="#">Home</a>
        </li>

        <table class="table table-hover">
          <thead class="thead-dark">
             <tr>
                <th scope="col">Scholarship Type</th>
                <th scope="col">Scholarship</th>
                <th scope="col">Discount</th>
                <th scope="col">Semester Charged</th>
                <th scope="col">Funded By</th>
                <th scope="col">Charged Full</th>
                <th scope="col">Active</th>
              </tr>
            </thead>
              <tbody>
                  @foreach($schlrship as $scholarship)
                  <tr>
                <td>{{$scholarship['scholarship_type']}}</td>
                <td>{{$scholarship['scholarship']}}</td>
                <td>{{$scholarship['discount']}}</td>
                <td>{{$scholarship['sem_charged']}}</td>
                <td>{{$scholarship['funded_by']}}</td>
                <td>{{$scholarship['chargedfull']}}</td>
                <td>{{$scholarship['active']}}</td>

              </tr>
                  @endforeach
          </table>


<script src="js/script.js"></script>
</body>
</html>
