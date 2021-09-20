<?php

namespace Callmehalpha\Laraauth\Commands;

use Illuminate\Console\Command;

class LaraauthCommand extends Command
{
    public $signature = 'laraauth';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
