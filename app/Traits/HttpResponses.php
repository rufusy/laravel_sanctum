<?php
/**
 * @author Rufusy Idachi <idachirufus@gmail.com>
 * @date: 2/7/2024
 * @time: 11:34 AM
 */

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HttpResponses
{
    protected function success($data, $code = 200, $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'Request was successful.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $code, $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'Error has occurred.',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
