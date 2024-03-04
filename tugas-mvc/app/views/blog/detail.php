<div class='container mt-5'>
  <div class='card' style='width: 18rem;'>
    <div class='card-body'>
      <h5 class='card-title'>
        <?= $data['blog']['judul']; ?>
      </h5>
      <h6 class='card-subtitle mb-2 text-muted'>
        <?= $data['blog']['penulis']; ?>
      </h6>
      <p class='card-text'>
        <?= $data['blog']['tulisan']; ?>
      </p>
      <a href="<?= BASE_URL; ?>/blog" class='card-link'>
        Kembali
      </a>
    </div>
  </div>
</div>