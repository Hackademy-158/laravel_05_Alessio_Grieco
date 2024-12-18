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

    public function store(Request $request)
    {
        $image_path = $request->file('image_path') ? $request->file('image_path')->store('image_paths', 'public') : 'default/ildio.jpg';

        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'genre' => $request->genre,
            'image_path' => $image_path,
        ]);

        return redirect()->route('songs.index')
            ->with('success', 'Song added successfully!');
    }

    public function create()
    {
        return view('songs.create');
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $data = $request->except('image_path');

        if ($request->hasFile('image_path')) {
            // Cancella la vecchia immagine se esiste
            if ($song->image_path && $song->image_path !== 'default/ildio.jpg') {
                Storage::disk('public')->delete($song->image_path);
            }

            // Immagazzina la nuova immagine
            $data['image_path'] = $request->file('image_path')->store('image_paths', 'public');
        }

        $song->update($data);
        return redirect()->route('songs.index')->with('success', 'Song updated successfully!');
    }

    public function destroy(Song $song)
    {
        if ($song->image_path && $song->image_path !== 'default/ildio.jpg') {
            Storage::disk('public')->delete($song->image_path);
        }

        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully!');
    }
}
