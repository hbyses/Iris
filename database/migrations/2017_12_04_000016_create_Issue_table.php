<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateIssueTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Issue';
    /**
     * Run the migrations.
     * @table Issue
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('Issuable_id');
            $table->unsignedInteger('User_id');
            $table->dateTime('loanDate')->nullable()->default(null);
            $table->dateTime('returnDate')->nullable()->default(null);
            $table->string('Issuecol', 45)->nullable()->default(null);
            $table->unsignedInteger('Equipment_id');

            $table->index(["User_id"], 'fk_Issue_User1_idx');

            $table->index(["Equipment_id"], 'fk_Issue_Equipment1_idx');


            $table->foreign('User_id', 'fk_Issue_User1_idx')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Equipment_id', 'fk_Issue_Equipment1_idx')
                ->references('id')->on('Equipment')
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
