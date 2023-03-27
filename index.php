<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            justify-content: center;
            background: orange;
            min-height: 100vh;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="Register.php" method="post">
        <div>
            <i class="fa-solid fa-user"></i>
            <label for="fname">First name</label>
            <input type="text" name="Fname" id="fname"  required placeholder="Enter your first name" class="form-control">
        </div>

        <div>
            <i class="fa-solid fa-user"></i>
            <label for="lname">Last name</label>
            <input type="text" name="Lname" id="lname" required placeholder="Enter your last name" class="form-control">
        </div>
        <div>
            <i class="fa-solid fa-phone"></i>
            <label for="number">Phone number</label>
            <input type="tel" name="phone" id="number"  required placeholder="Enter your phone number" class="form-control">
        </div>
        <div>
            <i class="fa-solid fa-envelope"></i>
            <label for="email">Email address</label>
            <input type="email" name="Email" id="email" required placeholder="Enter your email address" class="form-control">
        </div>
        <div>
            <i class="fa-solid fa-user-gear"></i>
            <label for="login">Enter login</label>
            <input type="text" name="Login" id="login" required placeholder="Enter your login" class="form-control">
        </div>
        <div>
            <i class="fa-solid fa-venus-mars"></i>
            <label for="gender">Gender</label> <br>
            <input type="radio" name="Gender" id="gender" required value="male" > Male
            <input type="radio" name="Gender" id="gender" required value="female" > Female
        </div>
        <br>
        <div>
            <i class="fa-solid fa-lock"></i>
            <label for="pass">Enter password</label>
            <input type="password" id="pass" name="password" required placeholder="Enter your password" class="form-control">
        </div>
        <div>
            <i class="fa-solid fa-comment"></i>
            <label for="com">Comment</label><br>
            <textarea name="comment" id="com" cols="50" rows="5" placeholder="Enter your comment"></textarea>
        </div>
        <div class="text-center">
            <button  class="btn btn-primary">Submit</button>
        </div>
</form>
</body>
</html>