@extends('Data.Layouts.Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $laptop->id]) }}" method="post">
    <fieldset>
      @csrf

      <div class="form-group">
        <label class="col-md-2 control-label" for="jual_id">ID Penjualan</label>
        <div class="col-md-6">
          <input name="jual_id" type="text" placeholder="ID Penjualan" class="form-control" value="{{$laptop->jual_id}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="merek">Merek</label>
        <div class="col-md-6">
          <input name="merek" type="text" placeholder="Merek" class="form-control" value="{{$laptop->merek}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tipe">Tipe</label>
        <div class="col-md-6">
          <input name="tipe" type="text" placeholder="Tipe" class="form-control" value="{{$laptop->tipe}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="kondisi">Kondisi</label>
        <div class="col-md-6">
          <input name="kondisi" type="text" placeholder="Kondisi" class="form-control" value="{{$laptop->kondisi}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="harga">Harga</label>
        <div class="col-md-6">
          <input name="harga" type="text" placeholder="Harga" class="form-control" value="{{$laptop->harga}}">
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
