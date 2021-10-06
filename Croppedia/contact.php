<?php
include('includes/dbconnection.php');
?>
 <html>
 <head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
<!-- contact-form -->
<div class="container form">
  <div class="row">
    <div class="col-md-7">
      <div class="row">
        <div class="form-group col-md-12">
          <h2>Please fill the details how can we help you.</h2>
        </div>
      </div>
      <form name="contactForm" id="contactForm" method="POST" action="">
        <div class="row">
          <div class="col-md-12">
            <div class="control-group">
              <label>First Name</label>
              <input name = "first_name" type="text" class="demo-default form-control" placeholder="First Name">
            </div>
            <div class="control-group">
              <label>Last Name</label>
              <input name = "last_name" type="text" class="demo-default form-control" placeholder="Last Name">
            </div>
            <div class="control-group">
              <label>Phone #</label>
              <input type="text" class="demo-default form-control" placeholder="Phone #">
            </div>
            <div class="control-group">
              <label>Email</label>
              <input type="text" name="email" class="demo-default form-control" placeholder="yourname@domain.com">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group col-md-12 text-center">
            <input type="submit" class="btn btn-primary" value="Contact Us">
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
 </body>
 </html>