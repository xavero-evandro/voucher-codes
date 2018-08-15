<?php
/**
 * Created by PhpStorm.
 * User: Xavero
 * Date: 28/07/2018
 * Time: 17:17
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponCode extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coupon_codes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'code',
        'expire_date',
        'is_used',
        'used_dtm',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the users for the special offer.
     */
    public function receipent()
    {
        return $this->hasOne(Recipient::class, 'foreign_key', 'fk_receipent_id');
    }

    public function coupon()
    {
        return $this->hasOne(CouponCode::class, 'foreign_key', 'fk_offer_id');
    }

}
