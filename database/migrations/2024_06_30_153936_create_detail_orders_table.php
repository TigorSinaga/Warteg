<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->string('no_pesanan');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_orders');
    }
}
