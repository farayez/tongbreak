<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function server_status()
    {
        return [
            'status' => 'online',
            'message' => 'Welcome to the testbed for v214'
        ];
    }

    public function job_categories()
    {
        return [
            'categories' => ['house', 'cars', 'fabric'],
            'subcategories' => [
                'house' => ['condo', 'duplex'],
                'car' => ['sedan', 'hatchback', 'truck', 'luxury'],
                'fabric' => ['men', 'women', 'kids'],
            ]
        ];
    }

    public function category_metadata(Request $request)
    {
        $category = $request->input('category');
        
        if ($category == 'house') {
            return [
                'fields' => [
                    'area-text-box',
                    'laundry-radio-group',
                    'parking-check-box',
                    'availability-time-slot',
                ],
                'contents' => [
                    'laundry-radio-group' => ['unavailable', 'self-service', 'paid-service'],
                    'parking-check-box' => ['indoor', 'outdoor', 'unavailable'],
                ],
            ];
        } else {
            return [
                'fields' => [
                    'availability-time-slot',
                ],
            ];
        }
        
    }
}
