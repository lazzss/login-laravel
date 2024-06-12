<?php

// Web Routes
use App\Http\Controllers\homeController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
// Dashboard Routes
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// Table Routes
use App\Http\Controllers\tblAlunosController;
use App\Http\Controllers\tblCursosController;
use App\Http\Controllers\tblMatriculasController;
use App\Http\Controllers\tblAulasController;

//--------------------------------------------------------------------------
// Web Routes
//--------------------------------------------------------------------------
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('sobre',[sobreController::class, 'sobre'])->name('sobre');
Route::get('cursos', [ CursosController::class, 'cursos'])->name('cursos');
Route::get('contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('menu', [MenuController::class, 'menu'])->name('menu');

//--------------------------------------------------------------------------
// LOGIN ROUTES
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login');
//--------------------------------------------------------------------------

//--------------------------------------------------------------------------
// DASHBOARD ROUTES
Route::get('/dashboard/perfil', [AdminController::class, 'perfil'])->name('dashboard.perfil');
Route::get('/dashboard/tabelas', [AdminController::class, 'tabelas'])->name('dashboard.tabelas');
//--------------------------------------------------------------------------

// --------------------------------------------------------------------------
// CROUD ALUNOS
Route::get('/dashboard/tabelas/tblAlunos', [tblAlunosController::class, 'tblAlunos'])->name('dashboard.tabelas.tblAlunos');
//--------------------------------------------------------------------------
Route::get('/dashboard/tabelas/tblAlunos/create', [tblAlunosController::class, 'createAlunos'])->name('dashboard.tabelas,tblAlunos.create');
Route::post('/dashboard/tabelas/tblAlunos/cadAdmin', [tblAlunosController::class,'cadAlunos'])->name('cadAdmin');
Route::post('/dashboard/tabelas/tblAlunos', [tblAlunosController::class, 'cadAdmin'])->name('dashboard.tabelas,tblAlunos.cad');
Route::get('/dashboard/tabelas/tblAlunos/{id}/edit', [tblAlunosController::class, 'editAlunos'])->name('dashboard.tabelas,tblAlunos.edit');
Route::post('/dashboard/tabelas/tblAlunos/{id}/updateAdmin', [tblAlunosController::class, 'updateAlunos'])->name('update');
Route::put('/dashboard/tabelas/tblAlunos/{id}/desativar', [tblAlunosController::class, 'desativarAlunos'])->name('desativar');

//--------------------------------------------------------------------------
// CROUD CURSOS
Route::get('/dashboard/tabelas/tblCursos', [tblCursosController::class, 'tblcursos'])->name('dashboard.tabelas.tblcursos');
//--------------------------------------------------------------------------
Route::get('/dashboard/tabelas/tblCursos/create', [tblCursosController::class, 'createCursos'])->name('dashboard.tabelas,tblcursos.create');
Route::post('/dashboard/tabelas/tblCursos/cadAdmin', [tblCursosController::class,'cadCursos'])->name('cadAdmin');
Route::post('/dashboard/tabelas/tblCursos', [tblCursosController::class, 'cadAdmin'])->name('dashboard.tabelas,tblcursos.cad');
Route::get('/dashboard/tabelas/tblCursos/{id}/edit', [tblCursosController::class, 'editCursos'])->name('dashboard.tabelas,tblcursos.edit');
Route::post('/dashboard/tabelas/tblCursos/{id}/updateAdmin', [tblCursosController::class, 'updateCursos'])->name('update');
Route::put('/dashboard/tabelas/tblCursos/{id}/desativar', [tblCursosController::class, 'desativarCursos'])->name('desativar');

//--------------------------------------------------------------------------
// CROUD MATRICULAS
Route::get('/dashboard/tabelas/tblMatriculas', [tblMatriculasController::class, 'tblmatricula'])->name('dashboard.tabelas.tblmatricula');
//--------------------------------------------------------------------------
Route::get('/dashboard/tabelas/tblMatriculas/create', [tblMatriculasController::class, 'createMatriculas'])->name('dashboard.tabelas,tblMatriculas.create');
Route::post('/dashboard/tabelas/tblMatriculas/cadAdmin', [tblMatriculasController::class,'cadMatriculas'])->name('cadAdmin');
Route::post('/dashboard/tabelas/tblMatriculas', [tblMatriculasController::class, 'cadAdmin'])->name('dashboard.tabelas,tblMatriculas.cad');
Route::get('/dashboard/tabelas/tblMatriculas/{id}/edit', [tblMatriculasController::class, 'editMatriculas'])->name('dashboard.tabelas,tblMatriculas.edit');
Route::post('/dashboard/tabelas/tblMatriculas/{id}/updateAdmin', [tblMatriculasController::class, 'updateMatriculas'])->name('update');
Route::put('/dashboard/tabelas/tblMatriculas/{id}/desativar', [tblMatriculasController::class, 'desativarMatriculas'])->name('desativar');

//--------------------------------------------------------------------------
// CROUD AULAS
Route::get('/dashboard/tabelas/tblAulas', [tblAulasController::class, 'tblAlunos'])->name('dashboard.tabelas.tblAulas');
//--------------------------------------------------------------------------
Route::get('/dashboard/tabelas/tblAulas/create', [tblAulasController::class, 'createAulas'])->name('dashboard.tabelas,tblAulas.create');
Route::post('/dashboard/tabelas/tblAulas/cadAdmin', [tblAulasController::class,'cadAulas'])->name('cadAdmin');
Route::post('/dashboard/tabelas/tblAulas', [tblAulasController::class, 'cadAdmin'])->name('dashboard.tabelas,tblAulas.cad');
Route::get('/dashboard/tabelas/tblAulas/{id}/edit', [tblAulasController::class, 'editAulas'])->name('dashboard.tabelas,tblAulas.edit');
Route::post('/dashboard/tabelas/tblAulas/{id}/updateAdmin', [tblAulasController::class, 'updateAulas'])->name('update');
Route::put('/dashboard/tabelas/tblAulas/{id}/desativar', [tblAulasController::class, 'desativarAulas'])->name('desativar');
//--------------------------------------------------------------------------
Route::get('/sair', function(){
  session()->flush();
  return redirect('/');
})->name('sair');