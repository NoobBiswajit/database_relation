<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    protected $table = 'studentInfos';
    protected $primaryKey = 'id';
    public $incrementing=true;
    protected $keyType='int';
    public $timestmps = true;

    protected $fillable = [
        'name',
        'email',
    ];


    public function stdinfoNum(){
        return $this->hasMany(StudentInfoNumber::class , 'studentInfosNumbers_id' ,'id' );
    }
}
