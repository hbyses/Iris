<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Location extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "location";

    public function user() {
        return $this->belongsTo('Iris\User','locationManager_id');
    }
}
