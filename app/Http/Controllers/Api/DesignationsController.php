<?php

namespace App\Http\Controllers\Api;

use App\Models\Designation;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationsController extends Controller
{
    /**
     * Retrieve all designations.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع تصنيفات الوظائف من قاعدة البيانات
        $designations = Designation::all();

        // إرسال استجابة بالتصنيفات المسترجعة
        return ApiResponse::sendResponse(200, 'List of designations retrieved successfully.', $designations);
    }
}
