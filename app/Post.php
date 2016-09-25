<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content'
    ];

    /**
     * Get the tags associated with the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get the user associated with the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
