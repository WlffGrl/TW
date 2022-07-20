<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Update Ukuran</title> 
    <style> 
        label { 
            display: inline-block; 
            width: 100px; 
        } 
        
    </style> 
</head> 
    <body> 
    <h1>Update Barang</h1> 

    <form action="<?php echo site_url('ukuran/prosesUpdate/'.$ukuran->id_ukuran); ?>" method="post">
    <label>ID ukuran</label><input type="text" name="id_ukuran" value="<?php echo $ukuran->id_ukuran; ?>"><br> 
    <label>Ukuran</label><input type="text" name="ukuran" value="<?php echo $ukuran->ukuran; ?>"><br>
    <label>Deskripsi</label><input type="text" name="deskripsi" value="<?php echo $ukuran->deskripsi; ?>"><br> 
    <input type="submit" value="Update"> 
</form> 
</body>
