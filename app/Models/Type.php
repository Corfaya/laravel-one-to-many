<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // 1 to m con tabella projects
    public function type() {
        return $this->hasMany(Project::class);
    }
}
