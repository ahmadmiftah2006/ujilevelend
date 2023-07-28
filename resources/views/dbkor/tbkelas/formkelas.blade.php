<!DOCTYPE html>
<html>
<head>
    <title>Formulir Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* CSS Khusus */
        /* Tambahkan gaya kustom Anda di sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Form</h2>
        <form method="post" action="/add">

            @csrf

            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input type="text" class="form-control" id="kelas"  name="kelas" placeholder="Masukkan Nama Kelas">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>