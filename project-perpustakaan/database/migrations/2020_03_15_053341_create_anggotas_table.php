<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 25)->nullable()->default('text');
            $table->string('nim', 50)->nullable();
            $table->enum('fakultas', ['Hukum', 'Ekonomi & Bisnis', 'Ilmu Administrasi', 'Pertanian', 'Peternakan','Teknik', 'Kedokteran', 'Perikanan & Ilmu Kelautan', 'Matematika & Ilmu Pengetahuan Alam', 'Teknologi Pertanian', 'Ilmu Sosial & Ilmu Politik', 'Ilmu Budaya', 'Kedokteran Hewan', 'Ilmu Komputer', 'Kedokteran Gigi', 'Vokasi'])->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp', 13)->nullable()->default('text');
            $table->string('alamat', 100)->nullable();
            $table->enum('status_pinjam', ['Bebas', 'Tertanggung'])->nullable();
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
        Schema::dropIfExists('anggotas');
    }
}
