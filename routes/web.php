<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Form;
use App\Models\Paret;
use App\Models\Report;
use App\Models\Repog;
use App\Models\Repogy;
use App\Models\Uplod;
use App\Models\Repot;
use App\Models\Customer;
use App\Models\Coze;
use App\Http\Controllers\CustomerController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('all', function(){
    $users = User::all();
    return Inertia::render('AdAll', [
        'users' => $users,
    ]);
});

Route::get('dash', function(){
    $upers = User::all();
    return Inertia::render('AdParEmail', [
        'upers' => $upers,
    ]);
});

Route::get('reg', function(){
    if(Auth::id()){
        return Inertia::render('AdRegiste');
    }else{
        return redirect('login');
    }
   
})->name('reg');

Route::get('uplo', function () {

    if(Auth::id()){
        $user = Auth::user();

        if ($user) {
            if ($user->usertype == '1') {
                $users = Paret::where('Class', '=', 1)->get();
            } elseif ($user->usertype == '2') {
                $users = Paret::where('Class', '=', 2)->get();
            } elseif ($user->usertype == '3') {
                $users = Paret::where('Class', '=', 3)->get();
            } elseif ($user->usertype == '4') {
                $users = Paret::where('Class', '=', 4)->get();
            } elseif ($user->usertype == '5') {
                $users = Paret::where('Class', '=', 5)->get();
            } elseif ($user->usertype == '6') {
                $users = Paret::where('Class', '=', 6)->get();
            } elseif ($user->usertype == '7') {
                $users = Paret::where('Class', '=', 7)->get();
            } elseif ($user->usertype == '10') {
                $users = Paret::all();
            }
    
            return Inertia::render('AdRepUplo', [
                'users' => $users,
            ]);
        }
    }else{
        return redirect('login');
    }
  
})->name('uplo');


Route::get('nasr', function(){
    if(Auth::id()){
        return Inertia::render('AdNasri');
    } else{
        return redirect('login');
    }
   
})->name('regi');


Route::get('reportT', function(){
    if(Auth::id()){
        $user = Auth::user();
        if ($user) {
            if ($user->usertype == '3') {
                  $users = Form::where('class', '=', 3)->get();
                return Inertia::render('AdReportTest', [
                     'users' => $users,
                ]);
            } elseif ($user->usertype == '4') {
                $users = Form::where('class', '=', 4)->get();
                return Inertia::render('AdReportTest', [
                     'users' => $users,
                ]);
            } elseif ($user->usertype == '7') {
                $users = Form::where('class', '=', 7)->get();
                return Inertia::render('AdReportTest', [
                     'users' => $users,
                ]);
            } elseif ($user->usertype == '10') {
                $users = Form::all();
                return Inertia::render('AdReportTest', [
                     'users' => $users,
                ]);
            } else {
                return Inertia::render('AdPerm');
                   }
               }
   
    } else{
        return redirect('login');
    }
    
    
    
})->name('reportT');


Route::get('reportT1', function(){
    if(Auth::id()){
        $user = Auth::user();

     if ($user) {
            if ($user->usertype == '1') {
                  $users = Form::where('class', '=', 1)->get();
                return Inertia::render('AdReportTest1', [
                     'users' => $users,
                ]);
            } elseif ($user->usertype == '2') {
                $users = Form::where('class', '=', 2)->get();
                return Inertia::render('AdReportTest1', [
                     'users' => $users,
                ]);
          } elseif ($user->usertype == '10') {
            $users = Form::all();
            return Inertia::render('AdReportTest1', [
                 'users' => $users,
            ]);
        } else {
                return Inertia::render('AdPerm');
                   }
               }
   
    }
    else{
      return redirect('login');
        }
})->name('reportT1');

Route::get('reportT5', function(){
    if(Auth::id()){
        $user = Auth::user();

        if ($user) {
               if ($user->usertype == '5') {
                     $users = Form::where('class', '=', 5)->get();
                   return Inertia::render('AdReportTest5', [
                        'users' => $users,
                   ]);
               } elseif ($user->usertype == '6') {
                   $users = Form::where('class', '=', 6)->get();
                   return Inertia::render('AdReportTest5', [
                        'users' => $users,
                   ]);
             } elseif ($user->usertype == '10') {
               $users = Form::all();
               return Inertia::render('AdReportTest5', [
                    'users' => $users,
               ]);
           } else {
                   return Inertia::render('AdPerm');
                      }
                  }
    }
    else{
      return redirect('login');
        }
})->name('reportT5');


