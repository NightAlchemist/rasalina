<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert the categories
        DB::table('categories')->insert([
            ['name' => 'mobile apps'],
            ['name' => 'website Design'],
            ['name' => 'ui/kit'],
            ['name' => 'Landing page'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
