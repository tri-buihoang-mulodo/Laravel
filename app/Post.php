<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable =['title','body'];
    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    // lesson 16: Add comment
    public function addComment($body){
    	$this->comments()->create(compact('body'));
    	// Comment::create([
    	// 	'body' => $body,
    	// 	'post_id' => $this->id
    	// ]);
    }

    // lesson 18: 
    public function user(){
        return $this->belongsTo(User::class);
    }

    // lesoon 20:
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])){
            if($month=$filters['month']){
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }    
        }
        

        if (isset($filters['year'])){
            if($year=$filters['year']){
                $query->whereYear('created_at', $year);
            }    
        }
        
    }
}
