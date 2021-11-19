<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        bus Booking
    </title>

    <script scr="./css/style.scss"> </script>

    <link rel="stylesheet" href="./css/style.scss">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
    <section class="forms-section">
        <h1 class="section-title">Animated Forms</h1>
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login" action="login"  method="POST">
              <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" name="email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" name="password" type="password" required>
                </div>


                <div class="wrapper">
                  <input type="radio" name="Student" id="option-1" >
                  <input type="radio" name="Admin" id="option-2">
                    <label for="option-1" class="option option-1">
                      <div class="dot"></div>
                        <span>Student</span>
                        </label>
                    <label for="option-2" class="option option-2">
                      <div class="dot"></div>
                        <span>Admin</span>
                    </label>
                </div>

              </fieldset>
              <button type="submit" class="btn-login">Login</button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup" action="signup" method="POST">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
               <div class="input-block">
                  <label for="signup-password-confirm">Name and surname</label>
                  <input id="signup-password-confirm" type="text" required>
                </div>
                <div class="input-block">
                  <label for="signup-password-confirm">Student Number</label>
                  <input id="signup-password-confirm" type="text" name="stdNumber" required>
                </div>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" name="email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="signup-password">Password</label>
                  <input id="signup-password" name="password" type="password" required>
                </div>
                
              </fieldset>
              <button type="submit" class="btn-signup">Continue</button>
            </form>
          </div>
        </div>
      </section>


        <script> 
        const switchers = [...document.querySelectorAll('.switcher')]

        switchers.forEach(item => {
          item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
          })
        })
        </script>
  </body>
</html>