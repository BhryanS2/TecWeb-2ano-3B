<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Index</title>
</head>

<body>
  <!-- Componnets requireds -->
  <?php require('./components/inputConponent/index.php') ?>

  <main class="container">
    <h1>Bem-vindo</h1>
    <form action="./getFormFields.php" method="post" class="z-depth-3">
      <?php
        input_component("firstName", "text", "Entre com o nome", true, "");
        input_component("lastName", "text", "Entre com o sobrenome", true, "");
        input_component("ImageURl", "url", "Entre com a url da sua foto", false, "");
        input_component("Cpf", "text", "Entre com o CPF", true, "") ;
        input_component("birthDate", "date", "Entre com a data de nascimento", true, "");
        input_component("email", "email", "Entre com o nome", true, "");
        input_component("password", "password", "Entre com a sua senha", true, "");
      ?>
      <div class="ButtonContainer">
        <button class="btn blue waves-effect waves-light left-align" type="submit" name="button">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
