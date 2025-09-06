<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [ 'title', 'company', 'is_remote', 'description', 'category_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
