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
        Schema::create('todo_items', function (Blueprint $table) {
            $table->id();

            //add
            $table->foreignId('user_id') // 外部キーを追加
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->text('title');
            $table->boolean('is_done')->default(false);
            //add
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_items');
    }
};
