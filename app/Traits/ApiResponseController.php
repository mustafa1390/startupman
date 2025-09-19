<?php


namespace App\Traits;

trait ApiResponseController
{
    public function successResponse($data)
    {
        $data['status'] = 200;
        return response()->json($data);
    }

    public function errorResponse($data)
    {
        $data['status'] = 401;
        $data['message'] = 'Not Found';
        return response()->json($data, 401);
    }

    public function accessDeniedResponse($data)
    {
        $data['status'] = 403;
        return response()->json($data);
    }


    // -------------------

    public function notFound($data)
    {
        $data['status'] = 404;
        return response()->json($data);
    }


}