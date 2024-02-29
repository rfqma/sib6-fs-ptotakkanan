<?php

$mysqli = new mysqli("localhost","root","","sibptotakkanan");

if ($mysqli->connect_errno) {
  echo "MySQL Connection Failed: " .$mysqli->connect_error;
  exit();
}

$mahasiswa = new Mahasiswa($mysqli);

class Mahasiswa {

  function __construct($db) {
    $this->db = $db;
  }

  function get_data() {
    $result = $this->db->query('SELECT * FROM mahasiswa');
    return $result->fetch_all();
  }

  function send_data($input) {
    $error = 0;

    if (!isset($input['nama']) || $input['nama'] == '') {
      $error++;
    }

    if (!isset($input['email']) || $input['email'] == '') {
      $error++;
    }

    if (!isset($input['nomor_whatsapp']) || $input['nomor_whatsapp'] == '') {
      $error++;
    }

    if (!isset($input['alamat']) || $input['alamat'] == '') {
      $error++;
    }

    if ($error == 0) {
      return $this->db->query(
        'INSERT INTO mahasiswa (nama, email, nomor_whatsapp, alamat) 
        VALUES ("
        '.$input['nama'].'
          ","
          '.$input['email'].'
          ","
          '.$input['nomor_whatsapp'].'
          ","
          '.$input['alamat'].'
          ")');
    } else {
      return false;
    }
  }
}

if (count($_POST) > 0) {
  $data=array();
  $data = $_POST;

  if($mahasiswa->send_data($data)) {
    echo '<script>alert("Data berhasil disimpan")</script>';
  } else {
    echo '<script>alert("Data gagal disimpan")</script>';
  }
}

?>

<html>
  <form action="" method="post">
  <table>
    <tr>
      <th>Nama</th>
      <td>
        <input type="text" name="nama">
      </td>
    </tr>
    <tr>
      <th>Email</th>
      <td>
        <input type="text" name="email">
      </td>
    </tr>
    <tr>
      <th>Whatsapp</th>
      <td>
        <input type="text" name="nomor_whatsapp">
      </td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>
        <textarea name="alamat"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <button type='submit'>submit</button>
      </td>
    </tr>
  </table>
  </form>
</html>