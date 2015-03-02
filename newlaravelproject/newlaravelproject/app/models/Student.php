<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Student extends Eloquent implements UserInterface, RemindableInterface
{

    public $timestamp = true;

    protected $fillable = ['firstname', 'lastname', 'birthdate', 'motto'];

    use UserTrait, ReminderTrait;

    protected $table = 'students';
}