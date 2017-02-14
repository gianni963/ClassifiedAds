<?php

namespace App\Repositories;

use App\Ad;

class Ads
{	
	public function all()
	{

	return Ad::all();

	}
}