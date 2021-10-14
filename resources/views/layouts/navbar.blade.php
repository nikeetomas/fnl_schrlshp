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
