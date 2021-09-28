<?php
require("./connection.php");
require("./validaeCPF.php");

  function getFieldValue($fieldName) {
    return (isset($_POST[$fieldName])) ? $_POST[$fieldName] : "";
}

$firstName = getFieldValue('firstName');
$lastName = getFieldValue('lastName');
$birthDate = getFieldValue('birthDate');
$email = getFieldValue('email');
$password = getFieldValue('password');
$Cpf = getFieldValue('Cpf');
$PasswordEncode = base64_encode($password);
$Avatar = getFieldValue('ImageURl');

$sql_insert = "INSERT INTO Usuario VALUES (null, '$firstName', '$lastName', '$birthDate', '$email', '$PasswordEncode', '$Cpf', '$Avatar')";

if (validadeCPF($Cpf)) {
  echo "<h1>CPF inválido</h1>";
} else if (mysqli_query($connection, $sql_insert)) {
  header("Location: ./userList/index.php");
}
mysqli_close($connection);
