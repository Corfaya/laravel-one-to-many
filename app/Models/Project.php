<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date_of_upload', 'type_id', 'preview', 'description', 'slug'];

    public static function generateSlug($title) {
        return Str::slug($title, '-');
    }
    // appartenenza a tabella types
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
