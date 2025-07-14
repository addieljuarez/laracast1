<?php
namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'jobs_listings';

    // aqui se le da permiso para poder hacer cargas en masa a los parametros descritos o a todo si es un array vacio
    // php artisan tinker
    protected $fillable = ['title', 'salary'];
}
