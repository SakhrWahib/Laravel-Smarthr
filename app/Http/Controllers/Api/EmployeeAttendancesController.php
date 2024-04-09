<?php

namespace App\Http\Controllers\Api;

use App\Models\EmployeeAttendance;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeAttendancesController extends Controller
{
    /**
     * Retrieve all employee attendance records.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع سجلات الحضور للموظفين من قاعدة البيانات
        $attendances = EmployeeAttendance::all();

        // إرسال استجابة بالسجلات المسترجعة
        return ApiResponse::sendResponse(200, 'List of employee attendance records retrieved successfully.', $attendances);
    }
}
