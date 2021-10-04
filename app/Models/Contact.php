<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function getDetail()
    {
        $gender = $this->gender;
        if ($gender == 1){
            $gender = '男性';
        }elseif($gender == 2){
            $gender = '女性';
        }else{
            $gender = '不明';
        }
        return $gender;
    }
}
