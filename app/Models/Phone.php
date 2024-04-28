<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';
    protected $primaryKey = 'id';
    public $incrementing=true;
    protected $keyType='int';
    public $timestmps = true;

    protected $fillable = [
        'students_id',
        'phone_number',
    ];

       public function student(){
        return $this->belongsTo(Student::class , 'students_id' ,'id');
    }
}
