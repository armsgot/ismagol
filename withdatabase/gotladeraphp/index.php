<?php
$title = 'Index';
require_once 'includes/header.php'
?>
  <body>
    <h1 class="text-center" style="color:white">Registration for IT Conference</h1>
    <br>  
    <form method="post" action="success.php">

        <div class="form-group">
          <label for="InputFirstName">First Name</label>
          <input required type="name" class="form-control" id="InputFirstName" name="firstname">
        </div>

        <div class="form-group">
          <label for="InputLastName">Last Name</label>
          <input required type="name" class="form-control" id="InputLastName" name="lastname">
        </div>

        <div class="form-group">
          <label for="DateofBirth">Date of Birth</label>
          <input required type="date" id="date" name="dob">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Specialty</label>
        </div>
          <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
          <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
          <select class="custom-select" id="inputGroupSelect01" name="specialty">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Other Specialty:</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="other">
        </div>
        <div class="form-group">
          <label for="ContactNumber">Contact Number</label>
          <input type="number" class="form-control" id="InputFirstName" name="contact">
        </div>
        
        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkme">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
      <marquee behavior="" direction="right"><img src="alien.gif" alt="" height="100"></marquee>
<?php require_once 'includes/footer.php'?>