<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugasform</title>
</head>
<body>

<form action="/submit_form" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <label for="hobby">Hobby:</label><br>
    <input type="checkbox" id="hobby1" name="hobby1" value="Music">
    <label for="hobby1">Music</label><br>
    <input type="checkbox" id="hobby2" name="hobby2" value="Reading">
    <label for="hobby2">Reading</label><br>
    <input type="submit" value="Submit">
</form>
    
</body>
</html>

