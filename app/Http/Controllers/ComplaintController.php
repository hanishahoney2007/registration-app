<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Mail\ComplaintConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Complaint;
use App\Jobs\SendComplaintWhatsApp;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function complaintForm()
    {


        return view('complaint.create');
    }

    public function complaintFormSave(Request $request)
    {

        $validated = $request->validate([

            'full_name' => [
                'required',
                'string',
                'max:100'
            ],
            'email' => [
                'required',
                'email',
                'max:100'
            ],
            'mobile' => [
                'required',
                'digits:10',
            ],
            'device' => [
                'required',
                'in:desktop,network,laptop,server,printer'
            ],
            'category' => ['required', 'in:individual,corporate'],
            'company_name' => [
                'nullable',
                'required_if:category,corporate',
                'string',
                'max:100'
            ],
            'modal' => [
                'required',
                'string'

            ],
            'serial_number' => [
                'required',
                'string'
            ],
            'operating_system' => [
                'required',
                'max:100'
            ],
            'nature_of_complaint' => 'required|array|min:1',
            'nature_of_complaint.*' => [
                'required',
                'string',
                'in:notstarting,wifipblm,hardware,keyboard,osissue,malware,recovery,connectivity,switch,server,printer,installation',

            ],
            'complaints' => [
                'required',
                'string',
                'max:2000'
            ],

            'documents' => ['nullable', 'array', 'max:5'],
            'documents.*' => [
                'file',
                'mimes:pdf,jpg,jpeg,png',
                'max:5120',
            ],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],

            'location_address' => ['nullable', 'string', 'max:1000'],

        ], [
            'email.unique' => 'This email address is already registered.',
            'mobile.unique' => 'This mobile number is already registered.',
            'mobile.required' => 'Please enter your mobile number.',
            'mobile.digits' => 'Mobile number must be exactly 10 digits.',
        ]);

        $filePaths = [];

        if ($request->hasFile('documents')) {
            $folder = 'complaint-documents/' . $validated['mobile'];
            foreach ($request->file('documents') as $file) {
                $filePaths[] = $file->store(
                    $folder,
                    'public'
                );
            }
        }

        $validated['documents'] = $filePaths;
        $complaint = Complaint::create($validated);
        Mail::to($complaint->email)->queue(new ComplaintConfirmation($complaint));
        //SendComplaintWhatsApp::dispatch($complaint);
        return redirect()->route('complaint.create')->with('success', 'Complaint submitted successfully');
    }
}
