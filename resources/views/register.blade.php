<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <base href="/public">
    <meta charset="UTF-8">
    <title> UserSystem </title>
    <link rel="stylesheet" href="register/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="{{route('create/user')}}" method="POST" enctype="multipart/form-data">
      <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Upload Your Photo</span>
            <input type="file" name="photo" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" id="Register">
        </div>

        <div class="">
            <a href="/">Already a user?</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>