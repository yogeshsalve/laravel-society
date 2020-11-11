<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br>
<br>

<div class="container mt-10">
<div class="card" style="width: 65rem;">
  <div class="card-header text-white" style="background-color: #1d5bb8;">
    <h2><center>Visitors List</center></h2>
  </div>
  <br>
  <table border="1">
<tr>
<th>Id</td>
<th>Visitors Name</th>
<th>Visiting From</th>
<th>Visiting To</th>
<th>Contact No</th>
<th>Vehicle No</th>
<th>Entry Time</th>
<th>Exit Time</th>

</tr>
@foreach($visitors as $visitor)

<tr>
<td>{{$visitor['visitor_id']}}</td>
<td>{{$visitor['visitor_name']}}</td>
<td>{{$visitor['visit_from']}}</td>
<td>{{$visitor['visit_to']}}</td>
<td>{{$visitor['visitor_contact']}}</td>
<td>{{$visitor['visitor_vehicle_no']}}</td>
<td>{{$visitor['Entry_time']}}</td>
<td>{{$visitor['Exit_time']}}</td>

</tr>
@endforeach

</table>






</div>
</div>
</body>
</html>









