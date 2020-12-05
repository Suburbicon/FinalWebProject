<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title','description'];

    public static function add($fields){

        $news = new static;
        $news->fill($fields);
        $news->save();

        return $news;
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

    public function uploadImage($image)
    {
        if($image == null) {
            return;
        }
        Storage::delete('uploads/' . $this->image);
        $filename = str_random(10). '.' . $image->extension();
        $image->saveAs('uploads',$filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }
}
