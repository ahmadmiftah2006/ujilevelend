<!DOCTYPE html>
<html>
<head>
    <title>Formulir Contoh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* CSS Khusus */
        /* Tambahkan gaya kustom Anda di sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Form</h2>
        <form method="post" action="/add_kerawanang">

            @csrf

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">NAMA SISWA</label>
                <select id="disabledSelect" style="width: 100%" class="form-select" name="nama_id">
                  @foreach ($siswa as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option> 
                  @endforeach
                </select>
              </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">NIPD</label>
                <select id="disabledSelect" style="width: 100%" class="form-select" name="nipd_id">
                  @foreach ($siswa as $data)
                  <option value="{{$data->id}}">{{$data->nipd}}</option> 
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Jenis Kerawanan</label>
                <select id="disabledSelect" style="width: 100%" class="form-select" name="jenis_kerawanan_id">
                  @foreach ($jenis_kerawanan as $data)
                  <option value="{{$data->id}}">{{$data->jenis_kerawanan}}</option> 
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Wali Kelas
                <select id="disabledSelect" style="width: 100%" class="form-select" name="walas_id">
                  @foreach ($walas as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option> 
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="name">Kesimpulan:</label>
                <input type="text" class="form-control" id="hasil_konseling" name="hasil_konseling" placeholder="Masukkan hasil konseling">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>