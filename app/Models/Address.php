<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Address
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $priority
 * @property integer $user_id
 * @property string $address
 * @property string $province
 * @property string $city
 * @property string $district
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property boolean $is_default
 * @property integer $customer_id
 * @property string $name
 * @property string $phone
 * @property string $postcode
 * @property \Carbon\Carbon $deleted_at
 */
class Address extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @var array
     */
    protected $casts = [
        'is_default' => 'boolean',
    ];

    /**
     * @param bool|string $b
     */
    public function setIsDefaultAttribute($b)
    {
        if (is_string($b)) {
            $b = ($b == 'true')? true : false;
        }

        $this->attributes['is_default'] = intval($b);
    }
}
