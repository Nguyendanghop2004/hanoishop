<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'slug',
       'description',
       'image_path',
       'parent_id',
      
       
    ];
    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }


    public function children()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }
}