Route::get('teacher', function(){
    if(Auth::id()){
        return Inertia::render('AdTeacherReg');
    }
    else{
      return redirect('login');
        }
})->name('teacher');











Route::get('/print_pdf/{id}', function ($id){
    $insert = Repot::find($id);
    $users = Repot::all();     

        $pdf = Pdf::loadView('pdf', compact('insert', 'users'));
        return $pdf->download('users.pdf');
})->name('print_pdf');



Route::get('/print_pdff/{id}', function ($id) {
    $insert = Repog::find($id);
    $users = Repog::where('Class', '=', 1)->get();
    $pdf = Pdf::loadView('pdff', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff');  


Route::get('/print_pdff2/{id}', function ($id) {
    $insert = Repog::find($id);
    $users = Repog::where('Class', '=', 2)->get();
    $pdf = Pdf::loadView('pdff2', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff2');  


Route::get('/print_pdff3/{id}', function ($id){
    $insert = Repot::find($id);
    $users = Repot::where('Class', '=', 3)->get();
    $pdf = Pdf::loadView('pdff3', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff3');


Route::get('/print_pdff4/{id}', function ($id){
    $insert = Repot::find($id);
    $users = Repot::where('Class', '=', 4)->get();
    $pdf = Pdf::loadView('pdff3', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff4');


Route::get('/print_pdff5/{id}', function ($id){
    $insert = Repogy::find($id);
    $users = Repogy::where('Class', '=', 5)->get();
    $pdf = Pdf::loadView('pdff5', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff5');

Route::get('/print_pdff6/{id}', function ($id){
    $insert = Repogy::find($id);
    $users = Repogy::where('Class', '=', 6)->get();
    $pdf = Pdf::loadView('pdff6', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff6');

Route::get('/print_pdff7/{id}', function ($id){
    $insert = Repot::find($id);
    $users = Repot::where('Class', '=', 7)->get();
    $pdf = Pdf::loadView('pdff7', compact('insert', 'users'));
    return $pdf->download('users.pdf');
})->name('print_pdff7');











Route::get('/users/{user}/edit', function(Form $user){
    return Inertia::render('AdEditStud',[
        'user'=>$user
    ]);
})->name('edit');
















Route::get('reportvT3', function(){
    if(Auth::id()){
        
     $user = Auth::user();
     $users=Repot::where('Class','=',3)->get(); 
     if ($user) {
         if ($user && ($user->usertype == '3' || $user->usertype == '10')) {
            return Inertia::render('AdReportViewt3', [
                'users' => $users,
            ]);
        } else {
            return Inertia::render('AdPerm');
        }
    }
    }
    else{
      return redirect('login');
        }
   
})->name('reportvT3');

Route::get('reportvT4', function(){
    if(Auth::id()){
        $user = Auth::user();
    $users=Repot::where('Class','=',4)->get(); 
    if ($user) {
        if ($user && ($user->usertype == '4' || $user->usertype == '10')) {
           return Inertia::render('AdReportViewt4', [
               'users' => $users,
           ]);
       } else {
           return Inertia::render('AdPerm');
       }
   }
    }
    else{
      return redirect('login');
        }
})->name('reportvT4');

Route::get('reportvT7', function(){
    if(Auth::id()){
        $user = Auth::user();
    $users=Repot::where('Class','=',7)->get(); 

    if ($user) {
        if ($user && ($user->usertype == '7' || $user->usertype == '10')) {
           return Inertia::render('AdReportViewt7', [
               'users' => $users,
           ]);
       } else {
           return Inertia::render('AdPerm');
       }
   }
    }
    else{
      return redirect('login');
        }
   
   
})->name('reportvT7');

Route::get('reportvT1', function(){
    if(Auth::id()){
        $user = Auth::user();
        $usery=Repog::where('Class','=',1)->get(); 
    
        if ($user) {
             if ($user && ($user->usertype == '1' || $user->usertype == '10')) {
                return Inertia::render('AdReportViewt1', [
                    'usery' => $usery,
                ]);
            } else {
                return Inertia::render('AdPerm');
            }
        }
        
    }
    else{
      return redirect('login');
        }
    
})->name('reportvT1');


Route::get('reportme', function(){
   
   
    
    return Inertia::render('AdPerm');
})->name('reportme');

Route::get('reportvT2', function(){
    if(Auth::id()){
        $user = Auth::user();
        $users=Repog::where('Class','=',2)->get(); 
    
        if ($user) {
            if ($user && ($user->usertype == '2' || $user->usertype == '10')) {
               return Inertia::render('AdReportViewt2', [
                   'users' => $users,
               ]);
           } else {
               return Inertia::render('AdPerm');
           }
       }
    }
    else{
      return redirect('login');
        }
   
})->name('reportvT2');

Route::get('reportvT5', function(){
    if(Auth::id()){
        $user = Auth::user();
    $users=Repogy::where('Class','=',5)->get(); 

    if ($user) {
        if ($user && ($user->usertype == '5' || $user->usertype == '10')) {
           return Inertia::render('AdReportViewt5', [
               'users' => $users,
           ]);
       } else {
           return Inertia::render('AdPerm');
       }
   }


    }
    else{
      return redirect('login');
        }
})->name('reportvT5');

Route::get('reportvT6', function(){
    if(Auth::id()){
        $user = Auth::user();
        $users=Repogy::where('Class','=',6)->get(); 
    
        if ($user) {
            if ($user && ($user->usertype == '6' || $user->usertype == '10')) {
               return Inertia::render('AdReportViewt6', [
                   'users' => $users,
               ]);
           } else {
               return Inertia::render('AdPerm');
           }
       }
    }
    else{
      return redirect('login');
        }
})->name('reportvT6');

Route::get('report', function(){
    if(Auth::id()){
        return Inertia::render('AdReport');
    }
    else{
      return redirect('login');
        }
   
})->name('report');

Route::get('reportv', function(){
    return Inertia::render('AdViewReport');
})->name('reportv');


Route::get('viewp', function () {
    if(Auth::id()){
        $user = Auth::user();

        if ($user) {
            $search = request()->input('search');
            $query = Paret::query();
    
            if ($user->usertype == '1') {
                $query->where('Class', '=', 1);
            } elseif ($user->usertype == '2') {
                $query->where('Class', '=', 2);
            } elseif ($user->usertype == '3') {
                $query->where('Class', '=', 3);
            } elseif ($user->usertype == '4') {
                $query->where('Class', '=', 4);
            } elseif ($user->usertype == '5') {
                $query->where('Class', '=', 5);
            } elseif ($user->usertype == '6') {
                $query->where('Class', '=', 6);
            } elseif ($user->usertype == '7') {
                $query->where('Class', '=', 7);
            } elseif ($user->usertype == '10') {
                // Add any specific logic for usertype 10 if needed
            }
    
            $parets = $query->when($search, function ($query, $search) {
                $query->where('fatherName', 'like', "%{$search}%")
                    ->orWhere('MotherName', 'like', "%{$search}%");
            })->get();
        
            $uters = $parets->map(function($uter) {
                return [
                    'id' => $uter->id,
        'fatherName' => $uter->fatherName,
        'fatherFname' => $uter->fatherFname,
        'Class' => $uter->Class,
        'email' => $uter->email,
        'fatherAddress' => $uter->fatherAddress,
        'fatherPhone' => $uter->fatherPhone,
        'fatherOccupation' => $uter->fatherOccupation,
        'fatherEducation' => $uter->fatherEducation,
        'fatherNID' => $uter->fatherNID,
        'fatherReligion' => $uter->fatherReligion,
        'fatherPhoto' => asset('photos/' . $uter->fatherPhoto),

        'MotherName' => $uter->MotherName,
        'motherCname' => $uter->motherCname,
        'motherAddress' => $uter->motherAddress,
        'motherPhone' => $uter->motherPhone,
        'motherOccupation' => $uter->motherOccupation,
        'motherEducation' => $uter->motherEducation,
        'motherNID' => $uter->motherNID,
        'motherReligion' => $uter->motherReligion,
        'motherPhoto' => asset('photos/' . $uter->motherPhoto),

        'created_at' => $uter->created_at,
        'updated_at' => $uter->updated_at,
                ];
            });
        
            return Inertia::render('AdViewp', [
                'uters' => $uters,
            ]);
        }  
    } else {
        return redirect('login');
    }
});













Route::get('nas', function () {
    if(Auth::id()){
        $user = Auth::user();

        if ($user) {
            $search = request()->input('search');
    
            $query = Form::query();
    
            if ($user->usertype == '1') {
                $query->where('class', '=', 1);
            } elseif ($user->usertype == '2') {
                $query->where('class', '=', 2);
            } elseif ($user->usertype == '3') {
                $query->where('class', '=', 3);
            } elseif ($user->usertype == '4') {
                $query->where('class', '=', 4);
            } elseif ($user->usertype == '5') {
                $query->where('class', '=', 5);
            } elseif ($user->usertype == '6') {
                $query->where('class', '=', 6);
            } elseif ($user->usertype == '7') {
                $query->where('class', '=', 7);
            } elseif ($user->usertype == '10') {
                
            }
    
            $users = $query->when($search, function ($query, $search) {
                $query->where('firstName', 'like', "%{$search}%");
            })->get();
    
            $usersData = $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'firstName' => $user->firstName,
                    'middleName' => $user->middleName,
                    'lastName' => $user->lastName,
                    'parentfirstName' => $user->parentfirstName,
                    'parentlastName' => $user->parentlastName,
                    'class' => $user->class,
                    'yearOfEntry' => $user->yearOfEntry,
                    'gender' => $user->gender,
                    'dob' => $user->dob,
                    'nationality' => $user->nationality,
                    'placeOfBirth' => $user->placeOfBirth,
                    'photo' => asset('photos/' . $user->photo),
                    'created_at' => $user->created_at,
                    'updated_at' => $user->updated_at,
                   
                ];
            });
        
    
            return Inertia::render('AdViewStud', [
                'userp' => $usersData,
            ]);
        }
    }else{
        return redirect('login');
    }
   
})->name('nas');





Route::get('hello', function(){
    $users = User::all();
    return Inertia::render('Hello', [
        ' $users' =>  $users,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        $users = User::all();
        $forms = Form::all();
       

        if ($user) {
            if ($user->usertype !== '0') {
                return Inertia::render('Dashboard', [
                    'users' => $users,
                    'forms' => $forms,
                ]);
            } else {
                return Inertia::render('Login');
            }
        }
        // You can customize this response for users without the correct usertype.
        abort(403, 'Unauthorized');
    })->name('dashboard');
});



Route::post('/Submitform', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'firstName' => 'required|string',
        'middleName' => 'nullable|string',
        'lastName' => 'required|string',
        'parentfirstName' => 'required|string',
        'parentlastName' => 'required|string',
        'class' => 'required|integer',
        'yearOfEntry' => 'required|numeric',
        'gender' => 'required|string',
        'photo' => 'required|image|mimes:jpg,jpeg,png',
        'dob' => 'required|date',// 
        'nationality' => 'required|string',
        'placeOfBirth' => 'required|string',
        // Add more validation rules as needed
    ]);
    $validatedData['photo'] = $request->file('photo')->store('photos', 'public');

 

   
      
       Form::create($validatedData);
     
   //tulia kijana   naenda masjid dakika kumi tu narud we endelea nayo.

    // Redirect or respond as needed
   
})->name('Submitform');




Route::post('/Submiteform', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'Name' => 'required|string',
        'Sex' => 'required|string',
        'Class' => 'required', // Assuming you want to ensure it's selected
        'Stream' => 'required|string',
        'EnglishScore' => 'required|string',
        'EnglishGrade' => 'required|string',
        'EnglishRank' => 'required|string',
        'EnglishOut' => 'required|string',
        'EnglishRemark' => 'required|string',
        'EnglishSubject' => 'required|string',
        'KiswahiliScore' => 'required|string',
        'KiswahiliGrade' => 'required|string',
        'KiswahiliRank' => 'required|string',
        'KiswahiliOut' => 'required|string',
        'KiswahiliRemark' => 'required|string',
        'KiswahiliSubject' => 'required|string',
        'CivicsMoralScore' => 'required|string',
        'CivicsMoralGrade' => 'required|string',
        'CivicsMoralRank' => 'required|string',
        'CivicsMoralOut' => 'required|string',
        'CivicsMoralRemark' => 'required|string',
        'CivicsMoralSubject' => 'required|string',
        'SocialStudiesScore' => 'required|string',
        'SocialStudiesGrade' => 'required|string',
        'SocialStudiesRank' => 'required|string',
        'SocialStudiesOut' => 'required|string',
        'SocialStudiesRemark' => 'required|string',
        'SocialStudiesSubject' => 'required|string',
        'ScienceTechnScore' => 'required|string',
        'ScienceTechnGrade' => 'required|string',
        'ScienceTechnRank' => 'required|string',
        'ScienceTechnOut' => 'required|string',
        'ScienceTechnRemark' => 'required|string',
        'ScienceTechnSubject' => 'required|string',
        'MathematicsScore' => 'required|string',
        'MathematicsGrade' => 'required|string',
        'MathematicsRank' => 'required|string',
        'MathematicsOut' => 'required|string',
        'MathematicsRemark' => 'required|string',
        'MathematicsSubject' => 'required|string',
        'TotalMarks' => 'required|string',
        'Average' => 'required|string',
        'Grade' => 'required|string',
        'Remark' => 'required|string',
        'Position' => 'required|string',
        'Out_of' => 'required|string',
        'Sport' => 'required|string',
        'Cooperation' => 'required|string',
        'Discipline' => 'required|string',
        'Cleanliness' => 'required|string',
        'Hardworking' => 'required|string',
        'PrincipalComment' => 'required|string',
        'ClassTeacher' => 'required|string',
        'PhoneNo' => 'required|string',
        'PrincipalName' => 'required|string',
        'PhoneN' => 'required|string',
        'Signature' => 'required|string',
        'DateOf' => 'required|string',
    ]);

    

      Report::create($validatedData);

   
})->name('Submiteform');

Route::post('/Submityformu', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'Name' => 'required|string',
        'Sex' => 'required|string',
        'Class' => 'required', // Assuming you want to ensure it's selected
        'Stream' => 'required|string',
        'NumerousScore' => 'required|string',
        'NumerousSubject' => 'required|string',
        'ReadingScore' => 'required|string',
        'ReadingSubject' => 'required|string',
        'WrittingScore' => 'required|string',
        'WrittingSubject' => 'required|string',
        'HealthCareScore' => 'required|string',
        'HealthCareSubject' => 'required|string',
        'ArtSportScore' => 'required|string',
        'ArtSportSubject' => 'required|string',
        'Sport' => 'required|string',
        'Cooperation' => 'required|string',
        'Discipline' => 'required|string',
        'Cleanliness' => 'required|string',
        'Hardworking' => 'required|string',
        'PrincipalComment' => 'required|string',
        'classteachercomment' => 'required|string',
        'ClassTeacher' => 'required|string',
        'PhoneNo' => 'required|string',
        'PrincipalName' => 'required|string',
        'PhoneN' => 'required|string',
        'photo' => 'required|image',
        'photo1' => 'required|image',
        'photo2' => 'required|image',
        'photo3' => 'required|image',
        'Signature' => 'required|string',
        'DateOf' => 'required|string',
        'dob' => 'required|date',
    ]);

   
    $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
    $validatedData['photo1'] = $request->file('photo1')->store('photos', 'public');
    $validatedData['photo2'] = $request->file('photo2')->store('photos', 'public');
    $validatedData['photo3'] = $request->file('photo3')->store('photos', 'public');

    

  
    Repog::create($validatedData);
 

    // Redirect or send a response as needed
})->name('Submityformu');



Route::post('/Submityform', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'Name' => 'required|string',
        'Sex' => 'required|string',
        'Class' => 'required', // Assuming you want to ensure it's selected
        'Stream' => 'required|string',
        'EnglishScore' => 'required|string',
        'EnglishSubject' => 'required|string',
        'KiswahiliScore' => 'required|string',
        'KiswahiliSubject' => 'required|string',
        'CivicsMoralScore' => 'required|string',
        'CivicsMoralSubject' => 'required|string',
        'SocialStudiesScore' => 'required|string',
        'SocialStudiesSubject' => 'required|string',
        'ScienceTechnScore' => 'required|string',
        'ScienceTechnSubject' => 'required|string',
        'MathematicsScore' => 'required|string',
        'MathematicsSubject' => 'required|string',
        'Sport' => 'required|string',
        'Cooperation' => 'required|string',
        'Discipline' => 'required|string',
        'Cleanliness' => 'required|string',
        'Hardworking' => 'required|string',
        'PrincipalComment' => 'required|string',
        'classteachercomment' => 'required|string',
        'ClassTeacher' => 'required|string',
        'PhoneNo' => 'required|string',
        'PrincipalName' => 'required|string',
        'PhoneN' => 'required|string',
        'photo' => 'required|image',
        'photo1' => 'required|image',
        'photo2' => 'required|image',
        'photo3' => 'required|image',
        'dob' => 'required|date',
        'DateOf' => 'required|string',
    ]);

    $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
    $validatedData['photo1'] = $request->file('photo1')->store('photos', 'public');
    $validatedData['photo2'] = $request->file('photo2')->store('photos', 'public');
    $validatedData['photo3'] = $request->file('photo3')->store('photos', 'public');
    
    


   

 
      Repot::create($validatedData);

})->name('Submityform');

Route::post('/Submityforms', function (Request $request) {
   
    $validatedData = $request->validate([
        'Name' => 'required|string',
        'Sex' => 'required|string',
        'Class' => 'required', // Assuming you want to ensure it's selected
        'Stream' => 'required|string',
        'EnglishScore' => 'required|string',
        'EnglishSubject' => 'required|string',
        'KiswahiliScore' => 'required|string',
        'KiswahiliSubject' => 'required|string',
        'CivicsMoralScore' => 'required|string',
        'CivicsMoralSubject' => 'required|string',
        'SocialStudiesScore' => 'required|string',
        'SocialStudiesSubject' => 'required|string',
        'ScienceTechnScore' => 'required|string',
        'ScienceTechnSubject' => 'required|string',
        'MathematicsScore' => 'required|string',
        'MathematicsSubject' => 'required|string',
        'vskillsScore' => 'required|string',
        'vskillsSubject' => 'required|string',
        'Sport' => 'required|string',
        'Cooperation' => 'required|string',
        'Discipline' => 'required|string',
        'Cleanliness' => 'required|string',
        'Hardworking' => 'required|string',
        'PrincipalComment' => 'required|string',
        'classteachercomment' => 'required|string',
        'ClassTeacher' => 'required|string',
        'PhoneNo' => 'required|string',
        'PrincipalName' => 'required|string',
        'PhoneN' => 'required|string',
        'photo' => 'required|image',
        'photo1' => 'required|image',
        'photo2' => 'required|image',
        'photo3' => 'required|image',
        'DateOf' => 'required|string',
        'dob' => 'required|date',
    ]);

    $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
    $validatedData['photo1'] = $request->file('photo1')->store('photos', 'public');
    $validatedData['photo2'] = $request->file('photo2')->store('photos', 'public');
    $validatedData['photo3'] = $request->file('photo3')->store('photos', 'public');
    
    


   

    // Store any necessary uploaded files and update the array
    // For example, if you have an 'upload' field, you can use:
    // $validatedData['upload'] = $request->file('upload')->store('uploads');

    // Create a new record in the database using Eloquent model
      Repogy::create($validatedData);

    // Redirect or send a response as needed
})->name('Submityforms');


Route::post('/Reportform', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'pdp' => 'required|mimes:pdf', // Assuming you are uploading an image
    ]);
       $validatedData['pdp'] = $request->file('pdp')->store('photos', 'public');
       Uplod::create($validatedData);       
})->name('Reportform');



