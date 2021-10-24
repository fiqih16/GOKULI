<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained()->default(2);
            // $table->string('student_address')->nullable();
            // $table->string('student_licence_number')->nullable();
            // $table->string('teacher_qualifications')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->boolean('kuli_availability')->default(false);
            $table->integer('mandor_kulis')->nullable();
            $table->boolean('called')->default(false);
            $table->foreignId('works_under')->nullable();
            $table->string('experience')->default('*Ini adalah pengalaman nguli sebagai portfolio kuli');
            $table->string('photo')->nullable();
            $table->boolean('applying')->default(false);
            $table->foreignId('proyek_id')->nullable();
            $table->foreignId('status_id')->default(7);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
