@push('title')
<title>Home Page Settings</title>
@endpush
@extends('main')
@section('main-section')    
<script src="https://cdn.tiny.cloud/1/5ajpim3nhle5np3dy5ccwa5943hve073il0lt0bmjzbsp43g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>            
            <li class="breadcrumb-item active" aria-current="page">Home Page Settings </li>
            <li class="breadcrumb-item active" aria-current="page">Header Settings </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <div class="d-flex align-items-center"><img src="{{url('/img/settings_icon/setting-2.svg')}}" alt="" style="max-width:22px;"><h4 class="col-12 pt-2 ps-2">Header Settings</h4></div >            
        </div>
        <div>
            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/buttons/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Buttons Docs</a>
        </div>
    </div>
</div>
<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-3">
    <h6>Show On Home Page</h6>
    <div class="rdo-btns mt-3">
        {!! Form::radio('header_status',1,null,['class'=>'rdo_btn_yes me-2']) !!}{!! Form::label('rdo_btn_yes', 'Yes') !!}
        {!! Form::radio('header_status', 0 ,true,['class'=>'rdo_btn_no ms-4 me-2']) !!}{!! Form::label('rdo_btn_no', 'No') !!}        
    </div>    
</div>
<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-12">
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
      </form>
      
      <script>
        tinymce.init({
          selector: '#mytextarea',
          plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
      </script>
      
</div>
@endsection