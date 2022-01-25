<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haziertekeles extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'szoveges_ertekeles', 'pontszam_ertekeles'];

    protected $visible = ['id', 'url', 'szoveges_ertekeles', 'pontszam_ertekeles',
        'created_at', 'updated_at'];
}
