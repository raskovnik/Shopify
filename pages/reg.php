<!DOCTYPE html>
<html>
    <head>

        <title>
            reg
        </title>
    </head>
    <body>
        <style>
            body{
                background: url('../images/smile.png');
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            }
            .log {
        width: 80%;  
      margin: auto;  
            }
            .login {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-align: center;
                margin-top: 0%;
            }
           article {
      align-self: center;
      width: 30%;
      height: auto;
      float: auto;
      padding: 20px; 
      flex-wrap: wrap;
      background-color: whitesmoke;
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
      margin-top: 15%;
      margin-left: auto;
      margin-right: auto;
    }
    .n{
        align-self: center;
    }
    button {
      border-radius: 10px;
      width: 70%;
      margin: 5px auto;
      height: 40px;
      border: none;

    }
    button:hover {
      background-color: rgb(200,200,200);
    }
    .button1{
        background-color: rgb(81, 81, 219);
      color: white;
      margin-top: 20px;
      transition: 0.4s ease;
    }
    .logo {
        align-items: left;
    }
        </style>
        <div class="log">
        <article>
        <section>
            <div class="login">

            <h2>Register</h2> 
            <form class="n">
                <label for="name"><h4>Enter your name</h4></label><br>
                <input type="text" id="name" name="name" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br>
                <label for="email"><h4>Enter your email address</h4></label><br>
                <input type="text" id="email" name="email"  style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br>
                <label for="pwd"><h4>Password</h4></label><br>
                <input type="password" id="pwd" name="pwd" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br>
            </form>
            <button type="button" class="button1"  onclick="alert('Details Submitted successfully')">Register</button><br>
            <a href="login.php">Back to log in</a>
            <p id="cr">&#169 2022</p>
        </section>
        </article>
        </div>
        </div>
    </body>
</html>