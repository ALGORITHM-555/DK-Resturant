<script src="https://cdn.tiny.cloud/1/5ajpim3nhle5np3dy5ccwa5943hve073il0lt0bmjzbsp43g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>            
            <li class="breadcrumb-item active" aria-current="page">Block Settings</li>
            <li class="breadcrumb-item active" aria-current="page">Discount Block Settings</li>
            @if($mainPage != 'none')
            <li class="breadcrumb-item active" aria-current="page">{{$mainPage}}</li>
            @endif
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <div class="d-flex align-items-center"><img src="{{$pageIcon}}" alt="" style="max-width:22px;"><h4 class="col-12 pt-2 ps-2">{{$subPage}}</h4></div >            
        </div>
        <div>
            @if($buttonShow != 'none')
                <a href="{{$buttonLink}}" class="btn btn-gray-800 d-inline-flex align-items-center me-2" @stack('data-attributes')><svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> {{$buttonText}}</a>
            @endif
        </div>
    </div>
</div>