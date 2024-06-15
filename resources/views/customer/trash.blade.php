<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Customer Trash</title>

  


<style>
  svg {
            width: 100px; /* Set the width of the SVG */
            height: 100px; /* Set the height of the SVG */
            fill: blue; /* Set the fill color of the SVG */
        }
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        margin-right: 10px;
    }

    .pagination li a {
        color: #333;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination li.disabled {
        pointer-events: none;
        color: #ccc;
    }

    .pagination li.disabled a {
        background-color: #f8f9fa;
        color: #ccc;
        border-color: #ccc;
    }
</style>

    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body table-responsive" id="datatable">
                        <table class="table table-bordered data-table" id="data-table">
                        <div class="d-flex justify-content-end ">
                                <button class="btn btn-outline-primary"><a href="{{route('customer.list')}}">Customers</a>
                                </button>
                                
                            </div>
                            <thead>
                                <tr>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PHONE</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">COUNTRY</th>
                                    <th scope="col">STATE</th>
                                    <th scope="col">CITY</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody id="customer-list">
                                @foreach($customers as $customer)
                                <tr>
                                    <th scope="row">{{$customer->customer_id}}</th>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{ $customer->country->name ?? 'N/A' }}</td> <!-- Display country name -->
                                    <td>{{ $customer->state->name ?? 'N/A' }}</td> <!-- Display state name -->
                                    <td>{{ $customer->city->name ?? 'N/A' }}</td> <!-- Display city name -->
                                    <td><a href="{{route('customer.forcedelete', $customer->customer_id)}}"> <i class="fas fa-trash-alt"></i></a>&nbsp;
                                    <a href="{{route('customer.restore', $customer->customer_id)}}"> <i class="fas fa-undo"></i></a></td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Your table or list of customers -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>
