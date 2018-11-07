<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Supplier extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "supplier";

    public function equipmentactivity() {
        return $this->belongstoMany('Iris\EquipmentActivity','activity_vendor');
    }
}
