@extends('Data.Layouts.Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf

      <div class="form-group">
        <label class="col-md-2 control-label" for="jual_id">ID Penjualan</label>
        <div class="col-md-6">
          <input name="jual_id" type="text" placeholder="ID Penjualan" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="merek">Merek</label>
        <div class="col-md-6">
          <input name="merek" type="text" placeholder="Merek" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tipe">Tipe</label>
        <div class="col-md-6">
          <input name="tipe" type="text" placeholder="Tipe" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="kondisi">Kondisi</label>
        <div class="col-md-6">
          <input name="kondisi" type="text" placeholder="Kondisi" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="harga">Harga</label>
        <div class="col-md-6">
          <input name="harga" type="text" placeholder="Harga" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
