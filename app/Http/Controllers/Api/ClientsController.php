<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;

class ClientsController extends Controller
{
    /**
     * Retrieve all clients.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع العملاء من قاعدة البيانات
        $clients = Client::all();

        // التحقق مما إذا كانت هناك عملاء متاحين
        if ($clients->isEmpty()) {
            // إرسال استجابة برسالة خطأ
            return ApiResponse::sendResponse(404, 'No clients found.', null);
        }

        // إرسال استجابة بالعملاء المسترجعين
        return ApiResponse::sendResponse(200, 'Clients retrieved successfully.', $clients);
    }
}
