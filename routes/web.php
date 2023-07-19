<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MemberExportController;
use App\Models\Event;
use App\Models\Band;
use App\Models\Announcement;
use App\Models\Calendar;


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

Route::get('/', function () {
    $all_announcements = '';
    $announcements = Announcement::all();
    foreach($announcements as $announcement){
        $all_announcements .= $announcement->info;
        $all_announcements .= '  ---   ';
    }
    return view('home',[
        'weekly'=> Event::where('weekly',true)->get(),
        'others'=> Event::where('weekly',false)->get(),
        'announcements' => $all_announcements
    ]);
});
Route::get('/bands', function(){
    return view('band',[
        'bands' => Band::all()
    ]);
});

Route::get('/articles', [PostController::class,'index']);
Route::get('/articles/{slug}', [PostController::class,'show']);

Route::get('/activities', [ActivityController::class,'index']);
Route::get('/activities/{slug}', [ActivityController::class,'show']);

//Route::get('/members/export',[MemberExportController::class,'index']);
//Route::get('/members/export/pdf',[MemberExportController::class,'createMemberPDF']);

Route::get('/api/bible/votd', function(){
    $response = Http::acceptJson()->get('https://labs.bible.org/api',[
        'passage' => 'votd',
        'type' => 'json'
    ]);
    
    if($response->successful()){
        
        return response()->json($response);
    }
});

Route::get('/api/calendar', function(){
    return response()->json(Calendar::all(),200);
});



Route::group(['prefix' => 'admin'], function () {
    Route::get('/members/export',[MemberExportController::class,'index']);
    Route::get('/members/export/pdf',[MemberExportController::class,'createMemberPDF']);

    Voyager::routes();
});
