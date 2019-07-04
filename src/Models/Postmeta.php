<?php 

namespace WPFaerie\Models;

use Faerie\Models\Model;
use WPFaerie\Models\Post;

class Postmeta extends Model
{
    public static $table = 'postmeta';
    public static $pk = 'meta_id';

    public function post()
    {
        return $this->belongsTo(Post::$table, 'post_id', 'ID');
    }
}
