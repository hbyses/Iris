<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateApprovedequipmentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ApprovedEquipment';
    /**
     * Run the migrations.
     * @table ApprovedEquipment
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description', 45)->nullable();
            $table->string('SAPdescription', 45)->nullable();
            $table->string('comment', 200)->nullable();
            $table->integer('materialNumber')->nullable();
            $table->string('SAPmaterial', 45)->nullable();
            $table->tinyInteger('deletedFlag')->nullable();
            $table->unsignedInteger('Supplier_id');
            $table->string('supplierDescription', 200)->nullable();
            $table->string('supplierPartNo', 45)->nullable();
            $table->string('category', 45)->nullable();
            $table->string('capability', 45)->nullable();
            $table->string('ApprovedEquipmentcol', 45)->nullable();

            $table->index(["Supplier_id"], 'fk_ApprovedEquipment_Supplier1_idx');


            $table->foreign('Supplier_id', 'fk_ApprovedEquipment_Supplier1_idx')
                ->references('id')->on('Supplier')
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
