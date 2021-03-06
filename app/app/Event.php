<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $primaryKey = 'id';
    protected $fillable = ["title","litleDescription","description","pictureDescription","videoPresentation","day"];

    public function store($request){
        return Event::create($request);
    }

    public function edit($event,$request){
        return $event->fill($request)->save();
    }

    public function scopeEvent($query,$status){
        return $query->byStatus($status)->orderByID();
    }

    public function scopeByStatus($query,$status){
        return $query->where('status',$status);
    }
    
    public function scopeOrderByID($query){
        return $query->orderBy('id','desc');
    }

}
