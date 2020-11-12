@extends('layouts.app')
<html>
<head>

<style>
  .card-header{
        height: 40px;
   }
</style>

</head>
<body>

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="">Society</a>
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
        <li class="nav-item active">
            <a class="nav-link disabled" href="/contactus">Contact Us</a>
        </li>
    </ul>
    </div>
    </nav>
</div>

<div class="container">
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

                        <!-- <div class="card">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body bg-secondary mb-3">
                                        <h5 class="card-title"></h5> -->
        
        
                                            <div class="container">
                                                <div class="card" >
                                                    <div class="card-header text-white" style="background-color: #1d5bb8;">
                                                        <h4><center>Write Below to Reach Us !</center></h4>
                                                    </div>
  
                                                    <div class="card-body ">
                                                    <!-- contact form -->
                                                        <div class="container">
                                                        <form action="contactus" method="POST">
                                                        @csrf
                                                            <div class="form-group">
                                                            <label for="inputName">Name</label>
                                                            <input type="text" class="form-control" name="contact_name" id="inputName" placeholder="Enter your name">
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Email</label>
                                                                <input type="email" class="form-control" name="contact_email" id="inputEmail4">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label for="inputcontact">Contact No</label>
                                                                <input type="text" class="form-control" name="contact_no" id="inputcontact">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="inputSubject">Subject</label>
                                                            <input type="text" class="form-control" name="contact_subject" id="inputSubject" placeholder="Enter Subject">
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="messagearea">Message</label>
                                                            <textarea class="form-control" name="contact_message" id="messagearea" rows="3"></textarea>
                                                            </div>
  
  
  
                                                            <button type="submit" class="btn btn-primary flow-right">Submit</button>
                                                        </form>
                                                        </div>
                                                        <!-- contact form -->
                                                </div>
                                            </div>
                                        <!-- </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>














































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container mt-10">
    <div class="card" style="width: 65rem;">
        <div class="card-header text-white" style="background-color: #1d5bb8;">
            <h2><center>Contact Form</center></h2>
        </div>
    
</div>
</div>




    
</body>
</html> -->