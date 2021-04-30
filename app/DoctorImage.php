<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorImage extends Model
{
      // $productImage->product
    public function DoctorImage()
    {
    	return $this->belongsTo(Doctor::class);
    }

    // accessor
    public function getUrlAttribute()
    {
    	if (substr($this->image, 0, 4) === "http") {
    		return $this->image;
    	}

    	return '/images/doctors/' . $this->image;
    }

}

}
