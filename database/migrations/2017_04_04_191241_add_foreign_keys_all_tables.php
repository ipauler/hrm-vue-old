<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysAllTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //        Schema::table('employees', function (Blueprint $table) {
        //            $table->foreign('city')->references('id')->on('cities')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('technology')->references('id')->on('technologies')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('level')->references('id')->on('levels')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('department')->references('id')->on('departments')->onUpdate('cascade')->onDelete('set null');
        //        });
        //        Schema::table('departments', function (Blueprint $table) {
        //            $table->foreign('headed_by')->references('id')->on('employees')->onUpdate('cascade')->onDelete('set null');
        //        });
        //        Schema::table('salaries', function (Blueprint $table) {
        //            $table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade')->onDelete('cascade');
        //        });
        //        Schema::table('vacancies', function (Blueprint $table) {
        //            $table->foreign('status')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('processed_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        //        });
        //        Schema::table('trackings', function (Blueprint $table) {
        //            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onUpdate('cascade')->onDelete('cascade');
        //            $table->foreign('tracked_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        //        });
        //        Schema::table('participations', function (Blueprint $table) {
        //            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onUpdate('cascade')->onDelete('cascade');
        //            $table->foreign('participated_by')->references('id')->on('candidates')->onUpdate('cascade')->onDelete('cascade');
        //        });
        //        Schema::table('projects', function (Blueprint $table) {
        //            $table->foreign('manager')->references('id')->on('employees')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('department')->references('id')->on('departments')->onUpdate('cascade')->onDelete('set null');
        //            $table->foreign('stage')->references('id')->on('stages')->onUpdate('cascade')->onDelete('set null');
        //        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //        Schema::table('projects', function (Blueprint $table) {
        //            $table->dropForeign('projects_manager_foreign');
        //            $table->dropForeign('projects_department_foreign');
        //            $table->dropForeign('projects_stage_foreign');
        //        });
        //        Schema::table('participations', function (Blueprint $table) {
        //            $table->dropForeign('participations_vacancy_id_foreign');
        //            $table->dropForeign('participations_participated_by_foreign');
        //        });
        //        Schema::table('trackings', function (Blueprint $table) {
        //            $table->dropForeign('trackings_vacancy_id_foreign');
        //            $table->dropForeign('trackings_tracked_by_foreign');
        //        });
        //        Schema::table('vacancies', function (Blueprint $table) {
        //            $table->dropForeign('vacancies_status_foreign');
        //            $table->dropForeign('vacancies_processed_by_foreign');
        //        });
        //        Schema::table('salaries', function (Blueprint $table) {
        //            $table->dropForeign('salaries_employee_id_foreign');
        //        });
        //        Schema::table('departments', function (Blueprint $table) {
        //            $table->dropForeign('departments_headed_by_foreign');
        //        });
        //        Schema::table('employees', function (Blueprint $table) {
        //            $table->dropForeign('employees_city_foreign');
        //            $table->dropForeign('employees_technology_foreign');
        //            $table->dropForeign('employees_level_foreign');
        //            $table->dropForeign('employees_department_foreign');
        //        });
    }
}
