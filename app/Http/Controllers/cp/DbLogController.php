<?php

namespace App\Http\Controllers\cp;

use App\Http\Controllers\cp\AppBaseController;
use App\Models\DbLog;
use Illuminate\Http\Request;
use Response;

class DbLogController extends AppBaseController
{
    /**
     * Display a listing of the Branch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        session()->flashInput($request->input());

        $logs = DbLog::with('action')->whereHas('action')->orderBy('created_at', 'desc')->paginate($request->perPage)->appends('perPage', $request->perPage);
        return view('cp.logs.index',compact('logs'));
    }
}
