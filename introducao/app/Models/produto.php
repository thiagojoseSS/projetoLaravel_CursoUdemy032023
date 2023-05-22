<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'valor', 'estoque'];
    const CREATED_AT = null;
    const UPDATED_AT = null;
    public $timestamps = false;
    public $perPag = 10;

}
