<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 28/02/2015
 * Time: 11:56 AM
 */

// file: app/models/Post.php
class Post extends Eloquent {

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}