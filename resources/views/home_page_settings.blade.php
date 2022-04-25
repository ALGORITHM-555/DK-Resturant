
@push('title')
<title>Home Page Settings</title>
@endpush
@extends('main')
@section('main-section')    
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>            
            <li class="breadcrumb-item active" aria-current="page">Home Page Settings</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Home Page Settings</h1>
            <p class="mb-0">Dozens of reusable components built to provide blocks, images and more.</p>
        </div>
        <div>
            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/buttons/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Buttons Docs</a>
        </div>
    </div>
</div>
<div class="block-container row ">    
        <div class="card mt-3 mx-2 " style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="100">
            <img src="{{url('/img/home_blocks/food-1.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-1.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Header Block</h4>              
              <a href="{{route('header_page.settings')}}" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3 position-relative" style="background:#f5d3a4 !important;border:#f5d3a4 !important">Show: Off</a>
            </div>
          </div>
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="200">
            <img src="{{url('/img/home_blocks/food-2.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-2.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Banner Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>          
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="{{url('/img/home_blocks/food-1.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-1.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">About Us Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="400">
            <img src="{{url('/img/home_blocks/food-2.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-2.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Service Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="500">
            <img src="{{url('/img/home_blocks/food-1.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-1.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Team Member Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>          
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="600">
            <img src="{{url('/img/home_blocks/food-2.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-2.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Testimonial Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>          
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="700">
            <img src="{{url('/img/home_blocks/food-1.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-1.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Contact Us Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>
          <div class="card mt-3 mx-2" style="width: 18rem;" data-aos="zoom-in-up" data-aos-delay="800">
            <img src="{{url('/img/home_blocks/food-2.jpg')}}" class="card-img-top" alt="{{url('/img/home_blocks/food-2.jpg')}}">
            <div class="card-body">
              <h4 class="card-title">Footer Block</h4>              
             <a href="#" class="btn btn-primary">Settings</a>
              <a href="#" class="btn btn-secondary ms-3">Show: On</a>
            </div>
          </div>
          
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 0,
    duration: 300, 
  });
</script>
@endsection