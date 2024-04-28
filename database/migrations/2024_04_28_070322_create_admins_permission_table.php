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
        Schema::create('admins_permission', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->string('module');
            $table->string('view_access');
            $table->string('edit_access');
            $table->string('full_access');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins_permission');
    }
};
