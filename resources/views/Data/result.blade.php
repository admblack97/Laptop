@extends('Data.Layouts.Master')
@section('content')
	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
				<th>ID Penjualan</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Kondisi</th>
        <th>Harga</th>
				<th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($result as $datalaptop)
        {{-- expr --}}
        <tr>
					<td>{{$datalaptop->jual_id}}</td>
          <td>{{$datalaptop->merek}}</td>
          <td>{{$datalaptop->tipe}}</td>
          <td>{{$datalaptop->kondisi}}</td>
          <td>{{$datalaptop->harga}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $datalaptop->id]) }}" class="btn btn-danger btn-xs" >Hapus</a>
						<a href="{{ Route('edit', ['id' => $datalaptop->id]) }}" class="btn btn-warning btn-xs">Edit</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>
@endsection
