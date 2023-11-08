<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('e_id')->primary();
            $table->string('e_name', 100);
            $table->string('e_description', 400)->nullable();
            $table->string('e_place', 50);
            $table->dateTime('e_date');
            $table->uuid('Group_g_uuid')->index();
            $table->uuid('User_Group_ug_id')->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('Group_g_uuid')->references('g_id')->on('groups');
            $table->foreign('User_Group_ug_id')->references('ug_id')->on('user_groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
