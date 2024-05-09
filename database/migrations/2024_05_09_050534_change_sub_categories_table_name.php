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
        schema::rename('sub_categories', 'books');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
                schema::rename( 'books','sub_categories');

    }
};
