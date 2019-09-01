<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark-custum ">
        <a class="navbar-brand " href="{{route('index')}}">
          <img class="navbar-brand-img" src="{{asset('web/assets/imgs/logo.png')}}" alt="صلحلي">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{is_active_web('index') }}  {{is_active_web_index()}}"> 
              <a class="nav-link" href="{{route('index')}}">الصفحة الرئيسية </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url(get_url() . '#category') }}"
                onclick="$('html, body').animate({scrollTop: $('#category').offset().top}, 'slow');">الخدمات</a>
            </li>
            <li class="nav-item {{is_active_web('services')}}">
              <a class="nav-link" href="{{route('services')}}">المنتجات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"   href="{{url(get_url() . '#') }}"
                onclick="$('html, body').animate({scrollTop: $('#Big-carousel').offset().top}, 'slow');">شركاء النجاح</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url(get_url() . '#about') }}"
                onclick="$('html, body').animate({scrollTop: $('#aboutUs').offset().top}, 'slow');">من نحن</a>
            </li>
            @if( session('client_name') != null)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
               {{session('client_name')}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('profile')}}">الحساب</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editAccounr" onclick="getDataUpdate()">تعديل الحساب</a>
              <a class="dropdown-item" href="{{route('userlogout')}}"> تسجيل الخروج </a>
              </div>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link"  href="{{route('userlogin')}}"
                  >تسجيل الدخول </a>
              </li>
            @endif
          </ul>
        </div>
 </nav>