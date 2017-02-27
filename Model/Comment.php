<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 30.01.2017
 * Time: 22:28
 */

namespace Model;


class Comment
{
    private $id;
    private $username;
    private $email;
    private $comment_text;
    private $rating;
    private $checkbox_state;
    private $time_stamp;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCommentText()
    {
        return $this->comment_text;
    }

    public function setCommentText($comment_text)
    {
        $this->comment_text = $comment_text;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getCheckboxState()
    {
        return $this->checkbox_state;
    }

    public function setCheckboxState($checkbox_state)
    {
        $this->checkbox_state = $checkbox_state;
    }

    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    public function setTimeStamp($time_stamp)
    {
        $this->time_stamp = $time_stamp;
    }
}