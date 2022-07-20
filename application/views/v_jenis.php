<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
  <h1></h1>
  <div class="container">

    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID Jenis</th>
          <th>Nama Jenis</th>
          <th>Deskripsi </th>
          <th>Aksi</th>


        </tr>


        <?php
        foreach ($jenis->result() as $row) {
        ?>

          <tr>
            <td><?= $row->id_jenis; ?></td>
            <td><?= $row->nama_jenis; ?></td>
            <td><?= $row->deskripsi; ?></td>
            <td>
              <a href="<?php echo site_url("" . $row->id_jenis); ?>">Edit</a>
              <a href= "<?php echo site_url("" . $row->id_jenis); ?> ">Delete</a>
            </td>
          </tr>
      </thead>
    <?php
        }
    ?>

    </table>
    <div class="flex" style="display: flex; justify-content: space-around; flex-direction: row; flex-wrap: wrap;">
    <?php foreach($jenis->result() as $row ) :?>
    <div class="card" style="width: 18rem; margin: 20px;">
    <img src="https://images.ctfassets.net/9htf9uzhsn4z/3x4ffQYKM9bDXCmJCU5NxE/31f78ff861db659aad323feb1fe57450/lulu-product-print-book-thumb-16-9.jpg?q=70&fm=jpg" class="card-img-top" alt="lulu print book">
    <div class="card-body">
    <h5 class="card-title"><?php echo $row->nama_jenis; ?></h5>
    <p class="card-text"><?php echo $row->deskripsi; ?></p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>
</div>
<?php endforeach; ?>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>


</body>

</html>