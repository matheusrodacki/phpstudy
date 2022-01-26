<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="cadastrar.php" method="POST">
      <div class="g-recaptcha" data-sitekey="6LdI5TkeAAAAAFcgeajVK5Kp3NPjnw_F7xs8dn51"></div>
      <br/>
	  <input type="email" name="inputEmail">
      <button type="submit" value="Submit">Enviar</button>
    </form>
  </body>
</html>