<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentlocationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EquipmentLocation';
    /**
     * Run the migrations.
     * @table EquipmentLocation
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Equipment_id');
            $table->integer('Location_id');
            $table->integer('quantity')->nullable();

            $table->index(["Location_id"], 'fk_EquipmentLocation_Location1_idx');


            $table->foreign('Location_id', 'fk_EquipmentLocation_Location1_idx')
                ->references('id')->on('Location')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
