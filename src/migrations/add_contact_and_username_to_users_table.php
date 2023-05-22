<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50)->index()->unique()->after('name');
            $table->string('contact', 20)->index()->unique()->nullable()->after('name');

            $table->string('photo', 200)->default('img/avatar.png');
            $table->tinyInteger('login_status')->default(0);
            $table->tinyInteger('user_status')->default(1);

            //Common Field
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->unsignedBigInteger('updated_by')->index()->nullable();
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('contact');
        });
    }
};