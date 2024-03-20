<?php

namespace App\Http\Controllers\Guest;

use App\Models\dc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = dc::All();

        return view('pages.comicsView.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:50',
            'description' => 'required|max:300',
            'type' => 'required|max:50',
        ]);
        // dd($request);
        $form_data = $request->all();
        $new_comic = new dc();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = dc::findOrFail($id);

        return view('pages.comicsView.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = dc::findOrFail($id);
        return view('pages.comicsView.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form_data = $request->all();
        $comic = dc::find($id);
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = dc::find($id);

        if ($comic) {
            $comic->delete();
        }

        $comics = dc::all();
        return view('pages.comicsView.index', compact('comics'));
    }
}
