<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function authors(): HasOne
    {
        return $this->HasOne(Author::class, "id", "author_id");
    }
    public function publishers(): HasOne
    {
        return $this->HasOne(Publisher::class, "id", "publisher_id");
    }

}