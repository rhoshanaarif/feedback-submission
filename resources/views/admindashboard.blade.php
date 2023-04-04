<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<form action = "/admin/feedback/store">
<label for="department">Choose a department:</label>
  <select  name="department" id="department">
    <option value="CSE">CSE</option>
    <option value="ECE">ECE</option>
    <option value="MECHATRONICS">MECHATRONICS</option>
    <option value="MECHANICAL">MECHANICAL</option>
    <option value="CIVIL">CIVIL</option>
  </select>
  <br><br>


  <label for="year">Choose semester:</label>
  <select name="semester" id="semester">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>


  </select>
 
  <input type="submit" value="Submit">
</form>
</body>
</html>