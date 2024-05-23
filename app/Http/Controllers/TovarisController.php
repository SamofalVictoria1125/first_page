<?php

namespace App\Http\Controllers;

use App\Models\Tovaris;
use Illuminate\Http\Request;
use App\Http\Requests\TovarRequest;
use App\Models\Tovar;
use App\Http\Requests\FilterRequest;


class TovarisController extends Controller
{

    public function submit(TovarRequest $req){
     //$validation = $req->validate([
       //'name' => 'required|min:5|max:12',
         //'info' => 'required|min:10|max:60',
         //'firma' => 'required|max:20'
     //]);

        $tovar = new Tovar();
        $tovar->name = $req->input('name');
        $tovar->info = $req->input('info');
        $tovar->firm = $req->input('firm');
        $tovar->image = '/storage/'.$tovar;



        $tovar->save();

        return redirect()->route('cataloge')->with('success', 'Товар был успешно добавлен');
    }

    public function AllData(){
        $tovar = new Tovar();
        return view('tovarses', ['data' => $tovar->orderBy('id')->get()]);
    }

    public function ShowOneTovar(Tovar $tovar){

        return view('one-tovar', ['data' => $tovar]);
    }

    public function UpdateTovar($id){
        $tovar = Tovar::find($id);
        return view('update-tovar', ['data' => $tovar]);
    }

    public function UpdateTovarSubmit($id, TovarRequest $req){


        $tovar = Tovar::find($id);
        $tovar->name = $req->input('name');
        $tovar->info = $req->input('info');
        $tovar->firm = $req->input('firm');

        $tovar->save();

        return redirect()->route('cataloge-all', $id)->with('success', 'Товар был успешно обновлен');
    }

    public function DeleteTovar($id){
        Tovar::find($id)->delete();

        return redirect()->route('cataloge-all', $id)->with('success', 'Товар был успешно удален');
    }











    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Tovaris $tovaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tovaris $tovaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tovaris $tovaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tovaris $tovaris)
    {
        //
    }
}
