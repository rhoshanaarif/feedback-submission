<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<section class="form-section menus-section">

    <form action = "/admin/feedback/store" class="login-grp">
    <div class="field-grp">
        <label class="head-title" for="department">Choose a department:</label>
          <select class="input-field menus" name="department" id="department">
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="MECHATRONICS">MECHATRONICS</option>
            <option value="MECHANICAL">MECHANICAL</option>
            <option value="CIVIL">CIVIL</option>
          </select>
          
      </div>
      <div class="field-grp">
      <label class="head-title" for="year">Choose semester:</label>
      <select class="input-field menus" name="semester" id="semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
      </div>
      <input class="submit-field" type="submit" value="Submit">
      
    </form>
</section>
</body>
</html>