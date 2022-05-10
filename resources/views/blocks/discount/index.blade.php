 @push('title')
<title>Discount Block Settings</title>
@endpush
@extends('main')
@section('main-section')    

{{-- discout-top-bar --}}
<x-discount-top-bar pageIcon="{{url('/img/settings_icon/setting-2.svg')}}" mainPage="none" subPage="Discount Block Settings" buttonShow="show" buttonText="Add Discount Offers" buttonLink="{{route('show.DiscountOffer')}}" />

<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-3">
    <h6>Show On Home Page</h6>
    <div class="rdo-btns mt-3">
        {!! Form::open(['url'=>route('discountPost.settings'),'method'=>'POST']) !!}
        {!! Form::radio('status',1, ($blockStatus->status == "1") ? true : '',['class'=>' me-2','id'=>'rdo_btn_yes']) !!}{!! Form::label('rdo_btn_yes', 'Yes') !!}
        {!! Form::radio('status', 0 , ($blockStatus->status == "0") ? true : '',['class'=>'ms-4 me-2','id'=>'rdo_btn_no']) !!}{!! Form::label('rdo_btn_no', 'No') !!}                
    </div>    
</div>
<x-title title="{{$blockStatus->value['title']}}" subTitle="{{$blockStatus->value['sub_title']}}" />
{!!  Form::submit('Save',['class'=>'btn btn-primary'])  !!}
{!! Form::close() !!}
@endsection                         