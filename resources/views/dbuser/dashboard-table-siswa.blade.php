@extends('dbuser.dashboard')
@section('title','table')

@section('contenttable')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Jadwal Siswa</h6>
          <a href="{{ route ('cetak_pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a>
        </div>

        <div class="col-sm-11 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex ">
          <button type="button" class="btn btn-primary  "><a href="/addj" class="text-light">ADD</a></button>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Guru BK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Layanan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Wali Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Konseling</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Konseling</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jadwal as $item)
                <tr>
                  <td style="text-align: center;">{{$loop ->iteration}}</td>
                  <td style="text-align: center;">{{$item ->nama}}</td>
                  <td style="text-align: center;">{{$item ->status}}</td>
                  <td style="text-align: center;">{{$item ->guru->nama}}</td>
                  <td style="text-align: center;">{{$item ->layanan ->jenis_layanan}}</td>
                  <td style="text-align: center;">{{$item ->deskripsi}}</td>
                  <td style="text-align: center;">{{$item ->walas->nama}}</td>
                  <td style="text-align: center;">{{$item ->tanggal_id}}</td>
                  <td style="text-align: center;">{{$item ->hasil_konseling}}</td>
                                        
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection