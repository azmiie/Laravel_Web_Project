<?php

namespace App\Imports;

use App\Models\staff;
use Maatwebsite\Excel\Concerns\ToModel;

class staffImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new staff([
            'name' => $row[1],
            'phoneNum' => $row[2],
        ]);
    }
}
