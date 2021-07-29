<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Todo extends Model
{
    use HasFactory, SearchableTrait;

    protected $searchable = [ 'columns' => [ 'todos.title'       => 2,
                                             'todos.description' => 1 ] ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "user_id",
        "description",
        "priority",
        "image_url",
        "location_lang",
        "location_lat"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
