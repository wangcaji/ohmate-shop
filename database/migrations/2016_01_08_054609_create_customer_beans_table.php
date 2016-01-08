<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_beans', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customer_id')->unsigned()->comment('用户');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->integer('bean_rate_id')->unsigned()->comment('积分兑换规则');
            $table->foreign('bean_rate_id')->references('id')->on('bean_rates');

            $table->integer('value')->unsigned()->comment('积分值');
            $table->boolean('valid')->default(false)->comment('积分是否有效');

            $table->index('customer_id');

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
        Schema::table('customer_beans', function (Blueprint $table) {
            //
            $table->dropForeign('customer_beans_customer_id_foreign');
            $table->dropForeign('customer_beans_bean_rate_id_foreign');
        });
    }
}
