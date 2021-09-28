<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User list</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./style.css">
  <script>
    const goToHome = () => {
      window.location.href = "../index.php";
    }
  </script>
</head>

<body>
    <?php
    require("../connection.php");
    $sql = "SELECT * FROM Usuario";
    $querry = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($querry);
    function getAge($birthday) {
      $birthday_timestamp = strtotime($birthday);
      $age = date('Y') - date('Y', $birthday_timestamp);
      if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
      }
      return $age;
    }
    function isValidImageUrl($image) {
      $url = parse_url($image);
      if ($url['scheme'] == 'http' || $url['scheme'] == 'https') {
        return $image;
      }
      return "https://cdn-icons-png.flaticon.com/512/64/64572.png";
    }
    if ($num_rows > 0) {
      echo "<div class='container'>";
      while ($dados = mysqli_fetch_assoc($querry)) {
        echo '
          <div class="card z-depth-2">
            <div class="card-image">
              <img src='.isValidImageUrl($dados["avatar"]).' class="responsive-img">
              <span class="card-title padding">'.$dados["firstName"].'</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red" href='.$dados["avatar"].'>
                <i class="material-icons">link</i>
              </a>
            </div>
            <div class="card-content">
              <p>'.$dados["lastName"].' com '.getAge($dados["birthDate"]).' anos</p>
              <a href="'.$dados["email"].'" target="_blank">Contato '.$dados["email"].'</a>
            </div>
          </div>
        ';
      }
      echo "</div>";
    } else echo '
        <div class="ListNotFound">
          <h1>Não há usuários cadastrados!</h1>
        </div>';
    ?>
  <div class="fixed-action-btn">
    <button class="btn-floating btn-large waves-effect waves-light red z-depth-1" onclick="goToHome()">
      <i class="material-icons">arrow_back</i>
      Voltar a Home
    </button>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
