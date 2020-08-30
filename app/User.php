<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use App\Skill;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements Searchable
{
    use Notifiable;

    public function getSearchResult(): SearchResult
     {
        $url = '';

         return new SearchResult(
            $this,
            $this->primary_category,
            $this->secondary_category,
            $this->tertiary_category,
            $url
         );
     }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_featured', 'avatar', 'email', 'password', 'primary_category', 'secondary_category', 'tertiary_category', 'zip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function featured() {

        return User::where('is_featured', '1')
        ->inRandomOrder(5)
        ->get();
    }

    public function skill() {

        return $this->hasOne(Skill::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
