<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Exports\ContactsExport;
use App\Imports\ContactsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(Request $request){
        $sortBy = $request->query('sort', 'id'); 
        $contacts = Contact::orderBy($sortBy)->paginate(5);

        return view('dashboard', ['contacts' => $contacts]);
    }
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard')->with('success', 'Contact deleted successfully.');
    }

    public function export() 
    {
       return Excel::download(new ContactsExport(), 'contacts.xlsx');
    }
       
    public function import(Request $request) 
    {
        Excel::import(new ContactsImport,$request->file('file'));
               
        return redirect()->back();
    }
}