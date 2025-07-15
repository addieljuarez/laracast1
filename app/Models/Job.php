<?php
namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model {
    use HasFactory;
    protected $table = 'jobs_listings';

    // aqui se le da permiso para poder hacer cargas en masa a los parametros descritos o a todo si es un array vacio
    // php artisan tinker
    protected $fillable = ['title', 'salary'];

    public function employer (){
        // return $this->public function user()
        // {
        return $this->belongsTo(Employer::class);
        // }
    }
}
