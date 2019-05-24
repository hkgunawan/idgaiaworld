<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Schema;

use Illuminate\Console\Command;

class DropTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'drop semua table untuk syncron dengan sam';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Schema::dropIfExists('equipclass');
        Schema::dropIfExists('friendlist');
        Schema::dropIfExists('maxset');
        Schema::dropIfExists('partylist');
        Schema::dropIfExists('request');
        Schema::dropIfExists('userstable');
    }
}
