<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\EquipmentCategory;

class Equipment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    public function equipmentCategory() {
        return $this->belongsTo('Iris\EquipmentCategory');
    }
}
