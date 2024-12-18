<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::latest()->get();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'genre' => $request->genre,
            'image_path' => $request->image_path,
            'image_path' => $request->file('image_path') ? $request->file('image_path')->store('image_paths', 'public') : 'default/ildio.jpg',
        ]);

        return redirect()->route('songs.index')
            ->with('success', 'Song added successfully!');
    }
}
