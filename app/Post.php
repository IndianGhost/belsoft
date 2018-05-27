<?php

namespace belsoft;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = '%B %d, %Y';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['img', 'title', 'content'];

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('belsoft\Comment');
    }
}
