<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Retrieve all employees.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع بيانات الموظفين من قاعدة البيانات
        $employees = Employee::all();

        // إرسال استجابة بالبيانات المسترجعة
        return ApiResponse::sendResponse(200, 'List of employees retrieved successfully.', $employees);
    }
}
