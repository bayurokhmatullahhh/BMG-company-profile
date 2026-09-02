<?php

namespace App\Http\Controllers;

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
     * Display the Layanan page.
     */
    public function layanan()
    {
        return view('layanan');
    }

    /**
     * Display the Tentang Kami page.
     */
    public function tentang()
    {
        return view('tentang');
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
