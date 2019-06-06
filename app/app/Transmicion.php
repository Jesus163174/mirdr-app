<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmicion extends Model
{
    protected $table = 'transmissions';

    protected $fillable = ['url_video','title','date'];

    public function store($request){
        return Transmicion::create($request);
    }
}
