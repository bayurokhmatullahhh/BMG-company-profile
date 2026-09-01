<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(ContactFormRequest $request)
    {
        $validated = $request->validated();

        // In production, you would:
        // 1. Send email notification
        // 2. Store in database
        // 3. Integrate with CRM

        // For now, we'll just return success
        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.',
        ]);
    }
}
