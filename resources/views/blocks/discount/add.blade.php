<div class="modal fade" id="AddDiscountOfferModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title col-10" id="modalLabel"><img src="{{url('/img/admin/block/offer.svg')}}" alt="" style="max-width:22px;"> <span class="discountModalLabel">Add Discount Offers</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">    
          <div class="col-12">
            <div class="row mt-4">
              <div class="col-md-6">
                {!! Form::open(['route'=>'addPost.DiscountOffer','enctype' => 'multipart/form-data']) !!}                    
                  {!! Form::label('discount_title', 'Discount Title') !!} <br />
                  {!! Form::text('discount_title',null,['class'=>'form-input','id'=>'discount_title']) !!}
              </div>
              <div class="col-md-6">
                {!! Form::label('discount_price', 'Discount Price') !!} <br />
                {!! Form::text('discount_price',null,['class'=>'form-input','id'=>'discount_price']) !!}
            </div>
            </div>
              <div class="row mt-4">                    
                  <div class="col-md-6">
                      {!! Form::label('button_text','Button Text') !!} <br />
                      {!! Form::text('button_text',null,['class'=>'form-input','id'=>'button_text']) !!}                        
                  </div>  
                  <div class="col-md-6">
                      {!! Form::file('product_image',['class'=>'form-input','id'=>'upload_img']) !!}
                      {!! Form::hidden('discount_id',null,['class'=>'form-input','id'=>'discount_id']) !!}                        
                      {!! Form::hidden('image',null,['class'=>'form-input','id'=>'imageFile']) !!}                        
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addUpdate_btn">Save</button>
      </div>
    </div>
  </div>
</div>
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#upload_img').fileinput({
    uploadUrl: "/product-image",
    allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg' , 'svg'],     
    maxFileCount: 1,
    showCancel: true,    
    overwriteInitial: true,    
    showRemove: true,    
    browseOnZoneClick: true,
    uploadAsync: true,  
  }).on('fileuploaded', function(event, data) {                
      let file_name = data.response.file_name;
      $('#imageFile').val(file_name);      
  }).on("filebatchselected", function(event, files) {
    $('#upload_img').fileinput("upload");
  }); 

</script>
