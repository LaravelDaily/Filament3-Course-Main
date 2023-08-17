<?php

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('company_user', function (Blueprint $table) {
            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(User::class);
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
