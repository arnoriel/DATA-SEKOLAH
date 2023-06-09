<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/home" class="logo d-flex align-items-center">
        <img src="{{asset('images/smkpi.png')}}" alt="">
        <span class="d-none d-lg-block">SMK PI</span>
      </a>
    </div><!-- End Logo -->
  
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
  
        <li class="nav-item dropdown">
  
        <li class="nav-item dropdown pe-3">
  
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->
  
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name}}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
  
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/settings">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
  
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/settings">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
  
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
  
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             <i class="bi bi-box-arrow-right"></i>
             {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
  
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
  
      </ul>
    </nav><!-- End Icons Navigation -->
  
  </header><!-- End Header -->