<?php

namespace App\Http\Services;

use App\Models\Limit;
use Illuminate\Support\Facades\Auth;

class LoremTextGeneratorService 
{

    public function increment(int $count) 
    {
        if ($count == 10) {

            Limit::create([
                'user_id' => Auth::id()
            ]);
            
        }
        
    }
}