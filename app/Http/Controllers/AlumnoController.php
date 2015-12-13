<?php

namespace App\Http\Controllers;


use App\Repository\AlumnoRepository;
use App\Repository\ApoderadoRepository;
use app\Repository\PersonaRepository;

class AlumnoController extends Controller
{

    private $AlumnoRepository;
    private $ApoderadoRepository;
    private $PersonaRepository;

    public function __construct(AlumnoRepository $alumnoRepositorio,ApoderadoRepository $apoderadoRepository,PersonaRepository $personaRepository){
        $this->middleware('auth');
        $this->AlumnoRepository=$alumnoRepositorio;
        $this->ApoderadoRepository=$apoderadoRepository;
        $this->PersonaRepository=$personaRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->AlumnoRepository->listarAlumno();
    }

    public function  listarAlumnoApoderado($idAlumno){

        return $this->AlumnoRepository->ListarAlumnoApoderado($idAlumno);
    }
    public function  AlumnoApoderado($idAlumno){

        return $this->ApoderadoRepository->Apoderado($idAlumno);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoPersona=$this->PersonaRepository->newPersona($request);
        if($datoPersona!=0) {

          $this->AlumnoRepository->newAlumno($request,$datoPersona);
            return ['created' => true];
        }
        else{
            return ['created' => false];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return $this->AlumnoRepository->AlumnoDatos2($id);
        
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
