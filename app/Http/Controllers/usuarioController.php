<?php

namespace App\Http\Controllers;
use App\Entities\User;
use App\Repository\TrabajadorRepository;
use App\Repository\UsuarioRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class usuarioController extends Controller
{
    private $UsuarioRepository;
    private $TrabajadorRepository;
    private $PersonaRepository;

    public function __construct(UsuarioRepository $usuarioRepository,TrabajadorRepository $trabajadorRepository){

        $this->UsuarioRepository=$usuarioRepository;
        $this->TrabajadorRepository=$trabajadorRepository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(loginRequest $request)
    {

       $id_usuario=$this->UsuarioRepository->login($request->usuario,$request->password);
        if($id_usuario!=0){
            //return 'true';
                $datos=$this->TrabajadorRepository->buscarTrabajador($id_usuario);

                if($this->actualizarLastLogon($id_usuario)==true){
                   // $request->session()->get(['id_usuario', 'default']);
                    Session::set('nombre_persona', $datos[0]->nombre_trabajador);
                    Session::set('id_trabajador', $datos[0]->trabajador_id);


                    return view('PrincipalContenido',compact('datos'));
                }else{
                    return false;
                }

        }else{
            return 'false';
        }
    }

    public function  actualizarLastLogon($idusuario){

        $date = Carbon::now();
        $date = $date->toDateTimeString();
        $datos= User::findOrNew($idusuario);
        $datos->last_logon=$date;
        if($datos->save()){
            return true;
        }else{return false;}
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
        $datos=$this->TrabajadorRepository->buscarTrabajador($id);
        $datosUsuario=$this->UsuarioRepository->DatosUsuario($id);
        return view('usuario.UsuMod',compact('datos','datosUsuario'));
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

        $datos= User::findOrNew($id);
        //$datos->
       // return $id.' '.$request['direccion'];

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
