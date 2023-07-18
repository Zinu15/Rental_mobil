<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Http\Requests\StoreMobilRequest;
use App\Http\Requests\UpdateMobilRequest;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $dataMobil = Mobil::where('mobil.id','like','%'.$search.'%')
            ->orwhere('mobil.merek','like','%'.$search.'%')
            ->orwhere('mobil.nopol','like','%'.$search.'%')
            ->paginate(10)->fragment('mobil');
        }else{
        $dataMobil = Mobil::paginate(10)->fragment('mobil');
        }
        return view('mobil.data')->with([
            'mobil' => $dataMobil,
            'search' => $search
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMobilRequest $request)
    {
        $mobil = new Mobil;
        $mobil->id = $request->id;
        $mobil->merek = $request->merek;
        $mobil->model = $request->model;
        $mobil->nopol = $request->nopol;
        $mobil->harga = $request->harga;
        $mobil->save();

        return redirect('mobil')->with('msg','Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
       $id = $mobil->id;
       $data = Mobil::find($id);
       return view('mobil.formedit')->with([
        'id' => $id,
        'merek' => $data->merek,
        'model' => $data->model,
        'nopol' => $data->nopol,
        'harga' => $data->harga
       ]);


    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMobilRequest $request, Mobil $mobil)
    {
        $id = $mobil->id;
        $data = $mobil->find($id);
        $data->merek = $request->merek;
        $data->model = $request->model;
        $data->nopol = $request->nopol;
        $data->harga = $request->harga;
        $data->save();

        return redirect('mobil')->with('msg','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        $id = $mobil->id;
        $data = $mobil->find($id);
        $data->delete();

        return redirect('mobil')->with('msg','Berhasil Hapus Data');
    }
}
