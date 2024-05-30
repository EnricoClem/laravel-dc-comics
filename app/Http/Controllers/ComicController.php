<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index() {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function create() {
        return view('comics.create');
    }

    public function show($title) {
        $comic = Comic::find($title);
        if($comic === null) {
            abort('404');
        }
        return view('comics.show', compact('comic'));
    }

    public function store(Request $request) {
        $form_data = $request->all();
        $new_comic = Comic::create($form_data);
        return to_route('comics.show', $new_comic);
    }

}
