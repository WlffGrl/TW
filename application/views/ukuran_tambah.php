<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Tambah ukuran</title> 
        <style> 
            label { 
            display: inline-block; 
            width: 100px; 
            } 
        </style> 
    </head> 
    <body> 
        <h1>Tambah Ukuran</h1> 
        <form action="<?php echo site_url('Ukuran/prosesTambah'); ?>" method="post"> 
            <label>ID Ukuran</label><input type="text" name="id_ukuran"><br>
            <label>Ukuran</label><input type="text" name="ukuran"><br>
            <label>Deskripsi</label><input type="text" name="deskripsi"><br>
            <input type="submit" value="Tambah"> 
        </form> 
    </body> 
</html>


