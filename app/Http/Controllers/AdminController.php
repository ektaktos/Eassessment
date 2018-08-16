<?php

namespace App\Http\Controllers;

use App\User;
use App\QuizDetails;
use App\QuizOptions;
use App\QuizQuestions;
use App\QuizAttempts;
use App\Http\Controllers\Controller;
use App\Http\Requests\adminRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use Response;


class AdminController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

     public function admin(){
        return view('admin/index');
    }

    public function registerAdmin(){
    	return view('admin/registerAdmin');
    }

    protected function storeAdmin(adminRequest $request){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => User::DEFAULT_TYPE,
        ]);
    }

    public function registerQuiz(){
    	return view('admin/registerQuiz');
    }

    protected function storeQuiz(adminRequest $request){

    }

    public function setQuestion(){
    	return view('admin/setQuestion');
    }

    protected function storeQuestion(adminRequest $request){

    }

     public function selectAjax(Request $request)
    {
    	if($request->ajax()){
    		$data = DB::table('quiz_details')->get();
    		return Response::json($data);
    	}
    }

    public function storeAiken(Request $request){
        // Saving the uploaded file
        $name = $request->file('questionFile')->getClientOriginalName();
        // Checking if the uploaded file exists before
        if (Storage::exists('questions/'.$name)) {
          return redirect('setQuestion')->with('uploadStatus', $name . ' exists already');
        }
        
    	$path = $request->file('questionFile')->storeAs('questions',$name);
        $contents = Storage::get($path);
        $content = explode(',', $contents);

        $x = 1; $y = 2; $z = 3; $a = 4; $b = 5; $c = 6; $d = 7; $num = count($content); $quizCode = $content[0];
        $category = "Multiple Choice";
        while ($c <= $num) {

            $question = $content[$x]; //The Question Line
            $option1 = $content[$y]; //The First Option line
            $option2 = $content[$z]; // The Second Option line
            $option3 = $content[$a]; // The Third Option line
            $option4 = $content[$b]; // The Fourth Option line
            $answer = $content[$c]; // The Answer line
            $nullLine = $content[$d]; //The Empty line

            // Inserting the question details into question table
            $Question  = new QuizQuestions;
            $Question->question = $question;
            $Question->category = $category;
            $Question->quiz_code = $quizCode;
            $Question->save();

            // Select Question id of the inserted question
            $questionId = $Question::select('questionid')->where('question','=', $question)->first();
            $questionId = json_decode($questionId,true);
            $questId = $questionId['questionid'];
            // Inserting thwe options and answer in database
            $Option = new QuizOptions;
            $Option->optionA = $option1;
            $Option->optionB = $option2;
            $Option->optionC = $option3;
            $Option->optionD = $option4;
            $Option->answer = $answer;
            $Option->questionid = $questId;
            $Option->save();

            //Incrementing the variables
            $x+=7;
            $y+=7;
            $z+=7;
            $a+=7;
            $b+=7;
            $c+=7;
            $d+=7;
        }

        $questNum =  floor($num/7);
        return redirect('setQuestion')->with('uploadStatus', $questNum . ' Questions was saved');

    }
}
