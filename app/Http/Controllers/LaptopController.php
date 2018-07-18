<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use PDF;
class LaptopController extends Controller
{
  public function index()
  {
    return view ('index');
  }

  public function tampil(){
    $laptops = Laptop::all();
    return view('Data.tampil', ['laptop' => $laptops]);
  }

  public function create(){
    return view('Data.create');
  }

  public function insert(Request $request){
    $laptop = new Laptop;
    $laptop->jual_id = $request->jual_id;
    $laptop->merek = $request->merek;
    $laptop->tipe = $request->tipe;
    $laptop->kondisi = $request->kondisi;
    $laptop->harga = $request->harga;
    $laptop->save();

    return redirect(Route('tampil'))->with('alert-success','Berhasil Menambahkan Data!');
    // return redirect()->route('index');
    // return redirect()->action('BarangController@index');
    // return Redirect::action('BarangController@index');
  }

  public function delete($id){
    $laptop = Laptop::findOrFail($id);
    // dd($barang);
    $laptop->delete();
    return redirect(Route('tampil'))->with('success','Data berhasil dihapus');
  }

  public function edit($id){
    $laptops = Laptop::findOrFail($id);
    return view('Data.edit', ['laptop' => $laptops]);
  }

  public function submitedit(Request $request, $id){
    $laptop = Laptop::findOrFail($id);
    $laptop->jual_id = $request->jual_id;
    $laptop->merek = $request->merek;
    $laptop->tipe = $request->tipe;
    $laptop->kondisi = $request->kondisi;
    $laptop->harga = $request->harga;
    $laptop->save();

    return redirect(Route('tampil'))->with('alert-success','Berhasil Merubah Data!');
  }

  //Pencarian
  public function search(Request $request){
    $search = $request->get('search');
    $result = Laptop::where('merek', 'LIKE', '%'.$search.'%')->paginate(10);
    return view('Data.result', compact('search', 'result'));
  }

  //Cetak Data
  public function print(){
    $laptop = Laptop::all();
    $pdf=PDF::loadView('Data.print', ['laptop' => $laptop]);
    return $pdf->setPaper('a3', 'landscape')->stream();
  }
}
