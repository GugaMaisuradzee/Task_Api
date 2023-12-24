<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Prompts\Table;
use App\Models\Tag;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable =
        [
          'title',
          'name',
          'image'
        ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
