<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    protected $table = "barberia";
    protected $primaryKey = "idB";
    public $timestamps = false;

    protected $fillable = [
        
        'nombreB',
        'latitud',
        'longitud',
        'direccion',
        'propietario',
        'telefono',
        'horario',
        'user_id'
    ];

    public function producto()
    {
        return $this->belongsToMany('App\Barberia','deta_b_p', 'barberia_idB');
    }
    public function productos()
    {
        return $this->belongsToMany('App\Producto','deta_b_p', 'producto_idP');
    }
    
    public function asignarProducto($producto){ 
        $this->productos()->attach($producto);
   }

   public function servicios()
   {
       return $this->belongsToMany('App\Servicio','barberia_servicio', 'barberia_idB');
   }

   public function asignarServicio($servicio){ 
    $this->servicios()->sync($servicio,false);
    }
   
}
