<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class BookingController extends Controller
{
    /**
     * @author Abdullah Hegab
     * @return Response|Application|ResponseFactory
     */
    public function index(): Response|Application|ResponseFactory
    {
        $bookings = Booking::all();
        if(! empty($bookings)){
            return response([
                "data" => $bookings,
            ],200);

        }else{
            return response([
                "message" => "we don't have any booked products yet"
            ],404);

        }
    }
}
