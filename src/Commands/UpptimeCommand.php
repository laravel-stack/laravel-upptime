<?php

namespace laravel-stack\Upptime\Commands;

use Illuminate\Console\Command;

class UpptimeCommand extends Command
{
    public $signature = 'laravel-upptime';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
