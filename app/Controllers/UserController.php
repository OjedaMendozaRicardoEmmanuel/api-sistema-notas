<?php
namespace app\Controllers;

use app\Models\User;
use bootstrap\Request;

class UserController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function getAll()
  {
    $modelUser=new User();

    return $modelUser->all();
  }
  public function findById($id)
  {
    $modelUser=new User();

    return $modelUser->find($id);
  }
  public function create()
  {
    $usuario = $this->request->getFormData()['usuario']; 
    $nombre = $this->request->getFormData()['nombre']; 
    $password = $this->request->getFormData()['password'];
  
    $modelUser = new User();
    return $modelUser->create([
      'usuario' => $usuario,
      'nombre' => $nombre,
      'password' => $password
    ]);
  }  
  public function update($id)
  {
    $usuario = $this->request->getFormData()['usuario']; 
    $nombre = $this->request->getFormData()['nombre']; 
    $password = $this->request->getFormData()['password'];
  
    $modelUser = new User();
    return $modelUser->update($id, [
      'usuario' => $usuario,
      'nombre' => $nombre,
      'password' => $password
    ]);
  }
  public function delete($id)
  {
    $modelUser= new User();
    return $modelUser->delete($id);
  }
  public function notas($id)
  {
    $modelUser= new User();
    return $modelUser->notas($id);
  }
}