<html>
<body>

<style>
input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 9%;
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

input[type=password] {
height:5%;
width:32%;
}
input[type=number] {
height:5%;
width:30%;
}

</style>
<body>

<center>

<div>
  <form action="controller/insert.php">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name......"><br>

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-mail......"><br>

    <div class="password">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder=" Your password...."><br>
</div>


<label for="country">Country</label>
<select id="country" name="country">
  <option value="australia">Australia</option>
  <option value="canada">Canada</option>
  <option value="usa">India</option>
  <option value="usa">China</option>
  <option value="usa">Pakistan</option>
    <option value="usa">Indonesia</option>
  </select>

<br>
    <div class="number">
  <label for="email">Phone Number</label>
  <input type="number" id="number" name="number" placeholder=" Your Number......"><br>
  </div>


<br>
    <input type="submit" value="Login/Register">
  </form>
</div>




</center>

</body>
</html>
