<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['name','CompanyID','gender','skill','FullPart','salary','numberOfHiring','CategoryID'];
    public function product(){
        return $this->belongsTo('App\Models\Category');
    }
    public function wishlist(){
        return $this->hasmany('App\Wishlist');
    }
}
