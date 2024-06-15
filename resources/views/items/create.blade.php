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

    <title>Product Add</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    
  <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data" id="form">
    @csrf
    @method('POST')
    
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Product Title</label>
      <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Quantity</label>
      <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Product Details</label>
      <textarea  name="description" class="form-control" id="exampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
    <label for="image" class="form-label">Choose Image</label>
    <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
  <div id="message"></div>

    

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#form').on('submit', function(event) {
            event.preventDefault();
            
            let formData = new FormData(this);
            
            $.ajax({
                url: "{{route('items.store')}}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'  // For Laravel CSRF protection
                },
                success: function(response) {
                    $('#message').html('<div class="alert alert-success">' + response.success + '</div>');
                    // Optionally, redirect to the items index page
                    window.location.href = '/item/list';
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '';
                    for (let error in errors) {
                        errorMessages += '<p>' + errors[error][0] + '</p>';
                    }
                    $('#message').html('<div class="alert alert-danger">' + errorMessages + '</div>');
                }
            });
        });
    });
</script>
  </body>
</html>
