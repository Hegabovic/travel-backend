<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * @param $product_id
     * @param Request $request
     * @return Response|string|Application|ResponseFactory
     * @author Abdullah Hegab
     */
    public function bookProduct($product_id, Request $request): Response|string|Application|ResponseFactory
    {
        $productId = $product_id;
        $clientId = $request->client_id;

        $selectedProduct = Product::where('id', $productId)->get()->first();

        if (!$selectedProduct) {
            return "please enter a valid product id";
        }

        if ($selectedProduct->purchasing_number < $selectedProduct->capacity) {
            Booking::create([
                "client_id" => $clientId,
                "product_id" => $selectedProduct->id,
            ]);

            Product::where('id', $productId)->update([
                "purchasing_number" => $selectedProduct->purchasing_number + 1,
            ]);
            return response([
                'message' => "product has been booked successfully",
                "data" => new ProductsResource($selectedProduct),
            ], 200);
        } else {
            Product::where('id', $selectedProduct->id)->update([
                "is_available" => false,
            ]);
            return response([
                "message" => "you can't book this product, out of stock"
            ], 406);
        }
    }

}
