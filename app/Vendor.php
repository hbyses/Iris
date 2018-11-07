<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Vendor extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "vendor";

    public function equipmentactivity() {
        return $this->belongstoMany('Iris\EquipmentActivity','activity_vendor');
    }
}
