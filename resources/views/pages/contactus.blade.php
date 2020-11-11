<!DOCTYPE html>
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
    <div class="card-body">
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
  
  
  
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- contact form -->
  </div>
</div>
</div>




    
</body>
</html>