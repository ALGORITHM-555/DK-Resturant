@push('title')
<title>Home Page Settings</title>
@endpush
@extends('main')
@section('main-section')    

<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-3">
    <h6>Show On Home Page</h6>
    <div class="rdo-btns mt-3">
        {!! Form::open(['url'=>route('save.settings'),'method'=>'POST']) !!}
        {!! Form::radio('block_status',1,null,['class'=>' me-2','id'=>'rdo_btn_yes']) !!}{!! Form::label('rdo_btn_yes', 'Yes') !!}
        {!! Form::radio('block_status', 0 ,true,['class'=>'ms-4 me-2','id'=>'rdo_btn_no']) !!}{!! Form::label('rdo_btn_no', 'No') !!}                
    </div>    
</div>
<input type="hidden" name="slug" value="{{$slug}}">

{!!  Form::submit('Save',['class'=>'btn btn-primary'])  !!}
{!! Form::close() !!}
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
@endsection