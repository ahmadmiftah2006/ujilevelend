@extends('dbguru.dashboard')
@section('title','table')

@section('contenttablegr')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Jadwal Siswa</h6>
        </div>

        <div class="col-sm-11 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex ">
          <button type="button" class="btn btn-primary  "><a href="/addw" class="text-light">ADD</a></button>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIPD</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Wali Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kerawanan</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kerawananw as $item)
                <tr>
                  <td style="text-align: center;">{{$loop ->iteration}}</td>
                  <td style="text-align: center;">{{$item ->siswa ->nama}}</td>
                  <td style="text-align: center;">{{$item ->siswa ->nipd}}</td>
                  <td style="text-align: center;">{{$item ->walas->nama}}</td>
                  <td style="text-align: center;">{{$item ->jenis_kerawanan ->jenis_kerawanan}}</td>
              </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

      @endsection