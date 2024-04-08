<!DOCTYPE html>
<html>
    <head>
        <title>log in</title>
    </head>
   <body>
    <h1>log in </h1>
    <form action="loginservlet" method="post">
        username:<input type="text" name ="username"><br>
        password: <input type="text" name="pswd">
        <input type="submit" value ="login">
    </form>
    <p>${param.error == 'true' ? 'Invalid username or password' :''}</p>
   </body>

</html>