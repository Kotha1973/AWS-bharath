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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('abstract');
            $table->string('Content');
            $table->string('product');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();    
        });

        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
