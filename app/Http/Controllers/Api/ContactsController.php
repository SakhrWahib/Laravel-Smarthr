<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;

class ContactsController extends Controller
{
    /**
     * Store a newly created contact in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreContactRequest $request)
    {
        // Validate the incoming request data
        $data = $request->validated();

        // Create a new contact record
        $contact = Contact::create($data);

        // Check if the contact was successfully created
        if ($contact) {
            // Return a success response
            return ApiResponse::sendResponse(201, 'Contact created successfully.', $contact);
        } else {
            // Return an error response
            return ApiResponse::sendResponse(500, 'Failed to create contact.', null);
        }
    }
}
