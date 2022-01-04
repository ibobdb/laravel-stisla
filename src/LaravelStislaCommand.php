<?php

namespace Ibobdb\LaravelStisla;

use Illuminate\Console\Command;

class LaravelStislaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LaravelStisla:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup LaravelStisla routes, service providers and views';

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
     * @return int
     */
    public function handle()
    {
        $this->publishAssets();
        $this->comment('LaravelStisla is now installed.');
    }
    public function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--provider' => 'Laravel\Fortify\FortifyServiceProvider']);
        $this->callSilent('vendor:publish', ['--provider' => 'Ibobdb\LaravelStisla\LaravelStislaServiceProvider']);
    }
}
