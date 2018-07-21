<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
        if($request->wantsJson())
        {
            return response()->json([$request->all()]);
        }
        return $request->all();

    }
}
