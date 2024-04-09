<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Retrieve all assets.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع الممتلكات من قاعدة البيانات
        $assets = \App\Models\Asset::all();

        // التحقق مما إذا كانت هناك ممتلكات متاحة
        if ($assets->isEmpty()) {
            // إرسال استجابة برسالة خطأ
            return ApiResponse::sendResponse(404, 'No assets found.', null);
        }

        // إرسال استجابة بالممتلكات المسترجعة
        return ApiResponse::sendResponse(200, 'Assets retrieved successfully.', $assets);
    }
}
