<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <link href="css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Integradores de Sistemas</title>
  </head>

    <body>

        <form action="login\validar.php" method="post">

      
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div class="fadeIn first">
             <!--  <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
             <img src="ico\Login.jpg" id="icon" alt="User Icon" />
            </div>
        
            <!-- Login Form -->
            <form>
              <input type="text" id="idusername" class="fadeIn second" name="login" placeholder="login" required>
              <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" requerid>
              <input type="submit" id="boton" class="fadeIn fourth" value="Aceptar">
            </form>
        
        
            <!-- Remind Passowrd -->
            <div id="formFooter">
              <a class="underlineHover" href="#">Ha olvidado su contraseña?</a>
            </div>
        
          </div>
        </div>
    </form>

    </body>    
</html>