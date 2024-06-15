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

    <title>Product List</title>
  </head>
  <body>
 <div class="container-fluid">
    <div class="row">
    
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     <div class="card-body table-responsive" id="datatable">
                    <table class="table table-bordered data-table" id="data-table">
                        <thead>
    <tr>

      <th scope="col">Pruduct ID</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $i)
    <tr>
      <td>{{$i->product_id}}</td>
      <td>{{$i->pname}}</td>
      <td>{{$i->price}}</td>
      <td>{{$i->quantity}}</td>
      <td>{{$i->description}}</td>
      <td>
      @if($i->image)
                    <img src="{{ asset('images/' . $i->image) }}" alt="Image" width="100">
                @endif
</td>
<td><a href="{{route('items.view', $i->product_id)}}"><i class="fas fa-eye"></i></a> &nbsp;
<a href="{{route('items.edit', $i->product_id)}}"><i class="fas fa-edit"></i>
</a></td>
      
    </tr>
    @endforeach
    </table>
                     </div>
                     </div>
                     </div>

                     </div>
                     </div>
                     </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
