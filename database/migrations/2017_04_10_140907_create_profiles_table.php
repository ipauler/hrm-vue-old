<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profileable_id');
            $table->string('profileable_type', 100);
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->date('birthdate');
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('technology_id')->nullable();
            $table->unsignedInteger('level_id')->nullable();
            $table->float('experience', 3, 1)->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('profiles');
    }
}
