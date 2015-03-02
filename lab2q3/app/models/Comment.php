<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 28/02/2015
 * Time: 11:56 AM
 */

// file: app/models/Comment.php
class Comment extends Eloquent {

    public function post()
    {
        return $this->belongsTo('Post');
    }
}