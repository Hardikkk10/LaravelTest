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

        if (!empty($row[0])) { 
            return new Contact([
                'name'     => $row[0],
                'email'    => $row[1],
            ]);
        }
        return null;
    }
}