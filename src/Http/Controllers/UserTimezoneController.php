<?php

namespace Jeremytubbs\UserTimezone\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class MeetingController
 *
 * @package App\Http\Controllers
 */
class UserTimezoneController extends Controller
{

    public function store(Request $request)
    {
        session(['timezone' => $request->timezone]);
        return response()->json($request->timezone);
    }
}
