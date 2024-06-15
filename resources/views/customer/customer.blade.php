<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Customer Registration form</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
   
  <form action="{{route('cutomer.store')}}" method="post" id="form_id" class="col-9">
  <h3 class="text-center justify-content-center" style="padding: 10px; margin: 10px;">Customer Registration form</h3>
    @csrf
    @method('POST')
    <div class="d-flex col-12">
  <div class="col-6 mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
    </div>
    <div class="col-6 mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
</div>
<div class="d-flex col-12">
    <div class="col-6 mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input type="text" name="address" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="col-6 mb-3">
      <label for="exampleInputPassword1" class="form-label">Phone number</label>
      <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
    </div>
</div>
<div class="d-flex col-12">
    <div class="col-6 mb-3">
      <select class="form-select" name="country_id" id="country-dd" aria-label="Default select example">
        <option value="" selected> select Country</option>
        @foreach($countries as $data)
        <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
      </select>
    </div>
     <div class="col-6 mb-3">
      <select class="form-select" name="state_id" id="state-dd" aria-label="Default select example">
        <option value="" selected> select State</option>
       
      </select>
    </div>
</div>
<div class="d-flex col-12">
    <div class="col-6 mb-3">
      <select class="form-select" name="city_id" id="city-dd" aria-label="Default select example">
        <option value="" selected> select City</option>
       
      </select>
    </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div id="message"></div>

  </form>
    

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country-dd').change(function(event){
 var idCountry=this.value;
 $('#state-dd').html('');
    $.ajax({
      url:"{{url('api/fetch-states')}}",
      method:"POST",
      dataType:"json",
      data:{country_id: idCountry, _token: "{{ csrf_token() }}"},
      success:function(response){
        $('#state-dd').html('<option value="">Select State</option>');
        $.each(response.states,function(index,val){
          $('#state-dd').append('<option value="'+val.id+'">'+val.name+'</option>');
        });
        $('#city-dd').html('<option value="">Select City</option>');

        
      } 

    })
    });
    $('#state-dd').change(function(event){
 var idState=this.value;
 $('#city-dd').html('');
    $.ajax({
      url:"{{url('api/fetch-cities')}}",
      method:"POST",
      dataType:"json",
      data:{state_id: idState, _token: "{{ csrf_token() }}"},
      success:function(response){
        $('#city-dd').html('<option value="">Select City</option>');
        $.each(response.cities,function(index,val){
          $('#city-dd').append('<option value="'+val.id+'">'+val.name+'</option>');
        });
        

        
      } 

    })
    });
});

</script>

<script>
  $(document).ready(function(){
    $('#form_id').submit(function(event){
      event.preventDefault();
      $.ajax({
        url: "{{ route('cutomer.store') }}",
        method: "POST",
        dataType: "json",
        data: $(this).serialize(),
        success: function(response){
          if(response.status === true){
            $('#message').html('<div class="alert alert-success">' + response.message + '</div>');
            window.location.href = "{{ route('customer.list') }}";
          } else {
            $('#message').html('<div class="alert alert-danger">' + response.message + '</div>');
          }
        },
        error: function(xhr){
          console.log(xhr); // Log the full response for debugging
          if (xhr.responseJSON && xhr.responseJSON.errors) {
            var errors = xhr.responseJSON.errors;
            var errorHtml = '<div class="alert alert-danger"><ul>';
            $.each(errors, function(key, value){
              errorHtml += '<li>' + value[0] + '</li>';
            });
            errorHtml += '</ul></div>';
            $('#message').html(errorHtml);
          } else {
            $('#message').html('<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>');
          }
        }
      });
    });
  });
</script>



  </body>
</html>
