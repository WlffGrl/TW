<html> 
<head> 
    <title>Daftar Ukuran</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head> 
<body> 
<div class="container">
    <h1 align="center">Daftar Ukuran</h1> 
    <a href="ukuran/tambah"><button>Tambah</button></a>
    <div class="flex" style="display: flex; justify-content: space-around; flex-direction: row; flex-wrap: wrap;">
    <?php foreach($ukuran->result() as $row ):
    $edit = '<a href="'.site_url("ukuran/update/$row->id_ukuran").'">edit</a>';
    $hapus = '<a href="'.site_url("ukuran/hapus/$row->id_ukuran").'">hapus</a>';?>
    <div class="card" style="width: 18rem; margin: 20px;">
    <img src="https://images.ctfassets.net/9htf9uzhsn4z/9Hd4Cqiej2Ae0ibCS0weV/6c252d120c8d7ea945dcf5afe36c9450/lulu-book-trim-sizes-pocket-book.jpg?q=70&fm=jpg" class="card-img-top" alt="lulu print book">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row->ukuran; ?></h5>
            <p class="card-text"><?php echo $row->deskripsi; ?></p>
            <a href="" class="card-link" ><?php echo $edit ?></a>
            <a href="#" class="card-link"><?php echo $hapus ?></a>
            
        </div>
    </div>
    <?php endforeach; ?>
    </div>
    </div>
    <script> 
        $(document).ready(function() { 
        $('#myTable').DataTable(); 
        }); 
    </script> 
</body> 
</html>
