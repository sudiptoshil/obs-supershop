<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id')->index();
            $table->unsignedBigInteger('role_id')->index();
            $table->foreign('permission_id')->references('id')
                ->on('permissions')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('role_id')->references('id')
                ->on('roles')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->primary(['permission_id', 'role_id']);
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
        Schema::dropIfExists('permission_role');
    }
}
