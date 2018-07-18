<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

  body {
    font-family: arial, sans-serif;
  }

  table {
    border: "1px";
    border-collapse: collapse;
    width: 100%;
    align: center;
  }

  td, th {
    border: 1px solid;
    text-align: center;
  }

  h1 {
    text-align: center;
  }

</style>
<body>
  <table>
    <thead>
      <tr bgcolor="#b8b8b8" text-align="center" >
        <th>ID Penjualan</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Kondisi</th>
        <th>Harga</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($laptop as $datalaptop)
      <tr>
        <td>{{$datalaptop->jual_id}}</td>
        <td>{{$datalaptop->merek}}</td>
        <td>{{$datalaptop->tipe}}</td>
        <td>{{$datalaptop->kondisi}}</td>
        <td>{{$datalaptop->harga}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
