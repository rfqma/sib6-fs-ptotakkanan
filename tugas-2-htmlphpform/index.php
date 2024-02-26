<?php
session_start();

if (count($_POST) > 0) {
  if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['username']) &&
    isset($_POST['password'])
  ) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['username'] = $_POST['username'];
    echo "Data berhasil disimpan di dalam session! <br><br>";

    $cookie_name = 'user_info';
    $cookie_value = json_encode(array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'username' => $_POST['username'],
    ));
    setcookie($cookie_name, $cookie_value, time() + 60);
    echo "Data berhasil disimpan di dalam cookie! <br><br>";
  } else {
    echo "Data tidak lengkap! <br>";
  }
}

if (
  isset($_SESSION['name']) &&
  isset($_SESSION['email']) &&
  isset($_SESSION['username'])
  // && isset($_SESSION['password'])
) {
  echo "Data yang tersimpan di dalam session: <br>";
  echo "Nama: " . $_SESSION['name'] . "<br>";
  echo "Email: " . $_SESSION['email'] . "<br>";
  echo "Username: " . $_SESSION['username'] . "<br><br>";
} else {
  echo "Tidak ada data di dalam Session!<br><br>";
}

if (
  isset($_COOKIE['user_info'])
) {
  echo "Data yang tersimpan di dalam cookie: <br>";
  echo $_COOKIE['user_info'] . "<br><br>";
} else {
  echo "Tidak ada data di dalam Cookie!<br><br>";
}


?>

<html>

<body>
  <form action="" method="post">
    <input type="text" placeholder="Nama" name="name">
    <input type="email" placeholder="user@email.com" name="email">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="******" name="password">
    <button type="submit">Submit</button>
  </form>
</body>
<style>
  form {
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 10px;
  }
</style>

</html>