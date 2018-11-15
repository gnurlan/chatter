<?php

namespace DevDojo\Chatter\Controllers\Api;

use DevDojo\Chatter\Models\Ban;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChatterUserController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function ban(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'        => 'required|integer|exists:users,id',
            'period'    => 'required|integer'
        ]);

        if($validator->fails())
        {
            return [
                'status'    => false,
                'message'   => $validator->errors()
            ];
        }

        if(Ban::setBan($request->all()))
        {
            return ['status' => true];
        }

        return [
            'status'    => false,
            'message'   => 'internal server error'
        ];
    }
}