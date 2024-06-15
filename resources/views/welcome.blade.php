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

    <title>Hello, world!</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    

  <form>
    <div class="mb-3">
      <select class="form-select" id="country-dd" aria-label="Default select example">
        <option value="" selected> select Country</option>
        @foreach($countries as $data)
        <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
      </select>
    </div>
     <div class="mb-3">
      <select class="form-select" id="state-dd" aria-label="Default select example">
        <option value="" selected> select State</option>
       
      </select>
    </div>
    <div class="mb-3">
      <select class="form-select" id="city-dd" aria-label="Default select example">
        <option value="" selected> select City</option>
       
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
   
  </body>
</html>
