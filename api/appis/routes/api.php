<?php

use Illuminate\Http\Request;
use App\Por;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/barrios/{barri}', function(Request $request, $barri) {
	//echo $barri."\n";
	$puntosPor = Por::select("poblacio")->get();
	/*foreach( $preusbarri as $preu ) {
		echo $preu."\n";
	}*/
	//echo $preusbarri;
    return response()->json( $puntosPor );
});
Route::get('/poblacio/{poblacio}', function(Request $request, $poblacio) {
	$puntosPor = Por::select("barris","poblacio","gener","febrer","marz","abril","maig","juny","juliol","agost","setembre","octubre","novembre","desembre")->where('poblacio','like','%'.$poblacio."%")->get();
	return response()->json( $puntosPor );
});