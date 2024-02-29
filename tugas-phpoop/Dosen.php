<?php

require_once 'Kampus.php';

class Dosen extends Kampus
{
  private int $nip;

  public function setNip($nip)
  {
    $this->nip = $nip;

    return $this;
  }

  public function getNip()
  {
    return $this->nip;
  }
}

?>