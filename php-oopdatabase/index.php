<!-- Pertemuan Kamis, 29 Februari 2024 (sesi mentoring) -->
<?php

class Mahasiswa {

  function __construct($db) {
    $this->db = $db;
  }

  function get_data() {
    $result = $this->db->query('SELECT * FROM data_diri');
    return $result->fetch_all();
  }

  function save_data($input) {
    $error = 0;

    if (!isset($input['nama']) || $input['nama'] == '') {
      $error++;
    }

    if ($error == 0) {
      return $this->db->query(
        'INSERT INTO data_diri (nama, email, whatsapp, alamat) 
        VALUES ("
        '.$input['nama'].'
          ","
          '.$input['email'].'
          ","
          '.$input['whatsapp'].'
          ","
          '.$input['alamat'].'
          ")');
    } else {
      return false;
    }
  }
}

$mysqli = new mysqli("localhost","root","","sibptotakkanan");

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_errno ."". $mysqli->connect_error;
  exit();
}

$mahasiswa = new Mahasiswa($mysqli);

if (count($_POST) > 0) {
  $input_luar=array();
  $input_luar = $_POST;

  if($mahasiswa->save_data($input_luar)) {
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
        <input type="text" name="whatsapp">
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