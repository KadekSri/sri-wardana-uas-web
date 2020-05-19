@extends('layouts.master')

@section('content')
			<h1>Edit Data Admin</h1>
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
			@endif
			<div class="row">
				<div class="btn btn-primary col-lg-12 ">
					<form action="/admin/{{$admin->id}}/update" method="POST">
						{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Admin</label>
					    <input name="nama_admin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Admin" value="{{$admin->nama_admin}}">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Laki-Laki" @if($admin->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
					      <option value="Perempuan" @if($admin->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Agama</label>
					    <select name="agama_admin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Hindu" @if($admin->agama_admin == 'Hindu') selected @endif>Hindu</option>
					      <option value="Budha" @if($admin->agama_admin == 'Budha') selected @endif>Budha</option>
					      <option value="Islam" @if($admin->agama_admin == 'Islam') selected @endif>Islam</option>
					      <option value="Kristen" @if($admin->agama_admin == 'Kristen') selected @endif>Kristen</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat Admin</label>
					    <textarea name="alamat_admin" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$admin->alamat_admin}}</textarea>
					  </div>
					  <button type="submit" class="btn btn-warning">Update</button>
					</form>
					</div>
			</div>
		</div>
		@endsection




