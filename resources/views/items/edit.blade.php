<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Product Edit</title>
</head>
<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
   
        <form action="{{ route('items.update', $item->product_id) }}" method="post" enctype="multipart/form-data" id="form">
            @csrf
            @method('put')

            <input type="hidden" name="product_id" value="{{ $item->product_id }}">

            <div class="mb-3">
                <label for="productTitle" class="form-label">Product Title</label>
                <input type="text" value="{{$item->pname }}" class="form-control" id="productTitle" name="pname" aria-describedby="productTitleHelp">
                <div id="productTitleHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Price</label>
                <input type="text" value="{{ $item->price }}" class="form-control" id="productPrice" name="price" aria-describedby="productPriceHelp">
                <div id="productPriceHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="productQuantity" class="form-label">Quantity</label>
                <input type="number" value="{{ $item->quantity }}" class="form-control" id="productQuantity" name="quantity">
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Details</label>
                <textarea class="form-control" id="productDescription" name="description">{{ $item->description }}</textarea>
            </div>
            <div class="mb-3">
                @if($item->image)
                    <img src="{{ asset('images/' . $item->image) }}" alt="Image" width="100">
                @endif
                <input type="file" name="image" class="form-control mt-2">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   
</body>
</html>
