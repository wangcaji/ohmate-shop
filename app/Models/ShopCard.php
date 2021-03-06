<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopCard
 * @package App\Models
 * @mixin \Eloquent
 */
class ShopCard extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cardType()
    {
        return $this->belongsTo(CardType::class);
    }
}
