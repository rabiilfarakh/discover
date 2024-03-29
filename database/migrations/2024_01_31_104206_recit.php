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
        Schema::disableForeignKeyConstraints();
        Schema::create('recits', function (Blueprint $table) {
            $table->id();
            $table->string('RecitName');
            $table->timestamp('RecitDate')->useCurrent();
            $table->text('RecitContent');
            $table->foreignId('DestinationId')->nullable()->constrained('destinations');
            $table->foreignId('UserId')->constrained('users');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
