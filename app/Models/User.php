<?php
namespace app\Models;

class User extends Model
{
  protected $table='Usuarios';

  public function notas($id)
  {
    return $this->hasMany('Notas',$id);
  }
}
