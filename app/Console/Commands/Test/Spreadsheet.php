<?php

namespace App\Console\Commands\Test;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Spreadsheet extends Command
{
    protected $signature = 'test:spreadsheet';

    protected $description = 'Command description';

    protected const URL = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQoIJMOXPdGacdLKuYjkaZNfIG12ZUqQN96tPwEqpNROWozPcVSRAllCcuvXPTJ5ej9fV3OkEDUyGmi/pub?output=xlsx';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $filename = 'content.xlsx';

        Storage::disk('local')->delete($filename);

        Storage::disk('local')->put($filename, file_get_contents(self::URL));

        return 0;
    }
}
