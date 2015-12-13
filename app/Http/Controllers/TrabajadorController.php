<?php

namespace App\Http\Controllers;

use App\Repository\TrabajadorRepository;
use App\Repository\UsuarioRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
class TrabajadorController extends Controller
{
    private $UsuarioRepository;
    private $TrabajadorRepository;
    private $PersonaRepository;

    public function __construct(UsuarioRepository $usuarioRepository,TrabajadorRepository $trabajadorRepository){

        $this->UsuarioRepository=$usuarioRepository;
        $this->TrabajadorRepository=$trabajadorRepository;

    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos=$this->TrabajadorRepository->buscarTrabajador($id);
        return view('usuario.UsuCrea',compact('datos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('hola');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
