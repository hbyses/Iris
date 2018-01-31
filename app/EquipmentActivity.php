<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\Equipment;
use Iris\EquipmentActivityCategory;

class EquipmentActivity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "equipmentactivity";

    public function equipmentActivityCategory() {
        return $this->belongsTo('Iris\EquipmentActivityCategory','equipmentActivityCategory_id');
    }
    public function equipment() {
        return $this->belongsTo('Iris\Equipment','equipment_id');
    }
}
