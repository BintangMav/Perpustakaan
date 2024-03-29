<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['id_member','nama','alamat','no_telp'];
    protected $table = 'members';
    
    public function Member()
    {
       return $this->hasMany(Member::class,'id_member','id'); 
    }
}
