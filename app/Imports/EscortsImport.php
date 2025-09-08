<?php
namespace App\Imports;

use App\Models\Escort;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EscortsImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Skip rows with no name or essential data
            if (empty($row['name']) || empty($row['gender']) || empty($row['category'])) {
                continue;
            }

            Escort::create([
                'name' => $row['name'],
                'custom_title' => $row['custom_title'],
                'gender' => $row['gender'],
                'category' => $row['category'],
                'age' => $row['age'],
                'location' => $row['location'],
                'phone' => $row['phone'],
                'email' => $row['email'],
                'rate_per_hour' => $row['rate_per_hour'],
                'bio' => $row['bio'],
                'about' => $row['about'],
                'slug' => !empty($row['slug']) ? Str::slug($row['slug']) : Str::slug($row['name']),
                'services' => $row['services'],
                'experience' => $row['experience'],
                'languages_spoken' => $row['languages_spoken'],
                'incall_enabled' => !empty($row['incall_enabled']) && $row['incall_enabled'] == 1,
                'outcall_enabled' => !empty($row['outcall_enabled']) && $row['outcall_enabled'] == 1,
                'marital_status' => $row['marital_status'],
                'vip' => !empty($row['vip']) && $row['vip'] == 1,
                'smokes' => !empty($row['smokes']) && $row['smokes'] == 1,
                'outcall_rate' => $row['outcall_rate'],
                'height' => $row['height'],
                'bust' => $row['bust'],
                'nationality' => $row['nationality'],
                'orientation' => $row['orientation'],
                'ethnicity' => $row['ethnicity'],
                'shaved' => $row['shaved'],
                'hair_color' => $row['hair_color'],

                'meta_title' => $row['meta_title'],
                'meta_description' => $row['meta_description'],
                'meta_keywords' => $row['meta_keywords'],

                // Defaults
                'user_id' => auth()->id(),
                'verified' => false,
                'status' => 'active',
                'rating' => 0,
            ]);
        }
    }
}
