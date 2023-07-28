<!DOCTYPE html>
<html>
<head>
    <title>Formulir Wali Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* CSS Khusus */
        /* Tambahkan gaya kustom Anda di sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Form</h2>
        <form method="post" action="/add_jadwal">

            @csrf

            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama"  name="nama" placeholder="Masukkan nama">
            </div>
            
            <div class="form-group">
                <label for="phone">No Telp :</label>
                <input type="number" class="form-control" id="phone"  name="phone" placeholder="Masukkan telp">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" class="form-control" id="deskripsi"  name="deskripsi" placeholder="Masukkan nama">
            </div>

            <div class="form-group">
                <label for="disabledSelect" class="form-label">Wali Kelas</label>
                <select id="disabledSelect" class="form-select" name="walas_id">
                  @foreach ($walas as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option> 
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="disabledSelect" class="form-label">Guru BK</label>
                <select id="disabledSelect" class="form-select" name="guru_id">
                  @foreach ($guru as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option> 
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="disabledSelect" class="form-label">Jenis Layanan</label>
                <select id="disabledSelect" class="form-select" name="layanan_bk_id">
                  @foreach ($layanan_bk as $data)
                  <option value="{{$data->id}}">{{$data->jenis_layanan}}</option> 
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal :</label>
                <input type="date" class="form-control" id="tanggal_id"  name="tanggal_id">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>