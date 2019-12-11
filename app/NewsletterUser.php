<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterUser extends Model
{
    /**
     * Table name
     * 
     * @var string
     */
    protected $table = 'newsletter_user';

    /**
     * Mass assignable attributes
     * 
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];

}
