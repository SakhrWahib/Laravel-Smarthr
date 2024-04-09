<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Retrieve a list of departments.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع قائمة الأقسام من قاعدة البيانات
        $departments = Department::all();

        // إرسال الاستجابة باستخدام الكلاس ApiResponse
        return ApiResponse::sendResponse(200, 'List of departments retrieved successfully.', $departments);
    }
}
