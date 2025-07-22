<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('previous_school_address', 255)->nullable();
            $table->string('religion', 100)->nullable();
            $table->string('civil_status', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['previous_school_address', 'religion', 'civil_status']);
        });
    }
};
