<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-9">    
    <h5>Block Header Settings</h5>    
    <div class="row mt-4">
        {!! Form::label('title', 'Title') !!}
        <div class="clearfix"></div>
        <div class="form-input">
            {!! Form::text('title',$title ? $title : '',['class'=>'col-12']) !!}
        </div>
    </div>      
    <div class="row mt-4">
        {!! Form::label('sub_title', 'Sub Title') !!}
        <div class="clearfix"></div>
        <div class="form-input">
            {!! Form::text('sub_title',$subTitle ? $subTitle : '',['class'=>'col-12']) !!}
        </div>
    </div>
    <div class="col-12 py-3"></div>
    
</div>