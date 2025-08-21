<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function sendResponse($message, $data = null, $status = 200)
    {
        $response = ['message' => $message];
        if (!is_null($data)) {
            $response['data'] = $data;
        }
        return response()->json($response, $status);
    }

    protected function sendError($message, $status = 400)
    {
        return $this->sendResponse($message, null, $status);
    }
}
