<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Auth;
use Session;
use App\InterviewSchedule;
use App\Websitesetting;
use App\Mail\CandidateList;
use Mail;


class InterviewscheduleCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'interviewschedule:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
                        /////////////// mail////////////////
        
     
     
        $today = date('Y-m-d');
        $getWebInfo = Websitesetting::select('website_name', 'website_logo', 'email', 'address', 'mobile')->first();
        $userList = InterviewSchedule::where('interview_date',$today)->selectRaw('user_id')->groupBy('user_id')->get();
        $list = array();  
        $candidateList = array();  
        $email = '';
        foreach ($userList as $key=>$userId){
            $user_id= $userId->user_id;
            $interviewList = InterviewSchedule::where('interview_date',$today)->where('user_id',$user_id)->get();
            $list[] = $interviewList;
        }
        
        
         $content = [
    		'title'             => 'Today Interview List', 
                'address'           => $getWebInfo->address,
                'mobile'            => $getWebInfo->mobile,
                'email'            => $getWebInfo->email,
                'website_name'      => $getWebInfo->website_name,
                'website_logo'      => $getWebInfo->website_logo,
    		];
        
             // user loop
              foreach($list as $k1=>$lists){
                  // create interview list for candidate
                foreach($lists as $k2=>$interview){
                    $candidateList[]= $interview;
                    $email = $interview->user->email;
                }
                $content['candidateList'] = $candidateList;
                $employeeMail = array('manish@nrt.co.in');
                //$employeeMail = array($email);
                $mail = Mail::to($employeeMail)->bcc('manish@nrt.co.in')->send(new CandidateList($content) );
                $candidateList = array();
              }
//        if (count(Mail::failures()) > 0) {
//            //echo "There was one or more failures. They were: <br />";
//            foreach (Mail::failures as $email_address) {
//               // echo " - $email_address <br />";
//            }
//        } else {
//           // echo "No errors, all sent successfully!";
//        }
        /////////////// mail////////////////
        $this->info('InterviewscheduleCron:cron Cummand Run successfully!');
    }
}