Route::post('/Subform', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'fatherName' => 'required|string',
        'fatherFname' => 'required|string', 
        'Class' => 'required|string',
        'email' => 'required|email',
        'fatherAddress' => 'required|string',
        'fatherPhone' => 'required|string',
        'fatherOccupation' => 'required|string',
        'fatherEducation' => 'required|string',
        'fatherNID' => 'required|string',
        'fatherReligion' => 'required|string',
        'fatherPhoto' => 'required|image|mimes:jpeg,png,jpg,gif',// Assuming you are uploading an image
        'MotherName' => 'required|string',
        'motherCname' => 'required|string', // Child Name
        'motherAddress' => 'required|string',
        'motherPhone' => 'required|string',
        'motherOccupation' => 'required|string',
        'motherEducation' => 'required|string',
        'motherNID' => 'required|string',
        'motherReligion' => 'required|string',
        'motherPhoto' => 'required|image|mimes:jpeg,png,jpg,gif', // Assuming you are uploading an image
    ]);
    
       $validatedData['fatherPhoto'] = $request->file('fatherPhoto')->store('photos', 'public');
       $validatedData['motherPhoto'] = $request->file('motherPhoto')->store('photos', 'public');
       Paret::create($validatedData);       
})->name('Subform');

Route::post('/ClassTeacher', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string',
        'usertype' => 'required|string',
    ]);

    // Hash the password
    $validatedData['password'] = Hash::make($validatedData['password']);

    // Create the user with hashed password
    User::create($validatedData);
})->name('ClassTeacher');

