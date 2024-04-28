<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $incrementing=true;
    protected $keyType='int';
    public $timestmps = true;

    protected $fillable = [
        'name',
        'email',
    ];



    public function phone(){
        return $this->hasOne(Phone::class , 'students_id' ,'id');
    }
}
