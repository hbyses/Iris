<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Equipment';
    /**
     * Run the migrations.
     * @table Equipment
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('quantity')->nullable()->default(null);
            $table->string('name', 45)->nullable()->default(null);
            $table->string('description', 45)->nullable()->default(null);
            $table->tinyInteger('consumableFlag')->nullable()->default(null);
            $table->integer('size')->nullable()->default(null);
            $table->string('brand', 45)->nullable()->default(null);
            $table->tinyInteger('inServiceFlag')->nullable()->default(null);
            $table->string('inspectionFrequency', 45)->nullable()->default(null);
            $table->string('serialNumber', 45)->nullable()->default(null);
            $table->string('model', 45)->nullable()->default(null);
            $table->date('endOfLife')->nullable()->default(null);
            $table->date('datePurchased')->nullable()->default(null);
            $table->integer('assetNumber')->nullable()->default(null);
            $table->unsignedInteger('Supplier_id')->nullable()->default(null);
            $table->unsignedInteger('EquipmentCategory_id');
            $table->tinyInteger('issuable')->default('0');
            $table->unsignedInteger('ApprovedEquipment_id');

            $table->index(["ApprovedEquipment_id"], 'fk_Equipment_ApprovedEquipment1_idx');

            $table->index(["EquipmentCategory_id"], 'fk_Equipment_equipmentCategory1_idx');

            $table->index(["Supplier_id"], 'fk_Equipment_Supplier1_idx');


            $table->foreign('Supplier_id', 'fk_Equipment_Supplier1_idx')
                ->references('id')->on('Supplier')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ApprovedEquipment_id', 'fk_Equipment_ApprovedEquipment1_idx')
                ->references('id')->on('ApprovedEquipment')
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
