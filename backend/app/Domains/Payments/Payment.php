<?php

namespace App\Domains\Payments;

use Illuminate\Database\Eloquent\Model;

/**
 * Payment Model Class
 *
 * @package \App\Domains\Payments
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['amount'];
}
