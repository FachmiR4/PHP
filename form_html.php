<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Select Otomatis</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <form>
        <label for="pilihan">Pilih Opsi:</label>
        <select id="pilihan" name="pilihan"></select>
    </form>

    <script>
        $(document).ready(function() {
            // Panggil fungsi untuk mengisi otomatis opsi select saat halaman dimuat
            isiOpsiSelect();
        });

        function isiOpsiSelect() {
            // Kirim permintaan Ajax untuk mendapatkan data opsi dari server
            $.ajax({
                url: 'ambil_opsi.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Isi opsi select dengan data yang diterima dari server
                    var select = $('#pilihan');
                    select.empty(); // Kosongkan opsi sebelum memuat yang baru

                    // Loop melalui data dan tambahkan opsi ke elemen select
                    $.each(data, function(index, value) {
                        select.append('<option value="' + value.id + '">' + value.id_anggota + '</option>');
                    });
                },
                error: function() {
                    console.log('Gagal mengambil data opsi.');
                }
            });
        }
    </script>

</body>
</html>
