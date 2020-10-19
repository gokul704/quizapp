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
            $table->string('name');
            $table->string('name2');
            $table->string('unique_id')->nullable();

            $table->string('email')->unique();
            $table->string('mobile_number')->unique();
            $table->string('age');
            $table->string('account_type')->default('individual');
            $table->integer('role')->default(0);
            $table->string('organisation_name')->default('no_organisation');
            $table->string('coupon_code')->default('no_coupon');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_paid')->default(false);
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
