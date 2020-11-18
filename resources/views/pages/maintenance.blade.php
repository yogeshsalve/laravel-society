@extends('layouts.app')

@section('content')
<div >
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      

      <li class="nav-item active">
        <a class="nav-link disabled" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenities">Amenities</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">Complaints</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="/contactus">Contact Us</a>
        </li>
    </ul>
    
  </div>
</nav>
</div>
<div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body bg-secondary mb-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="text-white">Welcome {{ __( Auth::user()->name) }}</h5>

<div class="card">
<div class="row">

  <div class="col-sm-12">
    <div class="card">
    <div class="card-header text-white" style="background-color: #1d5bb8;">
      <h4><center>Pay your Maintenance Here</center></h4>
      </div>
      <div class="card-body">
        
               
        
    <form action="TxnTest" method="POST">
    @csrf
  

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Select Service</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Home Maintenance</option>
        <option>Car Parking Maintenance</option>
        <option>Amenities Maintenance</option>

      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Select Year</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>2020</option>
        <option>2021</option>
      </select>
    </div>

    <div class="form-group col-md-3">
      <label for="inputPassword4">Select Month</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>May</option>
        <option>Jun</option>
        <option>Jul</option>
        <option>Aug</option>
        <option>Sept</option>
        <option>Oct</option>
        <option>Nov</option>
        <option>Dec</option>
      </select>
    </div>
  </div>

  <div class="form-group">
   
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  


  
    
  <button type="submit" class="btn btn-primary float-right">Click to Pay</button>
</form>
        
      </div>
    </div>

<!-- new section -->

<!-- new section ends -->















  </div>
  
</div>








                </div>
            </div>
        </div>

        
    </div>
</div>

@endsection