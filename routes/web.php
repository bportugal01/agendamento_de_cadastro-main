<?php
use App\Models\Servico;
use Illuminate\Support\Facades\Route;

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
    $meuPrimeiroServico= new Servico;
    		  $meuPrimeiroServico->nome ="Pintura";
              $meuPrimeiroServico->telefone ="(11) 98825-2732";
              $meuPrimeiroServico->origem="whatsapp";
              $meuPrimeiroServico->data_do_contato="24-11-2004";
              $meuPrimeiroServico->observacao="teste";

              $meuPrimeiroServico->save();
    return view('index');
});
