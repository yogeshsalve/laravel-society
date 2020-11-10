<!DOCTYPE html>
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

<!-- <h3>Admin Login</h3> -->

<div class="card" style="width: 27rem;">
<div class="card-header">
    Login
  </div>
  <form action="/action_page.php">
    <label for="fname">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter your Email..">

    <label for="lname">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter password">

    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
   -->
    <input type="submit" value="Submit">
  </form>
</div>
</center>
</body>
</html>