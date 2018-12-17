<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description',255)->default('');
            $table->unsignedInteger('status_id')->nullable()->default(null);
            $table->date('deadline')->nullable()->default(null);
            $table->unsignedInteger('processed_by')->nullable()->default(null);
            $table->text('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('vacancies');
    }
}
