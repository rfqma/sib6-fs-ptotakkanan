<!-- Pertemuan Senin, 26 Februari 2024 (sesi materi pagi) -->

<?php
date_default_timezone_set('Asia/Jakarta');

class human
{
  public $height;
  public $dateToday;

  function __construct($informationArray)
  {
    $this->name = $informationArray["name"];
    $this->age = $informationArray["age"];
    $this->gender = $informationArray["gender"];
  }

  function get_name()
  {
    return $this->name;
  }

  function get_age()
  {
    return $this->age;
  }

  function get_gender()
  {
    return $this->gender;
  }

  function get_height()
  {
    return $this->height;
  }

  function get_dateToday()
  {
    return $this->dateToday;
  }
}

class school extends human
{
  function set_materi($materi)
  {
    $this->materi = $materi;
  }

  function get_materi()
  {
    return $this->materi;
  }
}

class hobby extends school
{
  function get_hobby()
  {
    return "Fotografi";
  }
}

$sekolah = new school(array(
  "name" => "Rifqi",
  "age" => "21",
  "gender" => "Laki-laki"
));
$sekolah->set_materi("IPA");
$sekolah->height = 170;
$sekolah->dateToday = date("d-m-Y H:i:s");


echo 'Selamat datang ' . $sekolah->get_name()
  . ' yang berumur ' . $sekolah->get_age()
  . ' saat ini belajar materi ' . $sekolah->get_materi()
  . ' dengan tinggi ' . $sekolah->get_height()
  . ' dan berjenis kelamin ' . $sekolah->get_gender();
echo ', Hari ini tanggal ' . $sekolah->get_dateToday();
?>

<html>

<body>
  <h1>
    <?php
    echo "<br>\nLine ini adalah HTML";
    echo "<br>\nHari ini tanggal " . $sekolah->get_dateToday();
    ?>
  </h1>
</body>
<style>
  h1 {
    color: blue;
  }
</style>

</html>