Route::delete('userp/{user}', function(Form $user){
    
      $user->delete(); 
})->name('deleteUser');

Route::delete('usery/{user}', function(Repog $user){
    
    $user->delete(); 
})->name('deleteUsery');

Route::delete('users/{uber}', function(Repogy $uber){
    
    $uber->delete(); 
})->name('deleteUserf');


Route::delete('userk/{user}', function(Repot $user){
    
    $user->delete(); 
})->name('deleteUseri');

Route::delete('uters/{uter}', function(Paret $uter){
    
    $uter->delete(); 
})->name('deleteUse');


Route::delete('upers/{uper}', function(User $uper){
    
    $uper->delete(); 
})->name('deleteUsed');


Route::get('/userp/{user}/edit', function(Form $user){
    return Inertia::render('AdEditStud',[
        'user'=>$user
    ]);
})->name('edit');

Route::get('/uters/{uter}/edit', function(Paret $uter){
    return Inertia::render('AdEditPar',[
        'uter'=>$uter
    ]);
})->name('editUse');

Route::get('/upers/{uper}/edit', function(User $uper){
    return Inertia::render('AdEditEm',[
        'uper'=>$uper
    ]);
})->name('editUsed');

Route::put('/upers/{uper}', function(Request $request, User $uper){
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',

    ]);
  
    $uper->update($validatedData);
    

});

