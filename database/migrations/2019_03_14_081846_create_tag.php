<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tag', function (Blueprint $table) {
            $table->increments('id_tag');
            $table->string('title');
            // $table->string('tag_seo');   
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
                Schema::drop('tag');
    }
}
