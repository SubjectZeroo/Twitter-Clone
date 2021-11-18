<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
trait Likable
{


    public function ScopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null,$liked = true)
    {
        $this->likes()->updateOrcreate(
            [
            'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {
        // $this->likes()->updateOrcreate([
        //     'user_id' => auth()->id(),],
        //     ['liked' => liked
        // ]);

        return $this->like($user,false);
        // $this->likes()->where('user_id', $user ? $user->id : auth()->id())
        //              ->delete();
    }


    public function isLikeBy(User $user)
    {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }


    public function isDislikeBy(User $user)
    {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
