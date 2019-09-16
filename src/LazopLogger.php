<?php

namespace Paulwscom\Lazada;

use Illuminate\Support\Facades\Log;

class LazopLogger
{
	public function log($logData)
	{
		Log::channel('lazada')->info($logData);
	}
}
?>
