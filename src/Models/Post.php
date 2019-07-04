<?php 

namespace WPFaerie\Models;

use Faerie\Models\Model;

class Post extends Model
{
    public static $table = 'posts';
    public static $hasCreateTimestamp = true;
    public static $createTimestamp = 'post_date';
    public static $hasUpdateTimestamp = true;
    public static $updateTimestamp = 'post_modified';

    public function comments()
    {
        return $this->hasMany(Comm)
    }
}
