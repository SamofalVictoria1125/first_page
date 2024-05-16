<?php

namespace App\Http\Controllers;

use App\Models\Tovaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TovarisController extends Controller
{
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
        return view('tovaris.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $filename    = $data['image']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $data['image']->move(Storage::path('/public/image/source_img/').'origin/',$filename);

        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/source_img/news/').'origin/'.$filename);
        $thumbnail->fit(300, 300);
        $thumbnail->save(Storage::path('/public/image/source_img/').'thumbnail/'.$filename);

        //Сохраняем новость в БД
        $data['image'] = $filename;
        Tovaris::create($data);

        return redirect()->route('cataloge');
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
