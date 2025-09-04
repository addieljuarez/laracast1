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
    // protected $fillable = ['employer_id', 'title', 'salary']; // estos campos son lo que puedes ingresar o de saldra un 419
    protected $guarded = []; // estos campos son los que proteges, esta lista es contraria a la de fillable

    public function employer (){
        // return $this->public function user()
        // {
        return $this->belongsTo(Employer::class);
        // }
    }

    public function tags (){
        // return $this->public function user()
        // {
        // return $this->/**
        //  * The roles that belong to the Job
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
        //  */
        // public function roles(): BelongsToMany
        // {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listings_id');
        // }
        // }
    }
}
