<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfoNumber extends Model
{
    use HasFactory;

    protected $table = 'studentInfosNumbers';
    protected $primaryKey = 'id';
    public $incrementing=true;
    protected $keyType='int';
    public $timestmps = true;

    protected $fillable = [
        'studentInfosNumbers_id',
        'stdNumbers',
    ];



    public function stdinfo(){
        return $this->belongsTo(StudentInfo::class , 'studentInfosNumbers_id' ,'id' );
    }
}
