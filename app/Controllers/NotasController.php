<?php
namespace app\Controllers;

use app\Models\Notas;
use bootstrap\Request;

class NotasController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function getAll()
  {
    $modelNotas=new Notas();

    return $modelNotas->all();
  }
  public function findById($id)
  {
    $modelNotas=new Notas();

    return $modelNotas->find($id);
  }
  public function create()
  {
    $titulo = $this->request->getFormData()['titulo']; 
    $descripcion = $this->request->getFormData()['descripcion']; 
    $fecha_hora = $this->request->getFormData()['fecha_hora']; 
    $tipo = $this->request->getFormData()['tipo']; 
    $latitud = $this->request->getFormData()['latitud']; 
    $longitud = $this->request->getFormData()['longitud']; 
    $Usuarios_id = $this->request->getFormData()['Usuarios_id']; 
  
    $modelNotas = new Notas();
    return $modelNotas->create([
      'titulo' => $titulo,
      'descripcion' => $descripcion,
      'fecha_hora' => $fecha_hora,
      'tipo' => $tipo,
      'latitud' => $latitud,
      'longitud' => $longitud,
      'Usuarios_id' => $Usuarios_id
    ]);
  }  
  public function update($id)
  {
    $titulo = $this->request->getFormData()['titulo']; 
    $descripcion = $this->request->getFormData()['descripcion']; 
    $fecha_hora = $this->request->getFormData()['fecha_hora']; 
    $tipo = $this->request->getFormData()['tipo']; 
    $latitud = $this->request->getFormData()['latitud']; 
    $longitud = $this->request->getFormData()['longitud']; 
    $Usuarios_id = $this->request->getFormData()['Usuarios_id']; 
  
    $modelNotas = new Notas();
    return $modelNotas->update($id, [
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'fecha_hora' => $fecha_hora,
        'tipo' => $tipo,
        'latitud' => $latitud,
        'longitud' => $longitud,
        'Usuarios_id' => $Usuarios_id
    ]);
  }
  public function delete($id)
  {
    $modelNotas= new Notas();
    return $modelNotas->delete($id);
  }

  public function user($id)
  {
    $modelNotas= new Notas();
    return $modelCar->user($id);
  }
}