<?php
require './dbconnect.php';
require './header.php';


?>


<form class="container m-5 p-2" action="post" method="form.php">
  <div class="mb-3">
    <label for="Seller" class="form-label">Sotuvchi ismi</label>
    <input type="text" class="form-control" id="Seller" name="seller" >
  </div>
  <div class="mb-3">
    <label for="count" class="form-label">Password</label>
    <input type="text" name="price"  class="form-control" id="count">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>