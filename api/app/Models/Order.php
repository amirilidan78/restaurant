<?php

namespace App\Models;

use App\Models\Base\MongoModelParent;
use App\Models\Enums\OrderDeliveryTypeEnum;
use App\Models\Enums\OrderPackingTypeEnum;
use App\Models\Enums\OrderStateEnum;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\HasMany;

class Order extends MongoModelParent
{

    protected $casts = [
        "delivery_type" => OrderDeliveryTypeEnum::class  ,
        "packing_type" => OrderPackingTypeEnum::class  ,
        "state" => OrderStateEnum::class  ,
    ] ;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items() : HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
