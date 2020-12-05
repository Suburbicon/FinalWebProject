<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{
    protected $fillable = ['name','image'];

    public static function add($fields){

        $sponsor = new static;
        $sponsor->fill($fields);
        $sponsor->save();

        return $sponsor;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }
}
