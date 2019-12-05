<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    /**
     * Table name
     * 
     * @var string
     */
    protected $table = 'membership_type';

    /**
     * Attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price'
    ];
}