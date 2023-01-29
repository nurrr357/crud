<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
</head>

<body>
    <p hidden>
        <?php
        session_start();
        include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM perpustakaan WHERE id = $id LIMIT 1";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        ?>
    </p>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT DATA
                    </div>
                    <div class="card-body">
                        <form action="update_siswa.php" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="nis" value="<?php echo $row['judul'] ?>" placeholder="Masukkan Judul" class="form-control">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input type="text" name="nama" value="
                                <?php echo $row['penerbit'] ?>" placeholder="Masukkan Penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isbm</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Isbm" rows="4"><?php echo $row['isbm'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>