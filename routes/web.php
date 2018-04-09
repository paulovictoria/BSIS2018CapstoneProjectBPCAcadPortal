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
	Route::put('/approved/{id}','AdminController@approved')->name('professorsApproved');
	Route::delete('/denied/{id}','AdminController@denied')->name('professorsDenied');
	//email verification
 	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('/adminRegister','Auth\AdminRegisterController@create')->name('admin.registration');
    Route::put('/enableProfessor/{id}','AdminController@enableProfessor')->name('admin.enableProfessor');
	Route::put('/disableProfessor/{id}','AdminController@disableProfessor')->name('admin.disableProfessor');

	Route::get('/adminIndex','AdminController@adminIndex')->name('admin.adminIndex');
	Route::get('/adminEdit/{id}','AdminController@adminEdit')->name('admin.adminEdit');
	Route::put('/adminUpdate/{id}','AdminController@adminUpdate')->name('admin.adminUpdate');


		//Course
	Route::resource('/courses','CourseController');	
	//endCourse

	//Subject
	Route::resource('/subjects','SubjectController');
	//endSubject
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
//email verification
	Route::post('/password/email', 'Auth\StudentForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::get('/password/reset', 'Auth\StudentForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::post('/password/reset', 'Auth\StudentResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\StudentResetPasswordController@showResetForm')->name('student.password.reset');    

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
	//email verification
	Route::post('/password/email', 'Auth\ProfessorForgotPasswordController@sendResetLinkEmail')->name('professor.password.email');
    Route::get('/password/reset', 'Auth\ProfessorForgotPasswordController@showLinkRequestForm')->name('professor.password.request');
    Route::post('/password/reset', 'Auth\ProfessorResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\ProfessorResetPasswordController@showResetForm')->name('professor.password.reset'); 

  	Route::get('/schedule','ProfessorDashboardController@schedule')->name('professor.schedule');
 	Route::get('editprofile','ProfessorDashboardController@editProfile')->name('professor.editProfile');  
    Route::put('profileupdate/{id}','ProfessorDashboardController@profileupdate')->name('professor.profileUpdate');
    //end For Personal Use

    //Classrooms Assigns
    Route::get('/indexClassroomsAssign', 'ProfessorDashboardController@indexClassroom')->name('professor.indexClassroomsAssign');
    Route::get('/classroomsAssign/show/{id}','ProfessorDashboardController@classroomShow')->name('classroomsAssign.show');
 
    //Files 
    Route::get('/filesIndex','ProfessorDashboardController@fileIndex')->name('professor.fileIndex');
    Route::post('/fileupload/{id}','ProfessorDashboardController@fileUpload')->name('professor.fileupload');
    Route::get('upload/{id}','ProfessorDashboardController@upload')->name('uploadIndex');
  	Route::delete('/deleteupload/{id}','ProfessorDashboardController@fileDelete')->name('professor.deleteupload');

    //Students Grading
    Route::get('/gradeIndex','ProfessorDashboardController@gradeIndex')->name('professor.gradeIndex');
    Route::get('/individualClassroom/{id}', 'ProfessorDashboardController@individualClassroom')->name('individual.classroom');
	Route::post('updateGrade','ProfessorDashboardController@updateGrade')->name('updateGrade.Student');


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
	

	//email verification
	Route::post('/password/email', 'Auth\RegistrarForgotPasswordController@sendResetLinkEmail')->name('registrar.password.email');
    Route::get('/password/reset', 'Auth\RegistrarForgotPasswordController@showLinkRequestForm')->name('registrar.password.request');
    Route::post('/password/reset', 'Auth\RegistrarResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\RegistrarResetPasswordController@showResetForm')->name('registrar.password.reset'); 

    //shifting of Student
    Route::get('shiftStudent/{id}','RegistrarDashboardController@shiftStudent')->name('shiftStudent');
    Route::put('shiftStore/{id}','RegistrarDashboardController@shiftStore')->name('shiftStore');

     });
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/about','HomeController@about')->name('about');



	//assign this for Class
	Route::resource('classrooms','ClassroomController');
	Route::get('classroom-excel/{id}','ClassroomController@exportExcelClassroom')->name('exportExcelClassroom');

	Route::get('byCourse/{id}','ClassroomController@byCourseCreate')->name('byCourseCreate');
	Route::resource('assigns','AssignController');
	Route::get('specialAssign','AssignController@specialCreate')->name('speacialAssign.create');
	Route::post('specialAssignStore','AssignController@specialStore')->name('speacialAssign.store');
	Route::get('byCourseAssign/{id}','AssignController@byCourseIndex')->name('byCourseAssignIndex');
	Route::get('byCourseCreate/{id}','AssignController@byCourseCreate')->name('byCourseAssignCreate');
	Route::get('adminClassroomIndex','AssignController@adminClassroomIndex')->name('adminClassroomIndex');
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

	//Professor export file
	Route::get('export-file/{id}', 'ProfessorDashboardController@exportAssign')->name('professor.exportAssign');
	Route::get('grade-excel/{id}','ProfessorDashboardController@exportExcelGrade')->name('professor.exportExcelGrade');
	Route::get('grade-pdf/{id}','ProfessorDashboardController@exportPdfGrade')->name('professor.exportPdfGrade');
	Route::post('professorSchedule','ProfessorDashboardController@exportProfessorSchedule')->name('professor.exportProfessorSchedule');



	Route::get('/userimage/{filename}','ImageController@getUserImage')->name('user.image');
	Route::get('/socialsimage/{filename}','ImageController@getsocialsImage')->name('socials.image');


	Route::get('upload', 'FilesController@upload');
	Route::get('downloadfile/{filename}','FilesController@downloadFile')->name('download.file');
	Route::post('/handleUpload','FilesController@handleUpload')->name('handleUpload');
	//This is for subject pdf
	Route::get('/downloadPDF/{id}','StudentDashboardController@downloadPDF')->name('downloadPdf');
	Route::get('/scheduledownloadPDF/{id}','StudentDashboardController@scheduledownloadPDF')->name('scheduledownloadPdf');
	Route::get('/gradedownloadPDF/{id}','StudentDashboardController@gradedownloadPDF')->name('gradedownloadPdf');

	Route::get('/studentdownloadPDF{id}','RegistrarDashboardController@studentdownloadPDF')->name('studentDownloadPDF');
	/*All of my Ajax*/
	Route::post('ajaxApproved','RegistrarDashboardController@ajaxApproved')->name('ajax.Approved');
	Route::post('ajaxDenied','RegistrarDashboardController@ajaxDenied')->name('ajax.Denied');
	/*AJAX*/


