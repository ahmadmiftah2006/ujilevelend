<!DOCTYPE html>
<html>
<head>
    <title>Formulir Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* CSS Khusus */
        /* Tambahkan gaya kustom Anda di sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Form</h2>
        <form method="post" action="/addg">

            @csrf

            <div class="form-group">
                <label for="guru">Guru BK :</label>
                <input type="text" class="form-control" id="nama"  name="nama" placeholder="Masukkan Nama Guru">
            </div>

            <div class="form-group">
                <label for="disabledSelect" class="form-label">Kelas</label>
                <select id="disabledSelect" class="form-select" name="kelas_id">
                  @foreach ($kelas as $data)
                  <option value="{{$data->id}}">{{$data->kelas}}</option> 
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone :</label>
                <input type="number" class="form-control" id="phone"  name="phone" placeholder="Masukkan Password">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email"  name="email" placeholder="Masukkan Email">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password"  name="password" placeholder="Masukkan Password">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>