<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedor';
    protected $primaryKey = 'prov_id';
    public $incrementing = false;

    protected $fillable = [
        'prov_id',
        'prov_empresa',
        'prov_vendedor',
        'prov_contacto',
    ];
}
