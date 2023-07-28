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
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <form method="post" action="/jadwalguru/up/{{$jadwal->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="ttl">Tanggal :</label>
                  <input type="date" class="form-control" id="tanggal_id"  name="tanggal_id" value="{{$jadwal->tanggal_id}}">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi :</label>
                  <input type="text" class="form-control" name="deskripsi" value="{{$jadwal->desripsi}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>