<?php
namespace app\Models;

class Notas extends Model
{
  protected $table='Notas';

  public function user($id)
  {
    return $this->belongsTo('Usuarios','Usuarios_id',$id);
  }
}