<?php

namespace Tests\Feature;

use App\Models\Product\Subscription\ProductSubscriptionModel;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ProductSubscriptionCreateTest extends TestCase
{
    private const URL = '/v2/product/subscription/add';
    /**
     * A basic feature test example.
     */
    public function test_create_subscription(): void
    {
        $formData = [
            "CATEGORY_SUB_INDEX"    => '5',
            "PRODUCT_CODE"          => 'FF33',
            "PRODUCT_NAME"          => 'TEST',
            "PRODUCT_PRICE"         => '20000',
            "PRODUCT_STOCK_AMOUNT"  => '55',
            "FLAG_STATUS"           => 'Y',
            "FLAG_DELETE"           => 'N',
            "MEMO"                  => 'efefffff',
            "REGISTRY_ADMIN_INDEX"  => '1',
            "MODIFY_ADMIN_INDEX"    => '1',
            "REGISTRY_DATE"         => Carbon::now(),
        ];

        $response = $this->postJson(self::URL, $formData);
        $response->assertStatus(200);
        $response->assertJson([
            'message' => '상품 등록 성공',
        ]);
    }
}
