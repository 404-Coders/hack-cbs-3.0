<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form to test backend -->
    <!-- <form action="./php/signup.php?tablename=pgrequirer" method="post" autocomplete="off">
        <input type="text" name="name" placeholder="name" id="name" required><br>
        <input type="number" name="phone" placeholder="phone" id="phone" required><br>
        <input type="email" name="email" placeholder="email" id="email" required><br>
        <input type="password" name="pass" placeholder="pass" id="pass" required><br>
        <input type="text" name="address" placeholder="address" id="address" required><br>
        <input type="submit" id="submit" value="Submit">
    </form> -->
    <form action="./php/login-verify.php?tablename=pgrequirer" method="post" autocomplete="off">
        <input type="email" name="email" placeholder="email" id="email" required><br>
        <input type="password" name="pass" placeholder="pass" id="pass" required><br>
        <input type="submit" id="submit" value="Submit">
    </form>
    <!-- Form to test backend -->
</body>
</html>