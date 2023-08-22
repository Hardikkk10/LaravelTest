<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;
  
class ContactsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        Log::info('Importing row:', $row);

        if (!empty($row['name'])) {
            return new Contact([
                'name'     => $row['name'],
                'email'    => $row['email'],
            ]);
        } else {
            Log::info('Skipping row due to empty name:', $row);
            return null;
        }
        
        // $contact= new Contact([
        //     'name'     => $row['name'],
        //     'email'    => $row['email'],
        // ]);

        // return $contact;
    }
}