<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'avatar',
        'banner',
        'email',
        'description',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getAvatarAttribute()
    // {
    //     return "https://picsum.photos/id/ . $this->id/50";
    // }

    // public function getAvatarAttribute($value)
    // {
    //     return asset('storage/' . $value ?: '/images/default-avatar.png');
    // }


    public function getAvatarAttribute()
    {
        //   return asset('storage/' . $value ?: '/images/default-avatar.png');
        // if (isset($value)) {

        //     return asset('storage/' . $value);
        // } else {

        //     return asset('/images/default-avatar.png');
        // }

        return Avatar::create(Str::title($this->name))->toBase64();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function timeline()
    {
        // dd($this->user_id);

        //include all of the user's post
        //as well as the tweets of everyone
        //they follow ... in descending order by date

        // return Tweet::where('user_id', $this->id)
        //         ->latest()
        //         ->get();

        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id', $ids)
            ->withLikes()
            ->latest()
            ->paginate(50);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }


}
