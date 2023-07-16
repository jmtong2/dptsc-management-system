<?php

namespace App\Trait;

trait CustomJsonResponse
{
    public function success($data, $message = 'Success', $code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function error($message = 'Error', $code = 400)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }

    public function unauthorized($message = 'Unauthorized', $code = 401)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }

    public function notFound($message = 'Not Found', $code = 404)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }

    public function internalServerError($message = 'Internal Server Error', $code = 500)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }

    public function validationError($message = 'Validation Error', $code = 422)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }

    public function custom($message = 'Custom', $code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => null
        ], $code);
    }
}
