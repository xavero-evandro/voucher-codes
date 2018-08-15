<?php
/**
 * Created by PhpStorm.
 * User: Xavero
 * Date: 28/07/2018
 * Time: 17:15
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'offers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name'
    ];

    /**
     * Get the vouchers for the special offer.
     */
    public function coupons()
    {
        return $this->hasMany(CouponCode::class, 'foreign_key', 'fk_offer_id');
    }

    /**
     * Get the users for the special offer.
     */
    public function receipents()
    {
        return $this->hasMany(Recipient::class, 'foreign_key', 'fk_receipent_id');
    }
}