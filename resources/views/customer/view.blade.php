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
<form action="{{ route('customer.list') }}" method="post" enctype="multipart/form-data" id="form">
    @csrf
    @method('patch')
   
        <input type="hidden" name="customer_id" value="{{$customer->customer_id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Customer name</label>
            <input type="text" value="{{$customer->name}}" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Email</label>
            <input type="text" value="{{$customer->email}}" class="form-control" id="exampleInputPrice" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputQuantity" class="form-label">Address</label>
            <input type="text" value="{{$customer->address}}" class="form-control" id="exampleInputQuantity" name="address">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Phone</label>
            <input type="text" value="{{$customer->phone}}" class="form-control" id="exampleInputPrice" name="phone" aria-describedby="emailHelp">

        </div>
        
    

    <a href="{{route('customer.list')}}" class="btn btn-primary">Back</a>
</form>

</body>
</html>
