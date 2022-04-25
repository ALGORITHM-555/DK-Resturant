@include('front-end.header')
<body class="sub_page">
<div class="hero_area">
  <div class="bg-box">
    <img src="{{url('/img/front_end/hero-bg.jpg')}}" alt="">
  </div>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
     @include('front-end.sub-header')
    </div>
  </header>
  <!-- end header section -->
</div>
</header>
<!-- end header section -->
</div> 
@yield('sub-page-content')
@include('front-end.footer')