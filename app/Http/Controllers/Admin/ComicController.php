<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

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
        
        $form_comic = $request->validated();

        $comic = new Comic();
        $comic->title = $form_comic['title'];
        $comic->image = $form_comic['image'];
        $comic->description = $form_comic['description'];
        $comic->price = $form_comic['price'];
        $comic->type = $form_comic['type'];
        $comic->sale_date = $form_comic['sale_date'];
        $comic->series = $form_comic['series'];

        $comic->save();

        // return view('comics.show',compact('comic'));
        return redirect()->route('comics.show', ['comic'=>$comic->id] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show',compact('comic'));
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

        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        $form_data = $request->validated();
        
        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($form_data);

        return redirect()->route('comics.show',['comic'=>$comic_to_update->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();
         return redirect()->route('comics.index')->with('message','The comic ' . $comic_to_delete->title . ' has been removed');
    }
}
