<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-top: 0;
    }

    input[type="text"] {
      width: calc(100% - 20px);
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    .list-anggota {
      margin-bottom: 20px;
    }

    .list-anggota input[type="text"] {
      margin-bottom: 5px;
    }

    #data__ {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <form action="" method="post">
    <h2>Form Pendaftaran Komunitas</h2>
    <input type="text" name="nama_komunitas" placeholder="Nama Komunitas" value="<?php echo isset($_POST['nama_komunitas']) ? $_POST['nama_komunitas'] : '' ?>">

    <hr>

    <div class="list-anggota">
    </div>
    <input type="hidden" class="total_anggota" value="0">
    <button type="button" class="tombol_tambah_anggota">Tambah Anggota</button>

    <hr>

    <button type="submit">Submit Form</button>
    <textarea class="data_json"><?php echo json_encode($_POST) ?></textarea>
  </form>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    function delete_anggota(key) {
      $('.data_' + key).remove()
    }

    function new_anggota(data) {
      var total_anggota = parseInt($('.total_anggota').val())
      var html = '<div id="data__" class="data_' + (total_anggota + 1) + '">' +
        '<input type="text" name="nama_anggota[]" placeholder="Nama Anggota ' + (total_anggota + 1) + '" value="' + (data.nama_anggota ? data.nama_anggota : '') + '">' +
        '<input type="text" name="email_anggota[]" placeholder="Email ' + (total_anggota + 1) + '" value="' + (data.email_anggota ? data.email_anggota : '') + '">' +
        '<input type="text" name="whatsapp_anggota[]" placeholder="Whatsapp ' + (total_anggota + 1) + '" value="' + (data.whatsapp_anggota ? data.whatsapp_anggota : '') + '">' +
        '<input type="text" name="alamat_anggota[]" placeholder="Alamat ' + (total_anggota + 1) + '" value="' + (data.alamat_anggota ? data.alamat_anggota : '') + '">' +
        '<button type="button" onclick="delete_anggota(' + (total_anggota + 1) + ')">Hapus</button>' +
        '</div>'
      $('.list-anggota').append(html)
      $('.total_anggota').val(total_anggota + 1)
    }

    $(document).ready(function() {
      $('.tombol_tambah_anggota').click(function() {
        new_anggota({
          nama_anggota: '',
          email_anggota: '',
          whatsapp_anggota: '',
          alamat_anggota: ''
        })
      })

      var data_json = $('.data_json').val()
      if (data_json) {
        data_json = JSON.parse(data_json)
        console.log(data_json)
        if (data_json['nama_anggota']) {
          for (var i = 0; i < data_json['nama_anggota'].length; i++) {
            var member = {
              nama_anggota: data_json['nama_anggota'][i],
              email_anggota: data_json['email_anggota'][i],
              whatsapp_anggota: data_json['whatsapp_anggota'][i],
              alamat_anggota: data_json['alamat_anggota'][i]
            }
            new_anggota(member)
          }
        }
      }
    })
  </script>

</body>

</html>