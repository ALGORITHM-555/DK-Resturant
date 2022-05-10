@push('title')
<title>Discount Block Settings</title>
@endpush
@extends('main')
@section('main-section')    
@push('data-attributes')
id="AddDiscountOffer"
@endpush

<x-discount-top-bar pageIcon="{{url('/img/admin/block/offer.svg')}}" mainPage="Add Discount Offer" subPage="Add Discount Offer" buttonShow="show" buttonText="Add New" buttonLink="{{route('add.DiscountOffer')}}" />
<div class="bg-white rounded shadow p-3 mb-4 mt-2 col-10">
    <table class="table table-striped table-bordered data-table table-sm" cellspacing="0">
        <thead>
            <tr>
                <th class="th-sm">S.No</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Price</th>
                <th class="th-sm">Action</th>
            </tr>
        </thead> 
        <tbody>
            @if(isset($discount_arr))
            @php $i = 0; @endphp
            @foreach($discount_arr as $discount)            
            <tr class="d_block_{{$discount->id}}">
                <td>{{$i+1}}</td>
                <td class="discount_title">{{$discount->discout_title}}</td>
                <td class="discount_price">{{$discount->discount_price}}</td>
                <td>                    
                    <a href="" class="btn btn-success" data-id="{{$discount->id}}" id="edit_offer" >Edit</a>
                    <a href="javascript:;" class="btn btn-danger" id="delete-offer" data-id="{{$discount->id}}">Delete</a>                    
                </td>
            </tr>  
            @php $i++; @endphp          
            @endforeach
            @endif
        </tbody>   
    </table>
    
    {{-- Add Offers Modal --}}
    @include('blocks.discount.add')
</div>
<script>
$(document).ready(function(){

    var table = $('.data-table').DataTable({
        
    });
    
    $(document).on('click','.disave_btn',function(e){
    e.preventDefault();
    var discount_title = $("[name='discount_title']").val();
    var discount_price = $("[name='discount_price']").val();
    var button_text = $("[name='button_text']").val();            
    var image = $("[name='image']").val();            
    if(button_text != '' && discount_price != '' &&  discount_title != ''){
        $.ajax({
            url:'/block-settings/add-discount-offer',
            type:"POST",
            data:{'button_text':button_text,'discount_title':discount_title,'discount_price':discount_price,'image':image},
            headers: {
            'X-CSRF-TOKEN': $("[name='_token']").val()
            },
            success:function(result){                               
                if(result.msg =="suc"){
                Notifier('Added Successfully','Discount Offer Added Successfully','success');
                let last_record = JSON.parse(result.last_record);              
                let record = '<tr class="d_block_'+last_record.id+'">';
                    record += '<td>'+last_record.id+'</td>';
                    record += '<td class="discount_title">'+last_record.discout_title+'</td>';
                    record += '<td class="discount_price">'+last_record.discount_price+'</td>';
                    record += '<td> <a href="javascript:;" class="btn btn-success" id="edit_offer" data-id="'+last_record.id+'">Edit</a> <a href="javascript:;" class="btn btn-danger" id="delete-offer" data-id="'+last_record.id+'">Delete</a></td>';                
                    $('tbody').append(record);
                    $('.btn-close').click();
                }else{
                    Notifier('Error','Something Went Wrong','error');                  
                }
            }
        });
    }else{        
        Notifier('Error','All Fields Are Required','error');                  
        $('.disave_btn').attr('disable',true);
    }
    });
    $(document).on('click','#delete-offer',function(e){        
        e.preventDefault();
        let id = $(this).attr('data-id');
            $.ajax({
                url:'/block-settings/delete-discount-offer/'+id,
                type:"GET",                
                headers: {
                'X-CSRF-TOKEN': $("[name='_token']").val()
                },
                success:function(result){
                    if(result == 'suc'){  
                        $('.d_block_'+id).fadeOut();
                        Notifier('Deleted Successfully','Discout Offer Deleted Successfully','success');                        
                    }
                }
            });
        })        
    });

    //Edit Discount Offer
    $(document).on('click','#AddDiscountOffer',function(e){
        e.preventDefault();
        $('#AddDiscountOfferModal').modal('show');
        $('.discountModalLabel').text('Add Discount Offers')
        $('#addUpdate_btn').text('Save');       
        $('#addUpdate_btn').removeClass('update_discount').addClass('disave_btn'); 
    });
    $(document).on('click','#edit_offer',function(e){
        e.preventDefault();
        $('#upload_img').fileinput('reset');
        var data_id = $(this).attr('data-id');
        var discount_title = $('.d_block_'+data_id+' .discount_title').text();
        var discount_price = $('.d_block_'+data_id+' .discount_price').text();
        $('#discount_id').val(data_id);
        $('#discount_title').val(discount_title);
        $('#discount_price').val(discount_price);
        $('#button_text').val('Order Now');
        $('#AddDiscountOfferModal').modal('show');
        $('.discountModalLabel').text('Update Discount Offers')
        $('#addUpdate_btn').text('Update');
        $('#addUpdate_btn').removeClass('disave_btn').addClass('update_discount');        
    });

    $(document).on('click','.update_discount',function(e){
        e.preventDefault();        
        var discount_title = $("[name='discount_title']").val();
        var discount_price = $("[name='discount_price']").val();
        var button_text = $("[name='button_text']").val();        
        var image = $("[name='image']").val();            
        var data_id = $('#discount_id').val();    
        $.ajax({
            url:'/block-settings/update-discount-offer',
            type:"POST",
            data:{'button_text':button_text,'discount_title':discount_title,'discount_price':discount_price,'id':data_id,'image':image},
            headers: {
            'X-CSRF-TOKEN': $("[name='_token']").val()
            },
            success:function(result){                               
                if(result.msg =="suc"){
                    Notifier('Update Successfully','Discount Offer Update Successfully','success');                                        
                    let record = '<td>'+data_id+'</td>';
                    record += '<td class="discount_title">'+discount_title+'</td>';
                    record += '<td class="discount_price">'+discount_price+'</td>';                    
                    record += '<td> <a href="javascript:;" class="btn btn-success" id="edit_offer" data-id="'+data_id+'">Edit</a> <a href="javascript:;" class="btn btn-danger" id="delete_offer" data-id="'+data_id+'">Delete</a></td>';                
                    $('.d_block_'+data_id).html(record);
                    $('#AddDiscountOfferModal').modal('hide');
                }else{
                    Notifier('Error','Something Went Wrong','error');                  
                }                
            }
        });
    });


</script>
@endsection