<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->string('nom_support', 100)->unique();
            $table->string('code', 5)->unique();
            $table->integer('duree_pret_jours');
            $table->decimal('caution_euros', 6, 2)->nullable();
            $table->boolean('disponible_pret')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supports');
    }
};