<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use App\Actor;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.movies')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies.addmovie')->with('genres', $genres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "titulo" => 'required',
            "rating"  => 'required',
            "premios" => 'required',
            "duracion" => 'required',
            "fecha_de_estreno" => 'required|date',
            "genero" => "required"
        ]);

        $movie = new Movie([
            'title' => $request->input("titulo"),
            'rating' => $request->input("rating"),
            'awards' => $request->input("premios"),
            'length' => $request->input("duracion"),
            'release_date' => $request->input("fecha_de_estreno"),
            'genre_id' => $request->input("genero")        
        ]);

        $movie->save();

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $movie = Movie::find($id);
        $genre = Genre::find($movie->genre_id);

        return view('movies.editmovie')
            ->with('movie', $movie)
            ->with('genre', $genre)
            ->with('genres', $genres);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        $movie->title = $request->input("titulo");
        $movie->rating = $request->input("rating");
        $movie->awards = $request->input("premios");
        $movie->length = $request->input("duracion");
        $movie->release_date = $request->input("fecha_de_estreno");
        $movie->genre_id = $request->input("genero");

        $movie->save();


        return redirect("/movies/$movie->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect("/movies");

    }
}
