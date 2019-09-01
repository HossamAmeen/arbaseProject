<nav class="navigation">
  <div class="container-fluid">
      <!--Logo text start-->
      <div class="header-logo">
          <a href="index.html" title="">
              <h1>baseProject</h1>
          </a>
      </div>
      <!--Logo text End-->
      <div class="top-navigation">
          <!--Collapse navigation menu icon start -->
          <div class="menu-control hidden-xs">
              <a href="javascript:void(0)">
                  <i class="fa fa-bars"></i>
              </a>
          </div>
          {{-- <div class="search-box">
              <ul>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                          <span class="fa fa-search"></span>
                      </a>
                      <div class="dropdown-menu  top-dropDown-1">
                          <h4>Search</h4>
                          <form>
                              <input type="search" placeholder="what you want to see ?">
                          </form>
                      </div>

                  </li>
              </ul>
          </div> --}}

          <!--Collapse navigation menu icon end -->
          <!--Top Navigation Start-->

          <ul>
              <li>
                  <a href="{{ url('admin/lock') }}">
                      <i class="fa fa-lock"></i>
                  </a>
              </li>
              <li>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
              </li>

          </ul>
          <!--Top Navigation End-->
      </div>
  </div>
</nav>