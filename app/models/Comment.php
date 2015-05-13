<?php

class Comment extends \Eloquent {
    protected $table = 'comments';
    protected $fillable = [
        'name',
        'email',
        'content',
        'beside_id',
    ];
    
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'content' => 'required',
        'beside_id' => 'required|exists:besides,id',
    ];

    public function beside()
    {
        return $this->belongsTo('Beside');
    }
    
}