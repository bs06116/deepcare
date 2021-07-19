<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Route;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function store(Request $request)
    {

        try {
            $phone =  $request->phone;
            $language =  $request->language;
            $frm_date =  $request->frm_date;
            $file_number =  $request->file_number;
            $gender =  $request->gender;
            $age =  $request->age;
            $full_name =  $request->full_name;
            $mobile =  $request->mobile;
            $function =  $request->function;
            $social_status =  $request->social_status;
            $other_phone =  $request->other_phone;
            $closest_name =  $request->closest_name;
            $about_clinic =  $request->about_clinic;
            $lang =  $request->lang;

            $u = new User;
            $u->phone = $phone;
            $u->language = $language;
            $u->frm_date = $frm_date;
            $u->file_number = $file_number;
            $u->age = $age;
            $u->gender = $gender;
            $u->full_name = $full_name;
            $u->mobile = $mobile;
            $u->social_status = $social_status;
            $u->function = $function;
            $u->other_phone = $other_phone;
            $u->closest_name = $closest_name;
            $u->about_clinic = $about_clinic;
            $u->save();
            $userQuestionAnswer = [];
            for ($i = 1; $i <= 25; $i++) {
                $question = 'question_' . $i;
                $anwser = $request->input('question_' . $i);
                $userQuestionAnswer[] = array('question' => $question,'discription'=>$this->questionDescription($question),
                 'answer' => $anwser, 'user_id' => $u->id);
            }
            $finalResult = DB::table('question_answer')->insert($userQuestionAnswer);
            //$this->sendMessage('Deep care Center',$phone);
            if($lang == 'en'){
                $mesasge = 'Thanks you! Form has been submited succfully.';
            }else{
                $mesasge = 'شكرا لك
                تم إرسال النموذج بنجاح';
            }
            return response()->json([
                'data' => $finalResult,
                'message' => $mesasge,
                'status' => true
            ]);
        } catch (\Exception $e) {
            // Anything that went wrong
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    private function sendMessage($message, $recipients)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            '+923076600002',
            ['from' => $twilio_number, 'body' => $message]
        );
    }
    private function questionDescription($question)
    {
        $message = array('question_1'=>'Have you ever had a problem during or after dental treatment?',
                         'question_2'=>'Have you ever had or are currently suffering from?',
                         'question_3'=>'Heart disease',
                         'question_4'=>'high blood pressure',
                         'question_5'=>'Low blood pressure',
                         'question_6'=>'rheumatic fever',
                         'question_7'=>'Anemia',
                         'question_8'=>'Hematology',
                         'question_9'=>'Yellow thyroid disease ',
                         'question_10'=>'Hepatitis',
                         'question_11'=>'Diabetes',
                         'question_12'=>'Any member of the family had diabetes?',
                         'question_13'=>'Asthma tuberculosis ',
                         'question_14'=>'Difficulty breathing',
                         'question_15'=>'Kidney disease',
                         'question_16'=>'convulsion',
                         'question_17'=>'epilepsy',
                         'question_18'=>'fainting',
                         'question_19'=>'Do you have an allergy to insulin? ',
                         'question_20'=>'Are you allergic to medicines',
                         'question_21'=>'Are you currently using valleys?',
                         'question_22'=>'Are you pregnant?',
                         'question_23'=>'Have you ever done laser work?',
                         'question_24'=>'Do you have a skin allergy',
                         'question_25'=>'Did you get a tan?' );
        return $message[$question];
    }
}
