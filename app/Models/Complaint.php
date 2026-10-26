<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'company_name',
        'complaints',
        'documents',
        'category',
        'device',
        'modal',
        'serial_number',
        'operating_system',
        'nature_of_complaint',
        'network_type',
        'latitude',
        'longitude',
        'location_address',
    ];
    protected function casts(): array
    {
        return [
            'documents' => 'array',
            'nature_of_complaint' => 'array',
        ];
    }
}
