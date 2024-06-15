@extends('frontend.layouts.main')

@section('main-container')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Hello, world!</title>
    <style>
        .vertical-th {
            writing-mode: vertical-lr;
            text-orientation: upright;
            white-space: nowrap;
        }
    </style>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="container">
      <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_phone}}</td>
                        <td>{{$customer->customer_email}}</td>
                        <td>{{$customer->gender}}</td>
                        <td>{{$customer->customer_dob}}</td>
                        <td>{{$customer->customer_address}}</td>
                        <td>{{$customer->state}}</td>                      
                        <td>{{$customer->city}}</td>
                        <td>{{$customer->country}}</td>
                       <td>
                        @if ($customer->status == 1)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                        </td>
                        
                        <td colspan="2" class="text-center">
    <a href="#" class="btn btn-primary d-block"><i class="fas fa-pencil-alt"></i></a>
    <a href="#" class="btn btn-danger d-block mt-1"><i class="fas fa-trash-alt"></i></a>
</td>


                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
@endsection