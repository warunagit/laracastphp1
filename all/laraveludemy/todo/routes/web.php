<?php

use Illuminate\Support\Facades\Route;

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

//sending tasks list
Route::get('/tasklist', function () use($tasks) {
    return view('tasklist',[
       'tasks'=>$tasks
    ]);
});

Route::get('/', function () {
    //return view('home');
    return 'HELLO';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//request with a parameter
//{paramone}    :place holder
//$paramone     :parameter value
//http://localhost/danikrossing/laravel1/public/param/dani
Route::get('/param/{paramone}', function ($paramone) {
    //return view('param');
    return $paramone;
});

//request with multiple parameters
Route::get('/multiparam/{paramone}/{paramtwo}', function ($paramone,$paramtwo) {
    return $paramone.' - '.$paramtwo;
    //return view('multiparam');
});

//named routes
Route::get('/namedroute', function () {
    return 'named-route is a internal page call';
});

Route::get('/namedroutewithparam', function () {
    return 'named-route-with-param';
})->name("namedroutewithparam");

//grouped routes
//use for urls under the same category name
Route::prefix("portfolio")->group(function (){
    Route::get('/company', function (){
        return view('company');
    });

    Route::get('/organization', function (){
        return view('organization');
    });
});

//redirect url
Route::get('/newurl',function(){
    return redirect('/redirect');
})->name('hello');

Route::get('/halo',function(){
    return redirect()->route('/halo');
});

Route::fallback(function(){
    return 'Something if there is nothing';
});

Route::get('/arrayparams',function(){
    return view('arrayparams',[
        "name"=>"param1"
    ]);
});

Route::get("/bladedirectives",function() use($tasks){
    return view("bladedirectives",[
        'tasks'=>$tasks
    ]);
})->name('tasks-list');

Route::get("/bladedirectives/{id}", function ($id){
    return 'one single task';
})->name('tasks-show');
