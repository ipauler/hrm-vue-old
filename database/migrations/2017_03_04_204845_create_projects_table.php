<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');//->default('');
            $table->date('started_from')->nullable();
            $table->date('deadline')->nullable();
            $table->unsignedInteger('manager_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('stage_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('projects');
    }
}
