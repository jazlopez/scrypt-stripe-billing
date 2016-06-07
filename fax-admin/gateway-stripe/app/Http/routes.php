<?php
/**
 * Jaziel Lopez <juan.jaziel@gmail.com>
 * Software Developer
 * Tijuana Area, Mexico, 2016.
 *
 * https://jlopez.mx
 * https://github.com/jazlopez
 * https://mx.linkedin.com/in/jlopezmx
 *
 */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Http\Response;

/**
 * @route /
 * @method ANY
 * @desc Redirect to parent application
 */
$app->get('/', function () use ($app) {

    return redirect(env('parent'), Response::HTTP_PERMANENTLY_REDIRECT);
});

/**
 * @route /user/
 * @method POST
 * @desc Create new user
 */
$app->post('/user/', function() use ($app){

    return new \App\User();

});