Route::put('/userp/{user}', function(Request $request, Form $user){
    $validatedData = $request->validate([
        'firstName' => 'required|string',
        'middleName' => 'nullable|string',
        'lastName' => 'required|string',
        'parentfirstName' => 'required|string',
        'parentlastName' => 'required|string',
        'class' => 'required|integer',
        'yearOfEntry' => 'required|numeric',
        'gender' => 'required|string',
        'dob' => 'required|date',// Assuming you are uploading an image
        'nationality' => 'required|string',
        'placeOfBirth' => 'required|string',
        // Add more validation rules as needed
    ]);
  
    $user->update($validatedData);
    

    
});

Route::put('/uters/{uter}', function(Request $request, Paret $uter){
    $validatedData = $request->validate([
        'fatherName' => 'required|string',
        'fatherFname' => 'required|string', 
        'fatherAddress' => 'required|string',
        'fatherPhone' => 'required|string',
        'fatherOccupation' => 'required|string',
        'fatherEducation' => 'required|string',
        'fatherNID' => 'required|string',
        'fatherReligion' => 'required|string', 
        'MotherName' => 'required|string',
        'motherCname' => 'required|string', 
        'motherAddress' => 'required|string',
        'motherPhone' => 'required|string',
        'motherOccupation' => 'required|string',
        'motherEducation' => 'required|string',
        'motherNID' => 'required|string',
        'motherReligion' => 'required|string',
    ]);
  
    $uter->update($validatedData);
    

    
});








Route::get('repot', function () {
    $email = Auth::user()->email;
    $repon = uplod::where('email', '=', $email)->get();

    return Inertia::render('PaRreport', [
        'repons' => $repon->map(function ($item) {
            return [
                'pdp' => asset('photos/' . $item->pdp),
            ];
        }),
    ]);
})->name('repot');












