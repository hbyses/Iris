<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\EquipmentCategory;

class Equipment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    public function getStatusAttribute($value) {
        switch ($value) {
            case 1: 
                return 'In Service';
            case 2: 
                return 'Not In Service';
            case 3: 
                return 'To Be Written Off';
            case 4: 
                return 'Written Off';
        }
    }
    public function getEquipmentTypeAttribute($value) {       
        switch ($value) {
            case 1: 
                return 'Regular';
            case 2: 
                return 'Consumable';
            case 3: 
                return 'Issuable';
            case 4: 
                return 'Vehicle';
        }
    }

    public function equipmentCategory() {
        return $this->belongsTo('Iris\EquipmentCategory','equipmentCategory_id');
    }
    public function locations() {
        return $this->belongsToMany('Iris\Location','equipment_location')->withPivot('quantity')->as('store')->withTimestamps();
    }
}
