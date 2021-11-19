<?php
include "nav.php";

?>
  <div class="d-flex justify-content-center line top1">

<h2 class="top_title">Book a seat</h2>
<hr>
</div>
  <div class="booking ">
  <div class="cards-list">
  
  <div class="card 1 bg-transparent " style="width:50%; display:flex; justify-content:center; margin-left:25%; color:white; margin-top:5%;">
  <form  class="was-validated" action="formData" method="POST">


  <div class="mb-3">
      <label>Choose Origin</label>
    <select class="form-select" name="originCampus" required aria-label="select example">
      <option0 value="" readonly>Open this select menu</option>
      <option value="Arcadia Campus" >Arcadia Campus</option>
      <option value="Soshanguve">Soshanguve</option>
      <option value="Pretoria West">Pretoria West</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>

  <div class="mb-3">
      <label>Choose Date</label>
      <input class="form-select" type="date" name="date" required aria-label="select example" >
    
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>

  <div class="mb-3">
      <label>Choose Time Slot</label>
    <select class="form-select" name="time" required aria-label="select example">
      <option value="" readonly>Open this select menu</option>
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
      <option value="21:00">21:00</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>


  <div class="mb-3">
                <label>Choose Destination </label>
            <select class="form-select" name="destCampus" required aria-label="select example">
                <option value="" readonly>Open this select menu</option>
                <option value="Arcadia Campus" >Arcadia Campus</option>
                <option value="Soshanguve">Soshanguve</option>
                <option value="Pretoria West">Pretoria West</option>
            </select>
            <div class="invalid-feedback">Example invalid select feedback</div>
            </div>
  <div class="mb-3 mt-5 text-center">
    <button class="btn btn-success " type="submit" >book a seat</button>
  </div>
</form>
  </div>
  


  
  </div>

  </div>
</body>
</html>