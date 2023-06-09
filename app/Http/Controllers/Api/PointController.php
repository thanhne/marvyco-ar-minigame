<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
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
        try {
            $validatedData = $request->validate([
                'user_id' => 'required',
                'game_id' => 'required',
                'total_point' => 'required|min:0',
            ]);
        } catch(ValidationException $e) {
            $errors = $e->errors();
            return new JsonResponse([
                'message' => 'failed',
                'errors' => $errors
            ], 422);
        }

        $point = Point::create($validatedData);

        return new JsonResponse([
            'message' => 'success',
            'data' => new PointResource($point)
        ]);
    }
}
