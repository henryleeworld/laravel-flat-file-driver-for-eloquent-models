<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Post extends Model
{
    use HasFactory, Orbital;

    public static $driver = 'json';

    protected $hidden = [
        'slug',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'posted_at',
    ];

    public static function schema(Blueprint $table)
    {
        $table->id();
        $table->string('title');
        $table->index('title');
        $table->string('slug')->nullable();
        $table->text('content');
        $table->datetime('posted_at');
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'posted_at'
    ];
}
