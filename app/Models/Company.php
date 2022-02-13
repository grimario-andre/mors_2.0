<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $primarykey = 'id';

    public $increment = true;

    public $timestamps = true;

    protected $fillable = [
        'name_company',
        'cnpj_company',
        'status_company'
    ];

    protected $casts = [
        'cnpj_company' => 'integer',
        'status_company' => 'enum'
    ];

}
