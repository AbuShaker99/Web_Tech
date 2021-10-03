<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form Validation</title>
</head>
<body>
    <h1>User Information Collection<h1>
        <p>Type Your Information</p>
        <form action="Validation.php"  method="post">
        User Name<input type="text"  name="username" > <br>
        Password<input type="text"  name="password" > <br>
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Website: <input type="text" name="website"><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <br>
        Phone Number: <input type="text" name="number"><br>
        Adress: <input type="text" name="adress"><br>
        Date of Birth:<input type="date" name="dob"><br>
        Comments:<input type="text" name="comment"><br>
        <input type="submit" value="Submit">
        
       
</form>
</body>
</html>