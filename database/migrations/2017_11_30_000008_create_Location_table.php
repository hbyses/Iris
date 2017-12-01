<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLocationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Location';
    /**
     * Run the migrations.
     * @table Location
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parentLocation_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('description', 100)->nullable();
            $table->string('Locationcol', 45)->nullable();
            $table->integer('locationManager_id');

            $table->index(["locationManager_id"], 'fk_Location_Users1_idx');

            $table->index(["parentLocation_id"], 'fk_Location_Location1_idx');


            $table->foreign('parentLocation_id', 'fk_Location_Location1_idx')
                ->references('id')->on('Location')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('locationManager_id', 'fk_Location_Users1_idx')
                ->references('id')->on('Users')
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
