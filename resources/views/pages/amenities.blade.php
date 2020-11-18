@extends('layouts.app')

@section('content')
<div class="container">
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
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link disabled" href="/amenities">Amenities</a>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

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
    <div class="card ">
      <div class="card-body">
       

        <div class="row">
          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/gym1.png" class="card-img-top" height="200" alt="...">
            
            <div class="card-body">
            <h3 class="card-title">Gymnasium</h3>
            <!-- <p class="card-text">To book your gym slot Click on below button</p> -->
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/pool.jpg" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Swimming pool</h3>
            <!-- <p class="card-text">To book your gym slot Click on below button</p> -->
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/tennis.png" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Tennis Court</h3>
            <!-- <p class="card-text">To book your gym slot Click on below button</p> -->
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/pool.jpg" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Swimming pool</h3>
            <!-- <p class="card-text">To book your gym slot Click on below button</p> -->
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>
  
</div>








                </div>
            </div>
        </div>
    </div>
</div>

@endsection