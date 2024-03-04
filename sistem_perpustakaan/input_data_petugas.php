<html>
    <head>
    </head>
    <body>
        <form method="POST" action="proses_input_petugas.php">
            <label for="">Username</label><br>
            <input type="text" name="username" id="username"><br><br>
            <label for="">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <label for="">Nama</label><br>
            <input type="text" name="nama" id="nama"><br><br>
            <label for="">Jenis Kelamin</label><br>
            <select name="jns_kelamin" id="jns_kelamin">
                <option value="L">Laki-laki</option>
                <option value="W">Wanita</option>
            </select><br><br>
            <label for="">Alamat</label><br>
            <input type="text" name="alamat" id="alamat"><br><br>
            <label for="">Telepon</label><br>
            <input type="telepon" name="tlpn" id="tlpn"><br><br>
            <input type="Submit" value="Simpan">
        </form>
    </body>
</html>