<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Http\Requests\ComicReaquest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::all();

        return view('Comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('Comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicReaquest $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->slug = Helper::makeSlug($data['title'], new Comic());
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = str_replace('$', '', $data['price']);
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];
        $new_comic->artists = json_encode($data['artists']);
        $new_comic->writers = json_encode($data['writers']);
        $new_comic->save();

        return redirect(route('comics.show', $new_comic));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $data = $comic;
        return view('Comics.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        $data = $comic;
        // dd($data->description);

        return view('Comics.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicReaquest $request, Comic $comic)
    {
        $data = $request->all();


        if ($data['title'] !== $comic->title) {
            $data['slug'] = Helper::makeSlug($data['title'], $comic);
        }

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
