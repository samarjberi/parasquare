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

Route::get('/', function () {
    return view('index');
});

Route::get('login1', 'ContactController@index');
Route::get('login', 'ContactController@create');/* qui va afficher le formualire aui permet de créer un ficher cv*/
Route::post('login','ContactController@store');
Route::get('login/{id}', 'ContactController@update');
Route::delete('login/{id}', 'ContactController@destroy');

/*Route::get('/login', 'TestController@admin');*/
Route::get('/login',function(){
	return view('login');
});
Route::any('/search',function(){
$q = Input::get ( 'q' );
$chercher = contacts::where('name','LIKE','%'.$q.'%')->get();
if(count($chercher) > 0)
return view('welcome')->withDetails($chercher)->withQuery ( $q );
else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
/*
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/ /*
Route::post('/login',function()
{
    // Fetch all request data.
    //$data = store::all();
    
    
    
   /*
      $rules = [ 'username' => 'required', 'email' => 'required|unique:users|email',
'password' => 'min:6|required','re_pass'=> 'min:6|same:password'
];


    // Create a new validator instance.
    $validator = Validator::make($contact);
    

    if ($validator->passes()) {
        
        //Something
        return 'Data was saved';
    }
    
    return Redirect::to('/')->withErrors($validator);
     
});*/
/*Route::post('login',function(){
	$validator = validator::make(
		array(' password' => input:: get('password'),
			array(' re_pass') => input::get('re_pass')
		),
		$array=( 'password' => 'required',
			're_pass' => 'required|same:password' )
);
echo "<pre>";
var_dump($validator ->errors());
echo "</echo>" ;
});
			
}*/



