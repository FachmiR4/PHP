<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h2>Tambah Data Buku</h2><br>
        <form method="POST" action="proses.php?action=tambahData" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Image :</label>
                <input type="file" class="form-control" name="img" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="jdl_buku">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jml">
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
    </body>
</html>