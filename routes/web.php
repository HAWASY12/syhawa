<?php

use App\Models\Type;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;

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
    $r = DB::select(DB::raw("SELECT COUNT(prenom) as candidats, concat(age, \" ans\") as age FROM candidats GROUP BY age;"));
    $d = "";
    foreach($r as $v) {
        $d .= "['".$v->age."', ".$v->candidats."],";
    }

    $datas = $d;

    $candidats=Candidat::all();
    $formations=Formation::all();
    $referentiels=Referentiel::all()->only([1,2,3]);
    $types=Type::all();
    return view('welcome',['candidats' =>$candidats, 'formations'=>$formations, 
    'referentiels'=>$referentiels, 'types'=>$types, 'datas'=>$datas]);
})->name('welcome');

Route::get('/graph', function () {
    $r = DB::select(DB::raw("SELECT COUNT(*) as formations, isStarted as rew FROM formations GROUP BY isStarted;"));
    $d = "";
    $se = [];
    foreach($r as $v) {
        if($v->rew==1){
            $se[]="en cours";
        }
        else{
            $se[]="en attente";
        }
       
    }
   
    foreach($se as $a){
        $d .= "['".$a."', ".$v->formations."],";

    }
    $datas = $d;

    return view('formation.graphe',['datas'=>$datas]);
})->name('graphe');


Route::resource('candidat', CandidatController::class);
Route::resource('formation', FormationController::class);
Route::resource('type', TypeController::class);
Route::resource('referentiel', ReferentielController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
