<?php

require_once 'Kampus.php';

class Mahasiswa extends Kampus
{
  private int $nim;
  private int $angkatan;

  public function setNim($nim)
  {
    $this->nim = $nim;

    return $this;
  }

  public function setAngkatan($angkatan)
  {
    $this->angkatan = $angkatan;

    return $this;
  }

  public function getNim()
  {
    return $this->nim;
  }

  public function getAngkatan()
  {
    return $this->angkatan;
  }
}

?>