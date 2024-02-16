<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ExchangeRate;
use Carbon\Carbon;

class ClearExchangeRates extends Command
{
    //exchange_rates
    protected $signature = 'exchange_rates:clear';
    protected $description = 'Clear exchange rates older than 24 hours';

    public function handle()
    {
        $twentyFourHoursAgo = Carbon::now()->subDay();
        
        ExchangeRate::where('published_date', '<', $twentyFourHoursAgo)->delete();

        $this->info('Cleared exchange rates older than 24 hours.');
    }
}
