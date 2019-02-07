<?php

use Illuminate\Http\Request;

use App\Http\Resources\SongResource;
use App\Http\Resources\SongsCollection;
use App\Song;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// \DB::listen(function($query) {
//     var_dump($query->sql);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/songs/{song}', function(Song $song) {
    // return new SongResource($song);
    // return (new SongResource(Song::find(1)))->additional([
    //     'meta' => [
    //         'anything' => 'Some Value'
    //     ]
    // ]);
    return new SongsCollection(Song::with('album')->get());
});

Route::get('/songs', function() {
    // return SongResource::collection(Song::all());
    return new SongsCollection(Song::all());
});


Route::apiResource('books', 'BookController');
Route::post('books/{book}/ratings', 'RatingController@store');