<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('users');
            $table->foreignId('receiver_id')->constrained('users');
            $table->longText('content');
            $table->timestamps();
        });

        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user1_id')->constrained('users');
            $table->foreignId('user2_id')->constrained('users');
            $table->enum('status', ['active', 'archived', 'deleted'])->default('active');
            $table->foreignId('last_message_id')->nullable()->constrained('messages');
            $table->timestamp('last_message_at')->nullable();
            $table->boolean('user1_read')->default(false);
            $table->boolean('user2_read')->default(false);            
            $table->timestamps();
        });

        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('The receiver of the notification')->constrained();
            $table->string('type')->comment('The type of notification');
            $table->string('title')->comment('The title of the notification');
            $table->foreignId('message_id')->nullable()->comment('The message that the notification is for')->constrained();
            $table->foreignId('conversation_id')->nullable()->comment('The conversation that the notification is for')->constrained();
            $table->boolean('read')->default(false);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('conversations');

    }
}
