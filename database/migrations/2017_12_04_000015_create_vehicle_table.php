<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateVehicleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'vehicle';
    /**
     * Run the migrations.
     * @table vehicle
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('Equipment_equipmentId');
            $table->unsignedInteger('Location_id');
            $table->string('name', 45)->nullable()->default(null);
            $table->string('rego', 10)->nullable()->default(null);
            $table->string('capacity', 45)->nullable()->default(null);
            $table->string('licence_type', 10)->nullable()->default(null);
            $table->string('make', 45)->nullable()->default(null);
            $table->string('model', 45)->nullable()->default(null);
            $table->integer('year')->nullable()->default(null);
            $table->string('category', 45)->nullable()->default(null);
            $table->string('type', 45)->nullable()->default(null);

            $table->index(["id"], 'fk_vehicle_Equipment1_idx');

            $table->index(["Location_id"], 'fk_vehicle_Location1_idx');


            $table->foreign('id', 'vehicle_id')
                ->references('id')->on('Equipment')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Location_id', 'fk_vehicle_Location1_idx')
                ->references('id')->on('Location')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
