<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Auth;
use DB;


use Hash;
class ContactController extends Controller
{

public function sendMessage(Request $request)
{
    // Validate the request data (no validation for contact_no)
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    $adminEmail = "info@gmail.com";

    // Fetch user's IP information (using ipinfo.io API)
    $ip = $request->ip();
    $accessToken = "ea247b61074e48";  // Replace with your actual access token
    $url = "https://ipinfo.io/{$ip}/json?token={$accessToken}";

    try {
        // Fetch the IP info from the API
        $ipInfo = json_decode(file_get_contents($url), true);

        // Default values for city and country
        $city = $ipInfo['city'] ?? null;
        $country = $ipInfo['country'] ?? null;

        // Store message in the database, including IP, city, and country
        \DB::table('contacts')->insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact_no' => $request->input('contact_no', null),
            'message' => $validatedData['message'],
            'ip_address' => $ip,
            'city' => $city,
            'country' => $country,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data to be passed to the email template
        $emailData = [
            'name' => $validatedData['name'],
            'userMessage' => $validatedData['message']
        ];

        // Send email to the user
        Mail::send('emails.contact', $emailData, function ($message) use ($validatedData) {
            $message->from('info@gmail.com', 'Sky High')
                ->to($validatedData['email'])
                ->subject("Contact Form Message from {$validatedData['name']}");
        });

        // Send email to the admin
        Mail::send('emails.contact', $emailData, function ($message) use ($adminEmail, $validatedData) {
            $message->from('info@gmail.com', 'Sky High')
                ->to($adminEmail)
                ->subject("New Contact Form Message from {$validatedData['name']}");
        });

        \Log::info('Message stored and emails sent successfully', ['email_data' => $validatedData]);

        // Flash success message and redirect back
        return redirect()->back()->with('success', 'Mohsin, email sent to admin. Please stay in touch and explore our latest work.');
    } catch (\Exception $e) {
        // Log the error with more details about the issue
        \Log::error('An error occurred in sendMessage', [
            'error_message' => $e->getMessage(),
            'error_code' => $e->getCode(),
            'trace' => $e->getTraceAsString(),
            'email_data' => $validatedData
        ]);

        // Flash error message and redirect back
        return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
    }
}
public function login_submit(Request $request)
{
    try {
        // Validate inputs
        $request->validate([
            'email' => 'required|email',  // Changed 'name' to 'email'
            'password' => 'required|string',
        ]);

        \Log::info('Login attempt', ['email' => $request->email]);

        // Fetch user by email
        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user) {
            \Log::warning('User not found', ['email' => $request->email]);
            return back()->withErrors(['email' => 'User not found.'])->withInput();
        }

        \Log::info('User found', ['user_id' => $user->id]);

        // Verify password
        if (!Hash::check($request->password, $user->password)) {
            \Log::warning('Password mismatch', ['user_id' => $user->id]);
            return back()->withErrors(['password' => 'Invalid password.'])->withInput();
        }

        \Log::info('Password verified', ['user_id' => $user->id]);

        // Store user information in session
        session([
            'user_id' => $user->id,
            'user_email' => $user->email,
            'user_name' => $user->name,
        ]);

        \Log::info('User session stored', ['user_id' => $user->id]);

        // Redirect to dashboard
        return redirect('/data')->with('success', 'Login successful!');
    } catch (\Exception $e) {
        // Log the exception
        \Log::error('Login error', ['error' => $e->getMessage()]);
        return back()->withErrors(['error' => 'An unexpected error occurred.'])->withInput();
    }
}
public function data()
{
    // Fetch all contacts from the database
    $contacts = Contact::all();

    // Pass the contacts to the view 'contacts'
    return view('contacts', compact('contacts'));
}



}
