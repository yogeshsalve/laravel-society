<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<body>
<center>
<br>
<br>
<br>

<div class="card" style="width: 60rem;">
  <div class="card-header">
    <h2>Visitor Registration</h2>
  </div>
  <br>
  <div class="container">
 

  <form action="visitors" method="POST">
  @csrf
  <div class="form-group">
    <!-- <label for="inputName">Name</label> -->
    <input type="text" class="form-control" name="visitor_name" id="visitor_name" placeholder="Enter Name">
  </div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="text" class="form-control" name="visit_from" id="visit_from" placeholder="Coming From">
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="text" class="form-control" name="visit_to" id="visit_to" placeholder="Visiting To">
</div>
</div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="text" class="form-control" name="visitor_contact" id="visitor_contact" placeholder="Contact No.">
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="text" class="form-control" name="visitor_vehicle_no" id="visitor_vehicle_no" placeholder="Vehicle No.">
</div>
</div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="date" class="form-control" name="Entry_time" id="Entry_time" placeholder="In Time">
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="date" class="form-control" name="Exit_time" id="Exit_time" placeholder="Out Time">
</div>
</div>


  
  
    
<div class="form-row"> 
  <button type="submit" class="btn btn-primary">Create Entry</button>
  </div>
  <br>
</form>




  </div>
</div>
</body>
</html>