@extends('dbkor.dashboard')
@section('title','tablekordinat')

@section('contenttablekordinat')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Wali Kelas Table</h6>
            </div>

            <div class="col-sm-11 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex ">
              <button type="button" class="btn btn-primary  "><a href="/add_walas" class="text-light">ADD</a></button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Wali Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($walas as $item)
                    <tr>
                      <td style="text-align: center;">{{$loop ->iteration}}</td>
                      <td style="text-align: center;">{{$item ->nama}}</td>
                      <td style="text-align: center;">{{$item ->kelas->kelas}}</td>
                      <td style="text-align: center;">{{$item ->user ->email}}</td>
                      <form action="/walas/destroy/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <td style="text-align: center;"><button type="submit" class="btn btn-danger">Hapus</button></td>
                      </form>   
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection