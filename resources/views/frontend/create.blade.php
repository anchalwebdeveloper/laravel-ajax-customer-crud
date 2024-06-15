@extends('frontend.layouts.main')

@section('main-container')
<div class="container mt-5">
    <h2 class="mb-4">Customer Form</h2>
    <form method="POST" action="{{ route('frontend.store') }}">
        @csrf
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
            <label for="customer_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
            <label for="customer_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email" required>
        </div>
</div>
<div class="col-md-6">
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
</div>
<div class="col-md-6">
        <div class="mb-3">
            <label for="customer_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="customer_password" name="customer_password" required>
        </div>
</div>
<div class="col-md-6">
        <div class="mb-3">
            <label for="customer_phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="customer_phone" name="customer_phone" required>
        </div>
</div>
<div class="col-md-6">
        <div class="mb-3">
            <label for="customer_address" class="form-label">Address</label>
            <textarea class="form-control" id="customer_address" name="customer_address" rows="3" required></textarea>
        </div>
</div>
</div>
<div class="row">
<div class="col-md-3">
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
</div>
<div class="col-md-3">
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state">
        </div>
        </div>
        <div class="col-md-3">
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>
        </div>
        <div class="col-md-3">
        <div class="mb-3">
            <label for="customer_dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="customer_dob" name="customer_dob">
        </div>
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
