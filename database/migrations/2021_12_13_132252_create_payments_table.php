<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->integer('p_transaction_id')->nullable();
            $table->integer('p_user_id')->nullable();
            $table->float('p_money')->nullable()->comment('số tiền thanh toán');
            $table->string('p_note')->nullable()->comment('ghi chú thanh toán');
            $table->string('p_vnp_response_code')->nullable()->comment('mã phản hồi');
            $table->string('p_code_vnpay')->nullable()->comment('mã giao dịch vnpay');
            $table->string('p_code_bank')->nullable()->comment('mã ngân hàng');
            $table->dateTime('p_time')->nullable()->comment('thời gian chuyển khoản');
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
        Schema::dropIfExists('payments');
    }
}
