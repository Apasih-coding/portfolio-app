<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'link',
        'desc',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
