<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignIdFor(Company::class);
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignIdFor(Company::class);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignIdFor(Company::class);
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->foreignIdFor(Company::class);
        });
    }

    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            //
        });
    }
};
