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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('parentLocation_id')->nullable()->default(null);
            $table->string('name', 100)->nullable()->default(null);
            $table->string('description', 100)->nullable()->default(null);
            $table->string('Locationcol', 45)->nullable()->default(null);
            $table->unsignedInteger('locationManager_id');

            $table->index(["parentLocation_id"], 'fk_Location_Location1_idx');

            $table->index(["locationManager_id"], 'fk_Location_User1_idx');


            $table->foreign('parentLocation_id', 'fk_Location_Location1_idx')
                ->references('id')->on('Location')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('locationManager_id', 'fk_Location_User1_idx')
                ->references('id')->on('users')
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
