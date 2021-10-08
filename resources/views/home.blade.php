@extends('layouts.app')

<link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
@section('content')
<div class="sidebar">
    <!--<div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Scholarship</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    
        <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
    --> 
        <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
      
     <!-- <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li> -->
        <li>
         <a href="#">
         <i class='bx bx-plus-circle' ></i>
         <span class="links_name">Add Scholar</span>
       </a>
       <span class="tooltip">Add Scholar</span>
     </li>
      
     <li>
       <a href="#">
         <i class='bx bx-collection' ></i>
         <span class="links_name">Scholarship Programs</span>
       </a>
       <span class="tooltip">Scholarship Programs</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-grid' ></i>
         <span class="links_name">Colleges</span>
       </a>
       <span class="tooltip">Colleges</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-heart' ></i>
         <span class="links_name">Donors</span>
       </a>
       <span class="tooltip">Donors</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     
    </ul>
  </div>
 <!--<section class="home-section">
      <div class="text">Dashboard</div>
  </section> -->
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 