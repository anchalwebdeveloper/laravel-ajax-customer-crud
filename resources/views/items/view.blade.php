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
<form action="{{ route('items.index') }}" method="post" enctype="multipart/form-data" id="form">
    @csrf
    @method('patch')
   
        <input type="hidden" name="product_id" value="{{$i->product_id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Title</label>
            <input type="text" value="{{$i->pname}}" class="form-control" id="exampleInputEmail1" name="pname" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="text" value="{{$i->price}}" class="form-control" id="exampleInputPrice" name="price" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputQuantity" class="form-label">Quantity</label>
            <input type="number" value="{{$i->quantity}}" class="form-control" id="exampleInputQuantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Product Details</label>
            <textarea class="form-control" id="exampleInputDescription" name="description">{{$i->description}}</textarea>
        </div>
        <div class="mb-3">
            @if($i->image)
                <img src="{{ asset('images/' . $i->image) }}" alt="Image" width="100">
            @endif
        </div>
    

    <a href="{{route('items.index')}}" class="btn btn-primary">Back</a>
</form>

</body>
</html>
