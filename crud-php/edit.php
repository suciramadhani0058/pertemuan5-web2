<?php 
include 'database.php';
$db = new Database;
// var_dump($db->editData($_GET['id'])); menguji fungsi edit untuk melihat data berdasarkan id
$detail = $db->editData($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
<h1>OOP PHP CRUD</h1>
<h4>Edit Data</h4>
<hr class="mt-0">
<form method="POST" action="proses.php?aksi=update">
    <?php 
    foreach ($detail as $dataUser){
        ?>
        <input type="hidden" name="id" value="<?php echo $dataUser['id']?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama']?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat"><?php echo $dataUser['alamat']?></textarea>
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp']?>">
    </div>
    <?php 
    }
    ?>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
</div>
</body>
</html>