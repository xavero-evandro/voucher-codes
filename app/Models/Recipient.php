<?php
/**
 * Created by PhpStorm.
 * User: Xavero
 * Date: 28/07/2018
 * Time: 17:14
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * Get the coupons for a user.
     */
    public function coupons()
    {
        return $this->hasMany(CouponCode::class, 'fk_receipent_id', 'id');
    }
}
