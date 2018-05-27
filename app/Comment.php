<?php

namespace belsoft;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

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
    protected $fillable = ['nickname', 'content'];

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('belsoft\Post');
    }
}
