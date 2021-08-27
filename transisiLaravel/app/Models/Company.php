<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    protected $fillable = ['id', 'nama', 'email', 'logo', 'website'];
    public $timestamps = false;

    public function company(){
        return $this->belongsTo(Employee::class);
    }
}
