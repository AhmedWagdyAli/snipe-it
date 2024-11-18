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
        Schema::table('asset_maintenances', function (Blueprint $table) {
            $table->foreignId('failure_type_id')->nullable()->constrained('failure_types', 'id')->nullOnDelete();
            $table->foreignId('pirority_id')->nullable()->constrained('priorities', 'id')->nullOnDelete();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asset_maintenances', function (Blueprint $table) {
            // Drop the foreign key constraints first
            $table->dropForeign(['failure_type_id']);
            $table->dropForeign(['pirority_id']);

            // Then drop the columns
            $table->dropColumn(['failure_type_id', 'pirority_id']);
        });
    }
};
