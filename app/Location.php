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
    public function parentLocation() {
        return $this->belongsTo(self::class,'parentLocation_id');
    }
    public function childLocations(){
        return $this->hasMany(self::class,'parentLocation_id');
    }
}
