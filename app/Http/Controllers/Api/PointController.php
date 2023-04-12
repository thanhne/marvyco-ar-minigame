<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Point;
use App\Http\Resources\PointResource;

class PointController extends Controller
{
    /**
     * Post point
     * @param Request $request [input data]
     * @return json;
     */
    public function post_point(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'game_id' => 'required',
            'total_point' => 'required',
        ]);

        $point = Point::create($validatedData);

        return new PointResource($point);
    }
}
