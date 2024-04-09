<?php

namespace App\Http\Controllers\Api;

use App\Models\Expense;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        // Create new expense
        $expense = Expense::create($validatedData);

        // Send response with created expense
        return ApiResponse::sendResponse(201, 'Expense created successfully.', $expense);
    }
}
