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
<br>

  <div class="container">
    <div class="card" style="width: 28rem;" >
      <div class="card-header text-white" style="background-color: #1d5bb8;">
        <h4><center>Admin Login</center></h4>
      </div>
      <div class="card-body ">

        <div class="container">
          <form action="admin" method="POST">
              @csrf
              <div class="form-group">
              <label for="inputemail">Email Id</label>
              <input type="email" class="form-control" name="email" id="inputemail" placeholder="Enter Email ">
              </div>

              <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Enter Password">
              </div>
              <button type="submit" class="btn btn-primary flow-right">Login</button>
          </form>
        </div>
       </div>
    </div>
  </div>

</body>
</html>














<!-- <!DOCTYPE html>
<html>
<style>
input[type=text], [type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 400px;

}
.header {
  border-radius: 5px;
  background-color: #fffff2;
  padding: 20px;
  width: 400px;
}
.card {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 400px;
}

</style>
<body>
<center>
<br>
<br>
<br>



<div class="card" style="width: 27rem;">
<div class="card-header">
    Login
  </div>
  <form action="admin" method="POST">
    @csrf
    <label for="fname">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter your Email..">

    <label for="lname">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter password">

  
    <input type="submit" value="Login">
  </form>
</div>
</center>
</body>
</html> -->