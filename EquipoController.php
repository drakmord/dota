<?php
use HireMe\Entities\Equipo;
use HireMe\Repositories\EquipoRepo;
class EquipoController extends \BaseController {

	 //PROPIEDAD
    protected $EquipoRepo;

    //CONTROLADOR
    public function __construct(EquipoRepo $EquipoRepo)
    {
        $this->EquipoRepo = $EquipoRepo;
    }

   public function signUp()
     {
     	$listaAspectos  = $this->EquipoRepo->ListaAspectos();
     	$listaRarezas = $this->EquipoRepo->listaRarezas();
        return View::make('equipo', compact('listaAspectos','listaRarezas'));
     }   


     public function register()
     {
        $data = Input::all();

        $rules = [
        'nombre' => 'required',
        'subtitulo' => 'required',
        'soloadmin' => 'required',
        'precio' => 'required',
        'lanzado' => 'required',
        'creado' => 'required',
        'descripcion' => 'required',
        'runas' => 'required',
        'comision' => 'required',
        'idaspecto' => 'required',
        'idrareza' => 'required',
        'espacio' => 'required',
        'estado' => 'required',
        ];
        $validation= \Validator::make($data, $rules);

        if ($validation->passes());
        {
           equipo::create($data);
           return Redirect::route('equipo');
        }
        return Redirect::back()->withInput()->withErrors($validation->messages());

     }
}