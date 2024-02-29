<?php

class Kampus
{
  private string $namaKampus = 'UPN Veteran Yogyakarta';
  private string $nama;
  private string $prodi;

  public function setNamaKampus($namaKampus)
  {
    $this->namaKampus = $namaKampus;

    return $this;
  }

  public function setNama($nama) {
    $this->nama = $nama;

    return $this;
  }

  public function setProdi($prodi) {
    $this->prodi = $prodi;

    return $this;
  }

  public function getNamaKampus()
  {
    return $this->namaKampus;
  }

  public function getNama()
  {
        return $this->nama;
  }

  public function getProdi()
  {
        return $this->prodi;
  }
}

?>