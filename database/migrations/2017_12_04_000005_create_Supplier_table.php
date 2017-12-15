<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSupplierTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Supplier';
    /**
     * Run the migrations.
     * @table Supplier
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable()->default(null);
            $table->string('description', 191)->nullable()->default(null);
            $table->string('phone1', 45)->nullable()->default(null);
            $table->string('phone2', 45)->nullable()->default(null);
            $table->string('email', 80)->nullable()->default(null);
            $table->string('contactName', 45)->nullable()->default(null);
            $table->string('accountNo', 45)->nullable()->default(null);
            $table->string('accountName', 100)->nullable()->default(null);
            $table->string('addressStreetNumber', 45)->nullable()->default(null);
            $table->string('addressStreet', 100)->nullable()->default(null);
            $table->string('addressSuburb', 45)->nullable()->default(null);
            $table->string('addressState', 45)->nullable()->default(null);
            $table->string('addressPostcode', 45)->nullable()->default(null);
            $table->string('addressCountry', 100)->nullable()->default(null);
            $table->string('servicesOffered', 191)->nullable()->default(null);
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
