<?php



use Illuminate\Support\Facades\Route;

/*Incluir la ubicacion de la clase a utilizar para el routing resource *SIEMPRE ARRIBA DE LAS DEMAS RUTAS**/
use App\Http\Controllers\UsuarioController;

/*Incluir la ubicacion de la clase a utilizar para el routing*/
use App\Http\Controllers\PeliculaController;

use App\Http\Controllers\FrutaController;


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
    return view('welcome');
});

//
Route::get('/pelicula/{nombre?}',  [PeliculaController::class, 'index'])->name('pelicula')
    ->middleware('testnombre');

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
    ->middleware('testyear')
    ->name('detalle');


Route::get('/redirigir', [PeliculaController::class, 'redirigir'])->name('redirigir');

Route::get('/formulario', [PeliculaController::class, 'formulario'])->name('formulario');
Route::post('/recibir', [PeliculaController::class, 'recibir'])->name('recibir');

Route::resource('usuario', UsuarioController::class);

//Rutas fruta
Route::prefix('frutas')->group(function (){
    Route::get('/index', [FrutaController::class, 'index'])->name('frutas');
    Route::get('/detail/{id}', [FrutaController::class, 'details'])->name('detail');

    Route::get('/crear', [FrutaController::class, 'crear'])->name('crear');
    Route::post('/save', [FrutaController::class, 'save'])->name('save');

    Route::get('/eliminar/{id?}', [FrutaController::class, 'delete'])->name('eliminar');
    Route::get('/editar/{id?}', [FrutaController::class, 'edit'])->name('editar');

    Route::post('/actualizar', [FrutaController::class, 'update'])->name('update');
});







/*En base a los metodos http se construyen las rutas!!
 *
 * GET: Conseguir datos
 * POST: Guardar datos
 * PUT: Actualizar recursos
 * DELETE: Eliminar datos
 *
 */
/*
Route::get('/mostrar-fecha',function (){
    //Se le puede pasar parametros al metodo view mediante un array asociativo
    $titulo = "Estoy mostrando la fecha";

    return view('mostrar-fecha',array(
        "titulo" => $titulo
    ));
});
*/
/*
 * Como pasar parametros por URL
 *
 * SE DEFINE ENTRE LLAVES Y EL NOMBRE DE LA VARIABLE ** /{titulo} **
 * ES OBLIGATORIO PASARLE ALGO CUANDO SE DEFINE UN PARAMETRO
 * SE RECOJE EL PARAMETRO MEDIANTE LA FUNCION ANONIMA (COMO PARAMETRO) ** function($titulo) **
 *
 * PARA QUE NO SEA OBLIGATORIO PASARLE ALGO CUANDO ESTÁ DEFINIDO EL PARAMETRO, SE LE DEBE PONER UN ? AL FINAL DEL NOMBRE ** /{titulo?} **
 * ADEMAS SE LE DEBE PONER UN VALOR POR DEFECTO AL PARAMETRO DE LA FUNCION ** function($titulo = "No hay pelicula, seleccionada")
 *
 * condiciones en los parametros de la URL
 *
 * SE UTILIZA LA FUNCION WHERE PARA REALIZAR CONDICIONES.
 * LA FUNCION WHERE HAY QUE PASARLE UN ARRAY ASOCIATIVO.
 * LAS CONDICIONES SE REALIZAN MEDIANTE EXPRESIONES REGULARES.

*/

/*
Route::get('/pelicula/{titulo?}/{year?}', function ($titulo = "No hay pelicula seleccionada", $year = 2021){
    return view('pelicula', array(
        "titulo" => $titulo,
        "year" => $year
    ));
})->where(array(
    "titulo" => "[a-zA-Z]+",
    "year" => "[0-9]+"
));



Route::get("/listado-peliculas", function (){
    $titulo = "Listado de peliculas";
    $peliculas = array("Batman", "Avenger", "Miau");

// FORMA 1

    /*
                 //carpeta.archivo
    return view('peliculas.listado', array(
        "titulo" => $titulo,
        "peliculas" =>$peliculas
    ));

    */

/*
// FORMA 2
    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('peliculas', $peliculas);

});

Route::get("/pagina-generica", function (){
    return view("pagina");
});

Route::get('/michi/{doris}', function ($doris){
    var_dump($doris);
    return view('miau', array(
        'doris' => $doris
    ));
});
*/
