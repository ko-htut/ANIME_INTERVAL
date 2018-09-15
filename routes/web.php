<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Page
Route::get('/', 'HomeController@home');

//Series Page
Route::get('/AnimeSeries', 'SeriesController@series');

//Series Episode Page
Route::get('/AnimeSeries/{anime_series_name}', 'SeriesController@series_episode');

//Series Video Page Server Rapid Video
Route::get('/AnimeSeries/{anime_series_name}/Episode-{series_episode_number}/Server=Rapid Video', 'SeriesController@series_video_rapid_video');

//Series Video Page Server Streamango
Route::get('/AnimeSeries/{anime_series_name}/{series_episode_number}/Server=Streamango', 'SeriesController@series_video_streamango');

//Movies Page
Route::get('/AnimeMovies', 'MoviesController@movies');

//Movie Video Page
Route::get('/AnimeMovies/{anime_movie_name}/Server=Streamango', 'MoviesController@movies_video_streamango');

Route::get('/AnimeList', 'AnimeListController@animelist');
Route::get('/anime-list-{letter}', 'AnimeListController@animelist2');

//movies https://gogoanime.sh/anime-movies.html
Route::get('/Movies','Movies_scrapController@get_movies');
//new https://gogoanime.sh/new-season.html
Route::get('/New_s','NewController@get_news');
//popular https://gogoanime.sh/anime-movies.html
Route::get('/Popular',"PopularController@getem");
//play_all Page
Route::get('/PlayAll', 'MoviesController@play_all');
//scrap anime page 
Route::get('/category/{name_of_anime}', 'ViewAnimePageController@idk');
Route::get('/search',"SearchController@searchit");
//scrap the anime movie or the episode
//write all routes before this one
Route::get('/{name_of_anime}', 'ViewAnimeController@idk');