<?php

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
Route::group(['middleware'=> ['web']],function(){
	//Admin
    Route::prefix('admin')->group(function() {
 	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('/profile', 'AdminController@profile')->name('admin.profile');
	Route::get('/registrarIndex','AdminController@registrarIndex')->name('registrarIndex');
	Route::get('/professorIndex','AdminController@professorIndex')->name('professorIndex');
	Route::get('/registrarShow/{id}','AdminController@registrarShow')->name('registrarShow');
	Route::get('/professorShow/{id}','AdminController@professorShow')->name('professorShow');
	Route::get('/professorEdit/{id}','AdminController@professorEdit')->name('professorEdit');
	Route::get('/approvalIndex','AdminController@approvalIndex')->name('professorsApprovalIndex');


    });
    //endAdmin

    //Student
    Route::prefix('student')->group(function() {
 	Route::get('/login','Auth\StudentLoginController@showLoginForm')->name('student.login');
	Route::post('/login','Auth\StudentLoginController@login')->name('student.login.submit');
	Route::get('/register', 'Auth\StudentRegisterController@create')->name('student.registration');
    Route::post('/registered','Auth\StudentRegisterController@register')->name('student.register.submit');
    Route::post('/logout','Auth\StudentLoginController@logout')->name('student.logout');    
    Route::get('/dashboard', 'StudentDashboardController@index')->name('student.dashboard');
    Route::get('/profile', 'StudentDashboardController@profile')->name('student.profile');
    Route::get('/subjects','StudentDashboardController@subjects')->name('student.subjects');
    Route::get('/schedule','StudentDashboardController@schedule')->name('student.schedule');
    Route::get('/grades','StudentDashboardController@grades')->name('student.grades');
    Route::get('/files','StudentDashboardController@files')->name('student.files');  
 	Route::get('editprofile','StudentDashboardController@editProfile')->name('student.editProfile');  
    Route::put('profileupdate/{id}','StudentDashboardController@profileupdate')->name('student.profileUpdate');  

	 });
    //endStudent

    //Professor
    Route::prefix('professor')->group(function() {
 	Route::get('/login','Auth\ProfessorLoginController@showLoginForm')->name('professor.login');
	Route::post('/login','Auth\ProfessorLoginController@login')->name('professor.login.submit');
	Route::get('/dashboard', 'ProfessorDashboardController@index')->name('professor.dashboard');
	Route::get('/profile', 'ProfessorDashboardController@profile')->name('professor.profile');
	Route::get('/register', 'Auth\ProfessorRegisterController@create')->name('professor.registration');
    Route::post('/registered','Auth\ProfessorRegisterController@register')->name('professor.register.submit');
    Route::post('/logout','Auth\ProfessorLoginController@logout')->name('professor.logout');
    Route::get('/indexClassroomsAssign', 'ProfessorDashboardController@indexClassroom')->name('professor.indexClassroomsAssign');
    Route::get('/classroomsAssign/show/{id}','ProfessorDashboardController@classroomShow')->name('classroomsAssign.show');
    Route::get('/gradeIndex','ProfessorDashboardController@gradeIndex')->name('professor.gradeIndex');
    Route::get('/individualClassroom/{id}', 'ProfessorDashboardController@individualClassroom')->name('individual.classroom');
    
    Route::get('/filesIndex','ProfessorDashboardController@fileIndex')->name('professor.fileIndex');
    Route::post('/fileupload/{id}','ProfessorDashboardController@fileUpload')->name('professor.fileupload');
    Route::get('upload/{id}','ProfessorDashboardController@upload')->name('uploadIndex');
  	Route::delete('/deleteupload/{id}','ProfessorDashboardController@fileDelete')->name('professor.deleteupload');
  	 Route::get('/schedule','ProfessorDashboardController@schedule')->name('professor.schedule');
 	Route::get('editprofile','ProfessorDashboardController@editProfile')->name('professor.editProfile');  
    Route::put('profileupdate/{id}','ProfessorDashboardController@profileupdate')->name('professor.profileUpdate'); 

	 });
    //endProfessor  

    //Registrar
    Route::prefix('registrar')->group(function(){
    Route::get('/login','Auth\RegistrarLoginController@showLoginForm')->name('registrar.login');
    Route::post('/login','Auth\RegistrarLoginController@login')->name('registrar.login.submit');
    Route::get('/dashboard','RegistrarDashboardController@index')->name('registrar.dashboard');
    Route::get('/profile','RegistrarDashboardController@profile')->name('registrar.profile');
    Route::get('/register','Auth\RegistrarRegisterController@create')->name('registrar.registration');
	Route::post('/registered','Auth\RegistrarRegisterController@register')->name('registrar.register.submit');
	Route::post('/logout','Auth\RegistrarLoginController@logout')->name('registrar.logout');
	Route::get('/students','RegistrarDashboardController@studentIndex')->name('registrar.studentIndex');
	Route::get('/studentShow/{id}','RegistrarDashboardController@studentShow')->name('registrar.studentShow');
	Route::get('/approval/{id}','RegistrarDashboardController@approval')->name('studentsApproval');
	Route::put('/approved/{id}','RegistrarDashboardController@approved')->name('studentsApproved');
	Route::delete('/denied/{id}','RegistrarDashboardController@denied')->name('studentsDenied');	
	Route::get('/approvalIndex','RegistrarDashboardController@approvalIndex')->name('studentsApprovalIndex');

     });

    Route::post('logout','Auth\LoginController@logout');
	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
	//Course
	Route::resource('courses','CourseController');	
	//endCourse

	//Subject
	Route::resource('subjects','SubjectController');
	//endSubject


	//assign this for Class
	Route::resource('classrooms','ClassroomController');
	Route::resource('assigns','AssignController');
	Route::resource('rooms','RoomController');
	//Socials
	Route::resource('events','EventController');
	Route::get('showEvent/{id}','PagesController@eventSingle')->name('event.single');
	Route::get('eventMore','PagesController@eventMore')->name('event.more');

	Route::resource('news','NewsController');
	Route::get('showNews/{id}','PagesController@newsSingle')->name('news.single');
	Route::get('newsMore','PagesController@newsMore')->name('news.more');

	Route::resource('announcements','AnnouncementController');
	Route::post('deleteAnnouncement','AnnouncementController@deleteAnnouncement');
	Route::get('showAnnouncement/{id}','PagesController@announcementSingle')->name('announcement.single');
	Route::get('announcementMore','PagesController@announcementMore')->name('announcement.more');
	//EEnd Socials
	
	Route::get('/','PagesController@getIndex'); 
	Route::get('/home','PagesController@getIndex')->name('home');
	Route::get('/choiceUser','PagesController@choiceUser')->name('choice.user');


	Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');
	Route::post('import-file', 'ExcelController@importFile')->name('import.file');
	Route::get('export-file', 'SubjectController@exportFile')->name('export.file');
	
	Route::get('export-file/{id}', 'ProfessorDashboardController@exportAssign')->name('professor.exportAssign');
	/*Route::get('students','RegistrarDashboardController@studentIndex')->name('students.index');*/
	Route::post('addGrade','ProfessorDashboardController@addGrade')->name('addGrade.Student');
	Route::post('updateGrade','ProfessorDashboardController@updateGrade')->name('updateGrade.Student');
	
	Route::get('/userimage/{filename}','ImageController@getUserImage')->name('user.image');
	Route::get('/socialsimage/{filename}','ImageController@getsocialsImage')->name('socials.image');
	/*Route::get('/socialsImage/{filename}','PagesController@getsocialsImage')->name('socials.image');*/

	Route::get('upload', 'FilesController@upload');
	Route::get('downloadfile/{filename}','FilesController@downloadFile')->name('download.file');
	Route::post('/handleUpload','FilesController@handleUpload')->name('handleUpload');
	/*AJAX*/
	Route::get('allsubjects','SubjectController@allSubjects')->name('allsubjects');
	Route::get('allcourses','CourseController@allCourses')->name('allcourses');
});

