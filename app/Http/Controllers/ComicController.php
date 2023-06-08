<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        
        // $request->validate([
        //     'title'=>'required|max:50',
        //     'description'=>'nullable|max:60000',
        //     'thumb'=>'required|url|max:255',
        //     'price'=>'required|max:6',
        //     'series'=>'required|max:40',
        //     'sale_date'=>'required|max:10',
        //     'type'=>'required|max:30',
        // ]);
        
        //$form_data = $this->validation($request->all());
        $form_data = $request->validate();

        $newComic = new Comic();
        $newComic->fill($form_data);

        $newComic->save();
        
        return redirect()->route('comics.show', ['comic'=>$newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        // $request->validate([
        //     'title'=>'required|max:50',
        //     'description'=>'nullable|max:60000',
        //     'thumb'=>'required|url|max:255',
        //     'price'=>'required|max:6',
        //     'series'=>'required|max:40',
        //     'sale_date'=>'required|max:10',
        //     'type'=>'required|max:30',
        // ]);
        
        // $form_data = $this->validation($request->all());
        $form_data = $request->validate();

        $comic->update($form_data);
        return to_route('comics.show', ['comic' => $comic->id])->with('status', 'Comic aggiornato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
