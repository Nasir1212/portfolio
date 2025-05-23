@extends('layout.user.layout')
@section('content')
<style>
 
.form-control::placeholder {
    color: #888; /* Light gray */
    font-style: italic;
}
.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    background: transparent;
    border: grey 0.5px solid;
    background: white;
  
    height: 45px;
  
    color: black !important;
}

.form-control:active, .form-control:focus {
    color: black;
    background: white;
    border:  gray 1px solid ;
    /* background: #f0f0f0; */
}
</style>
<div class="container" style="max-width: 950px;width:100%;margin:0 auto;padding-left: 29px;">  
    <div class="row  ">
        <div class="">
            <div class="card shadow">
                <h2 class="text-center mb-4">Place Your Order</h2>
                <br>
                <p>Your satisfaction is our priority. We are committed to delivering top-quality services, ensuring every project meets the highest standards. Place your order with confidence, knowing you're in expert hands</p>
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        
                      <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your name</label>
                        <input type="text" id="name" placeholder="Enter your name" name="name" class="form-control" required>
                        <input type="hidden" value="@if( request('id')){{ request('id')}}@endif"  name="product_id" >
                    </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" placeholder="Enter your phone" name="phone" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" placeholder="Enter your mail" name="email" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="service" class="form-label">Service name</label>
                        <input type="text" id="service" placeholder="Enter  service name" name="service" class="form-control"  @if(request('id')) value="{{ $service->title }}" readonly @endif required>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="service" class="form-label">Service price</label>
                        <input type="text" id="service" placeholder="Enter service price" name="price" class="form-control"  @if(request('id')) value="{{ $service->price }}" readonly @endif required>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="file" class="form-label">Essential File</label>
                        <input type="file" id="file" name="essential_file" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="payment_type" class="form-label">Payment Type</label>
                        <select name="payment_type" id="" class="form-control">
                            <option value="0">Cash/Offline</option>
                            <option value="1">Online</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" rows="3" placeholder="Enter project details" class="form-control" required></textarea>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="mb-3">
                        <label for="file" class="form-label">Project/ Product Details </label>
                        <textarea name="details" id="details" rows="10" placeholder="Enter project details" class="form-control" required></textarea>
                    </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="mb-3"  style="display: flex;justify-content: center;margin-top: 3rem;">
                        <button type="submit" class="btn btn-primary  ">Submit Order</button>

                    </div>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection