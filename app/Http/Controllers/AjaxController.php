<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AjaxService;

class AjaxController extends Controller
{
    private $service;

    public function __construct(AjaxService $service)
    {
        $this->service = $service;
    }

    public function getRoomNumbers($hotelRoomId)
    {
        try{    
            $roomDetails = $this->service->getRoomNumbers($hotelRoomId);
        }catch(\Throwable $th){
            return $th;
        }
        return response()->json($roomDetails);
    }
}
