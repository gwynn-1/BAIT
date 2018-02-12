<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ReaderEmailToken;
use App\Models\Reader;
use Illuminate\Support\Facades\DB;


class DeleteExpireSignupToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:delete-expire-signuptoken';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Signup Vefify Token';

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
        DB::beginTransaction();
        $token_email = ReaderEmailToken::whereRaw("TIMESTAMP(DATE_ADD(token_date,INTERVAL 1 DAY)) < CURRENT_TIMESTAMP")->where("is_token",0)->first();
        Reader::where("id",$token_email->id_reader)->delete();
        $token_email->delete();
        DB::commit();
        return $token_email;
    }
}
