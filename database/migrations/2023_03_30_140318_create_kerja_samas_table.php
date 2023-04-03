<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjaSamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_samas', function (Blueprint $table) {
            $table->id();
            $table->string('perihal', 100)->default('text');
            $table->string('no_surat_pihak1', 100)->default('noPihak1');
            $table->string('no_surat_pihak2', 100)->default('noPihak2');
            $table->date('tgl_surat');
            $table->string('pic_1', 100)->default('pic1');
            $table->string('pic_2', 100)->default('pic2');
            $table->text('berkas');
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
        Schema::dropIfExists('kerja_samas');
    }
}