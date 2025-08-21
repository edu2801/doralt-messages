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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('message_id');
            $table->boolean('is_status_reply')->default(false);
            $table->string('chat_id');
            $table->string('connected_phone')->nullable();
            $table->boolean('waiting_message')->default(false);
            $table->boolean('is_edited')->default(false);
            $table->boolean('is_group')->default(false);
            $table->boolean('is_newsletter')->default(false);
            $table->string('phone');
            $table->boolean('from_me')->default(false);
            $table->timestamp('moment')->nullable();
            $table->string('status')->nullable();
            $table->string('chat_name')->nullable();
            $table->string('sender_name')->nullable();
            $table->boolean('is_broadcast')->default(false);
            $table->boolean('is_forwarded')->default(false);
            $table->longText('message')->nullable();
            $table->string('image_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
