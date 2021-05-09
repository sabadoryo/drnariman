<?php


namespace App\Http\Responses;


use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait CustomResponse
{
    public function cresponse($message = 'Success', $data = null, $status = Response::HTTP_OK)
    {
        return new JsonResponse([
            'result_code' => $status,
            'result_message' => $message,
            'data' => $data,
        ], $status);
    }
}
