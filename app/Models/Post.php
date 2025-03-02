<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;
use Orbit\Contracts\Orbit;
use Orbit\Drivers\Json;

class Post extends Model implements Orbit
{
    use HasFactory, Orbital;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'posted_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'slug',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'posted_at'
    ];

    public function getOrbitDriver(): string
    {
        return Json::class;
    }

    public function schema(Blueprint $table): void
    {
        $table->id();
        $table->string('title');
        $table->index('title');
        $table->string('slug')->nullable();
        $table->text('content');
        $table->datetime('posted_at');
    }
}
