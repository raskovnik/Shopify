<!DOCTYPE html>
<html>
    <head>

        <title>
            login
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
            .fpwd {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-align: center;
            }
           article {
      align-self: center;
      width: 30%;
      height: auto;
      float: auto;
      padding: 20px; 
      background-color: rgb(255, 255, 255);
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
      margin-top: 15%;
      margin-left:450px;
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
        </style>
        <div class="log">
        <article>
        <section>
            <div class="fpwd">
                <h2>Forgot Password</h2> 
            
            <form class="n" method = "POST" action="forgot.php">
                <label for="email"><h4>Enter your email address</h4></label><br>
                <input type="text" id="email" name="email"  style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br>
                <label for="code"><h4>Enter six digit code</h4></label><br>
                <input type="number" id="code" name="code" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <input type="submit" name="reset" value="reset"><br><br>
            </form>
            Back to <a href="login.php">log in</a> page<br>
            <p id="cr">&#169 2022</p>
        </section>
        </article>
        </div>
        </div>
    </body>
</html>