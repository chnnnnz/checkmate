<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('PRODUCT_SUBSCRIPTION_COUNT_SET', function (Blueprint $table) {
            $table->increments('SUBSCRIPTION_SET_INDEX')->comment('구독상품 회차별 고유 번호');
            $table->integer('PRODUCT_SUBSCRIPTION_INDEX')->comment('구독 상품 고유 번호');
            $table->integer('SUBSCRIBE_COUNT_START')->default(0)->comment('구독 회차 시작 값');
            $table->integer('SUBSCRIBE_COUNT_END')->default(0)->comment('구독 회차 종료 값');
            $table->integer('RESERVE_RATE')->default(0)->comment('회차별 금액');
            $table->integer('SORT_ORDER')->default(0)->comment('회차 순서');
            $table->dateTime('REGISTRY_DATE')->useCurrent()->comment('등록일');
            $table->comment('구독 상품 회차별 금액');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PRODUCT_SUBSCRIPTION_COUNT_SET');
    }
};
