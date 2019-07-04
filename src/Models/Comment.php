<?php 

namespace WPFaerie\Models;

use Faerie\Models\Model;
use WPFaerie\Models\Post;

class Comment extends Model
{
    public static $table = 'comments';
    public static $pk = 'comment_ID';

    public function post()
    {
        return $this->belongsTo(Post::$table, 'comment_post_ID', 'ID');
    }
}
