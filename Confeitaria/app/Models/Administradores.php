<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Administradores extends Model
{
    use HasFactory;

    protected $table = 'tbladministradores';

    protected $primaryKey = 'idAdmin';

    protected $fillable = [
        'idAdmin', 
        'nomeAdmin',       
        'emailAdmin',      
        'telefoneAdmin',      
        'dataCadAdmin',      
        'statusAdmin',
        'fotoAdmin',
        
    ];

    public function usuario(){
        return $this->morphOne(Usuario::class,'tipo_usuario');
    }

    
}
