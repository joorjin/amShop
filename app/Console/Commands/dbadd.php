<?php

namespace App\Console\Commands;

use App\Models\UserValidation;
use App\Models\Writer;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;



class dbadd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:testdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run db test';

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
        // $this->line("Some text");
        // $this->info("Hey, watch this !");
        // $this->comment("Just a comment passing by");
        // $this->question("Why did you do that?");
        // $this->error("Ops, that should not happen.");

        $this->comment("start..");
        sleep(1);






// command
        $this->comment("Preliminary review ...");
        $this->comment("rollback");
        Artisan::call('migrate:rollback');
        Artisan::call('migrate:rollback');
        Artisan::call('migrate:rollback');
        $this->comment("migrate");
        Artisan::call('migrate');
        $this->info("done successfully!✔️");

//query
        $this->question("run query test");

//user table
        $this->comment("add data in  Writer tabele➕");
        $writer = new Writer;
        $writer->status = 'active';
        $writer->first_name = 'علی';
        $writer->last_name = 'مجد یزدی';
        $writer->email = 'mz.am.busines@gmail.com';
        $writer->email_confirm = NULL;
        $writer->password = md5(12345678);
        $writer->phone = Null;
        $writer->telegram_id = 'test';
        $writer->telegram_number_id = 125489365;
        $writer->telegram_confirm = Null;
        $writer->confirmation_manager_id = 5;
        $writer->starterd_at = now();
        $writer->latest_activists_at = now();
        $writer->deleted_at = Null;
        $writer->save();


        $this->comment("add data in  user_validations tabele➕");
        $seed = str_split(
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            .'abcdefghijklmnopqrstuvwxyz'
            .'*/-!@#$%^&*+=-_|\)('
            .'0123456789');
            shuffle($seed);
            $rand = '';
            foreach (array_rand($seed, 80) as $k) $rand .= $seed[$k];

        $UserValidation = new UserValidation;
        $UserValidation->user_id = 1;
        $UserValidation->tabele_name="Writer";
        $UserValidation->token="$rand";
        $UserValidation->ended_at=Carbon::now()->addDays(30);
        $UserValidation->save();






        // $start = new Awards;
        // $start->name = '-0/6 % تخفیف';
        // $start->delivery_in_time = 20160;
        // $start->time_open=Carbon::now();
        // $start->number = 6;
        // $start->number_left= 6;
        // $start->type = 'discount';
        // $start->save();






        $this->info("v=1.1.14 ★");


    }
}
