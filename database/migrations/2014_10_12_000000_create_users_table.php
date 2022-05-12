<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('picName');
            $table->string('compName');
            $table->string('email')->unique();
            $table->enum('serviceGroup', ['Shared', 'Dedicated', 'OnPrem']);
            $table->enum('serviceShare', ['FAQ', 'Transactional']);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('password');
            $table->string('whatsapp');
            $table->string('slack');
            $table->string('telegram');
            $table->string('coster');
            $table->string('custumchannel');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
