<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> User System | Qatalog </title>
    <link rel="stylesheet" href="login/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="{{route('login/user')}}" method="POST">
      <div class="title">Login</div>
        <div class="input-box underline">
          <input type="email" name="email" placeholder="Enter Your Email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" id="login">
        </div>
      </form>
        <div class="">
          <a href="{{route('register/user')}}">Not a user yet?</a>
        </div>
    </div>
  </body>
</html>