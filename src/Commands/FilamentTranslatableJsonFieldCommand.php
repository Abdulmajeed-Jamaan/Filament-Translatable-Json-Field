<?php

namespace AbdulmajeedJamaan\FilamentTranslatableJsonField\Commands;

use Illuminate\Console\Command;

class FilamentTranslatableJsonFieldCommand extends Command
{
    public $signature = 'filament-translatable-json-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
