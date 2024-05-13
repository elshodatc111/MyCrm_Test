<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TecherController;

Auth::routes(['verify' => true]);

Route::get('/', [OnlineController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/profel', [HomeController::class, 'profel'])->name('profel');
Route::get('/profel/show/{id}', [HomeController::class, 'show'])->name('profel_show');
Route::get('/profel/show/videos/{mavzu_id}', [HomeController::class, 'showvideo'])->name('profel_show_video');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');

Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/cours/show/{id}', [CoursController::class, 'show'])->name('cours_show');
Route::get('/cours/show/pay/{id}', [CoursController::class, 'coursPay'])->name('cours_show_pay');

Route::get('/book', [BookController::class, 'index'])->name('book');

Route::get('/techer', [TecherController::class, 'index'])->name('techer');


Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

Route::get('/admin/cours', [HomeController::class, 'AdminCours'])->name('AdminCours');
Route::get('/admin/cours/update/{id}', [HomeController::class, 'AdminCoursUpdate'])->name('AdminCoursUpdate');
Route::post('/admin/cours/create', [HomeController::class, 'AdminCoursCreate'])->name('AdminCoursCreate');
Route::put('/admin/cours/update/{id}', [HomeController::class, 'AdminCoursUpdates'])->name('AdminCoursUpdates');
Route::get('/admin/cours/delete/{id}', [HomeController::class, 'AdminCoursDelete'])->name('AdminCoursDelete');

Route::get('/admin/cours/show/{id}', [HomeController::class, 'adminShowCours'])->name('adminShowCours');
Route::get('/admin/cours/mavzu/updates/{id}', [HomeController::class, 'adminShowMavzuUpdate'])->name('adminShowMavzuUpdate');
Route::post('/admin/cours/mavzu/create', [HomeController::class, 'adminMavzuCreate'])->name('adminMavzuCreate');
Route::put('/admin/cours/mavzu/create/update', [HomeController::class, 'adminMavzuCreateUpdate'])->name('adminMavzuCreateUpdate');
Route::get('/admin/cours/mavzu/create/delete/{id}', [HomeController::class, 'adminMavzuCreateUpdateDelete'])->name('adminMavzuCreateUpdateDelete');

Route::get('/admin/book', [HomeController::class, 'AdminBook'])->name('AdminBook');
Route::post('/admin/book/create', [HomeController::class, 'AdminBookCreate'])->name('AdminBookCreate');
Route::get('/admin/book/delete/{id}', [HomeController::class, 'AdminBookDelete'])->name('AdminBookDelete');

Route::get('/admin/techer', [HomeController::class, 'AdminTecher'])->name('AdminTecher');
Route::get('/admin/techer/delete/{id}', [HomeController::class, 'AdminTecherDelete'])->name('AdminTecherDelete');
Route::post('/admin/techer/create', [HomeController::class, 'AdminTecherCreate'])->name('AdminTecherCreate');

Route::get('/admin/user', [HomeController::class, 'AdminUser'])->name('AdminUser');

Route::get('/admin/contact', [HomeController::class, 'AdminContact'])->name('AdminContact');
Route::get('/admin/contact/del/{id}', [HomeController::class, 'AdminContactDel'])->name('AdminContactDel');

Route::post('/catigory/update', [HomeController::class, 'CatigoryUpdate'])->name('catigory_update');

Route::post('/setting/update', [HomeController::class, 'SettingUpdate'])->name('setting_update');
=======
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\SuperAdmin\KabinetController;
use App\Http\Controllers\SuperAdmin\HodimlarController;
use App\Http\Controllers\SuperAdmin\FilialController;
use App\Http\Controllers\SuperAdmin\SuperMoliyaController;
use App\Http\Controllers\SuperAdmin\SuperReportController;
use App\Http\Controllers\SuperAdmin\SuperStatistikaController;
use App\Http\Controllers\SuperAdmin\TestController;
use App\Http\Controllers\SuperAdmin\SuperElonController;
use App\Http\Controllers\SuperAdmin\SuperAdminTecherController;
use App\Http\Controllers\SuperAdmin\ReportControlle;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HodimController;
use App\Http\Controllers\Admin\AdminGuruhController;
use App\Http\Controllers\Admin\AdminTecherController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminKabinetController;
use App\Http\Controllers\Admin\MoliyaController;
use App\Http\Controllers\Techer\TecherController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserGuruhController;
use App\Http\Controllers\User\UserPaymartController;
use App\Http\Controllers\User\UserContactController;
use App\Http\Controllers\User\PaymeController; 
use App\Http\Controllers\SettingController; 
Route::get('/', [HomeController::class, 'index']);

Auth::routes();
 
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/setting', [SettingController::class, 'update'])->name('settingupdate');
Route::post('/sms/plus', [SettingController::class, 'smsplus'])->name('settingsmsplus');

Route::get('/Superadmin/index', [SuperAdminController::class, 'index'])->name('SuperAdmin');
Route::get('/Superadmin/statistika', [SuperAdminController::class, 'statistika'])->name('statistika');

Route::get('/Superadmin/hisobot/all/web/index', [ReportControlle::class, 'index'])->name('hisobot');
Route::post('/Superadmin/hisobot/all/show', [ReportControlle::class, 'show'])->name('hisobotShow');

Route::get('/Superadmin/Testing', [TestController::class, 'index'])->name('superAdminTesting');
Route::get('/Superadmin/Testing/show/{id}', [TestController::class, 'show'])->name('superAdminTestingShow');
Route::post('/Superadmin/Testing/create', [TestController::class, 'create'])->name('superAdminTestingCreate');
Route::get('/Superadmin/Testing/delete/{id}', [TestController::class, 'delete'])->name('superAdminTestingDelete');

Route::get('/Superadmin/filial', [FilialController::class, 'filial'])->name('filial');
Route::get('/Superadmin/filial/show/{id}', [FilialController::class, 'show'])->name('filial.show');
Route::post('/Superadmin/filial/update', [FilialController::class, 'filialUpdate'])->name('filialUpdate');
Route::post('/Superadmin/filial/delete', [FilialController::class, 'filialDelete'])->name('filialDelete');
Route::post('/Superadmin/filial/settimg/sms', [FilialController::class, 'filialSettimgSMS'])->name('filialSettimgSMS');
Route::get('/Superadmin/filailCrm/{id}', [FilialController::class, 'filailCrm'])->name('filailCrm');
Route::get('/Superadmin/room/delete/{id}', [FilialController::class, 'roomdelete'])->name('roomdelete');
Route::get('/Superadmin/setting/tulov/deleted/{id}', [FilialController::class, 'tulovSettingDelete'])->name('tulovSettingDelete');
Route::post('/Superadmin/setting/tulov/create', [FilialController::class, 'tulovSettingCreate'])->name('tulovSettingCreate');
Route::post('/Superadmin/setting/chegirmaday/update', [FilialController::class, 'chegirmaDayUpadte'])->name('chegirmaDayUpadte');
Route::post('/Superadmin/room/create', [FilialController::class, 'roomcreate'])->name('roomcreate');
Route::post('/Superadmin/filial', [FilialController::class, 'filialcreate'])->name('filialcreate');
Route::post('/Superadmin/cours/create', [FilialController::class, 'filialCoursCreate'])->name('filialCoursCreate');
Route::get('/Superadmin/cours/delete/{id}', [FilialController::class, 'filialCoursDelete'])->name('filialCoursDelete');

Route::POST('/Superadmin/moliya/xarajat', [SuperMoliyaController::class, 'xarajat'])->name('SuperAdminMoliyaXarajay');
Route::POST('/Superadmin/moliya/kassaga', [SuperMoliyaController::class, 'kassaga'])->name('SuperAdminMoliyaKassaga');

Route::get('/Superadmin/techer/tulovlar', [SuperAdminTecherController::class, 'index'])->name('SuperAdminTecher');

Route::get('/Superadmin/statistika/month', [SuperStatistikaController::class, 'statistikaMonth'])->name('statistikaMonth');
Route::get('/Superadmin/statistika/{id}', [SuperStatistikaController::class, 'index'])->name('SuperAdminStatistika');
Route::get('/Superadmin/statistika/kun/{id}', [SuperStatistikaController::class, 'statistikaKun'])->name('statistikaKun');

Route::get('/Superadmin/elon/techer', [SuperElonController::class, 'techer'])->name('SuperAdminElonTecher');
Route::get('/Superadmin/elon/student', [SuperElonController::class, 'student'])->name('SuperAdminElonStudent');

Route::get('/Superadmin/hodimlar', [HodimlarController::class, 'hodimlar'])->name('hodimlar');
Route::post('/Superadmin/hodimlar', [HodimlarController::class, 'hodimCreate'])->name('hodimCreate');
Route::get('/Superadmin/del/{id}', [HodimlarController::class, 'HodimDeletes'])->name('HodimDeletes');
Route::get('/Superadmin/pass/{id}', [HodimlarController::class, 'HodimPassword'])->name('HodimPassword');

Route::get('/Superadmin/kabinet', [KabinetController::class, 'kabinet'])->name('kabinet');
Route::put('/Superadmin/kabinet/{id}', [KabinetController::class, 'kabinetUpdate'])->name('kabinetUpdate');
Route::put('/Superadmin/kabinet/password/{id}', [KabinetController::class, 'kabinetPassword'])->name('kabinetPassword');

Route::get('/Admin/index', [AdminController::class, 'index'])->name('Admin');
Route::get('/Admin/eslatma', [AdminController::class, 'eslatmalar'])->name('AdminEslatma');
Route::get('/Admin/eslatma/arxiv/{id}', [AdminController::class, 'eslatmaarxiv'])->name('AdminEslatmaArxiv');
Route::get('/Admin/murojatlar', [AdminController::class, 'murojatlar'])->name('AdminMurojarlar');
Route::post('/Admin/murojatlar', [AdminController::class, 'murojatlarCreate'])->name('AdminMurojarlarPost');
Route::get('/Admin/murojatlar/show/{id}', [AdminController::class, 'murojatlarShow'])->name('AdminMurojarlarShow');
Route::get('/Admin/tkun', [AdminController::class, 'tkun'])->name('AdminTKun');
Route::get('/Admin/elonlar', [AdminController::class, 'elonlar'])->name('AdminElonlar');

Route::get('/Admin/student/index', [AdminStudentController::class, 'index'])->name('Student');
Route::get('/Admin/student/index/{id}', [AdminStudentController::class, 'show'])->name('StudentShow');
Route::get('/Admin/student/debit', [AdminStudentController::class, 'debit'])->name('StudentQarzdorlar');
Route::get('/Admin/student/pays', [AdminStudentController::class, 'pays'])->name('StudentTulovlar');
Route::get('/Admin/student/create', [AdminStudentController::class, 'create'])->name('StudentCreate');
Route::post('/Admin/student/story', [AdminStudentController::class, 'store'])->name('StudentCreateStore');
Route::post('/Admin/student/update', [AdminStudentController::class, 'update'])->name('AdminUserUpdate');
Route::post('/Admin/student/password/update', [AdminStudentController::class, 'passwordUpdate'])->name('AdminUserPasswordUpdate');
Route::post('/Admin/student/guruh/plus', [AdminStudentController::class, 'guruhPlus'])->name('AdminUserGuruhPlus');
Route::post('/Admin/student/send/messege', [AdminStudentController::class, 'sendMessege'])->name('AdminUserSendMessege');
Route::post('/Admin/student/pay', [AdminStudentController::class, 'tulov'])->name('AdminUserTulov');
Route::post('/Admin/student/pay/qaytar', [AdminStudentController::class, 'tulovQaytar'])->name('AdminUserTulovQaytar');
Route::post('/Admin/student/admin/chegirma', [AdminStudentController::class, 'adminChegirmaMax'])->name('AdminUserAdminChegirma');
Route::post('/Admin/student/comment', [AdminStudentController::class, 'comment'])->name('AdminUserComment');
Route::get('/Admin/student/pay/delete/{id}', [AdminStudentController::class, 'tulovDelete'])->name('AdminUserTulovDelete');

Route::get('/Admin/moliya', [MoliyaController::class, 'index'])->name('AdminMoliya');
Route::post('/Admin/moliya/chiqim', [MoliyaController::class, 'chiqim'])->name('AdminMoliyaCHiqim');
Route::post('/Admin/moliya/chiqim/delete', [MoliyaController::class, 'chiqimdelete'])->name('AdminMoliyaCHiqimDelete');
Route::post('/Admin/moliya/chiqim/tasdiqlandi', [MoliyaController::class, 'chiqimtasdiq'])->name('AdminMoliyaCHiqimTasdiq');
Route::post('/Admin/moliya/xarajat', [MoliyaController::class, 'xarajat'])->name('AdminMoliyaXarajat');
Route::post('/Admin/moliya/xarajat/delete', [MoliyaController::class, 'xarajatdelete'])->name('AdminMoliyaXarajatDelete');
Route::post('/Admin/moliya/xarajat/tasdiqlandi', [MoliyaController::class, 'xarajattasdiq'])->name('AdminMoliyaXarajatTasdiq');

Route::get('/Admin/guruh', [AdminGuruhController::class, 'index'])->name('AdminGuruh');
Route::post('/Admin/guruh/updates', [AdminGuruhController::class, 'showUpdatestGuruh'])->name('showUpdatestGuruh');
Route::post('/Admin/guruh/delete', [AdminGuruhController::class, 'deletGuruh'])->name('AdminGuruhDelete');
Route::get('/Admin/guruh/show/{id}', [AdminGuruhController::class, 'show'])->name('AdminGuruhShow');
Route::get('/Admin/guruh/end', [AdminGuruhController::class, 'endGuruh'])->name('AdminGuruhEnd');
Route::get('/Admin/guruh/create', [AdminGuruhController::class, 'CreateGuruh'])->name('AdminGuruhCreate');
Route::post('/Admin/guruh/create1', [AdminGuruhController::class, 'CreateGuruh1'])->name('AdminGuruhCreate1');
Route::post('/Admin/guruh/create2', [AdminGuruhController::class, 'CreateGuruh2'])->name('AdminGuruhCreate2');
Route::put('/Admin/guruh/create/next', [AdminGuruhController::class, 'CreateGuruhNext'])->name('CreateGuruhNext');
Route::post('/Admin/guruh/create/next2', [AdminGuruhController::class, 'CreateGuruhNext2'])->name('CreateGuruhNext2');
Route::post('/Admin/guruh/deleteUser', [AdminGuruhController::class, 'guruhDelUser'])->name('guruhDeletesUserss');
Route::post('/Admin/guruh/user/sendMessege', [AdminGuruhController::class, 'userSendMessege'])->name('userSendMessege');
Route::post('/Admin/guruh/debit/sendMessege', [AdminGuruhController::class, 'debitSendMessege'])->name('debitSendMessege');

Route::get('/Admin/admin/techer', [AdminTecherController::class, 'index'])->name('AdminTecher');
Route::post('/Admin/admin/techer', [AdminTecherController::class, 'techerCreate'])->name('AdminTecherCreate');
Route::post('/Admin/admin/techer/update', [AdminTecherController::class, 'techerUpdate'])->name('AdminTecherUpdate');
Route::post('/Admin/admin/techer/pay', [AdminTecherController::class, 'TecherPay'])->name('AdminTecherPay');
Route::get('/Admin/admin/techer/pay/del/{id}', [AdminTecherController::class, 'TecherPayDelet'])->name('AdminTecherPayDel');
Route::post('/Admin/admin/techer/update/password', [AdminTecherController::class, 'techerUpdatePassword'])->name('AdminTecherUpdatePassword');
Route::get('/Admin/admin/techer/show/{id}', [AdminTecherController::class, 'techerShow'])->name('AdminTecherShow');
Route::get('/Admin/admin/techer/delete/{id}', [AdminTecherController::class, 'techerDelete'])->name('AdminTecherDelete');

Route::get('/Admin/hodim/kabinet', [AdminKabinetController::class, 'kabinet'])->name('adminkabinet');
Route::post('/Admin/hodim/kabinet/update', [AdminKabinetController::class, 'update'])->name('adminkabinetupdate');
Route::post('/Admin/hodim/kabinet/passwupdate', [AdminKabinetController::class, 'passwupdate'])->name('adminkabinetpasswupdate');

Route::get('/Admin/hodim/', [HodimController::class, 'adminHodimlar'])->name('adminHodimlar');
Route::get('/Admin/hodim/{id}', [HodimController::class, 'adminHodim'])->name('adminHodim');
Route::get('/Admin/hodim/delete/{id}', [HodimController::class, 'adminHodimDelete'])->name('adminHodimDelete');
Route::post('/Admin/hodim/create', [HodimController::class, 'adminCreateHodimlar'])->name('adminCreateHodimlar');
Route::post('/Admin/hodim/clear/statistika', [HodimController::class, 'adminClearHodimlarStatistik'])->name('adminClearHodimlarStatistik');
Route::post('/Admin/hodim/update/user', [HodimController::class, 'adminUpdateHodimlarUser'])->name('adminUpdateHodimlarUser');
Route::post('/Admin/hodim/update/password', [HodimController::class, 'adminUpdateHodimlarPassword'])->name('adminUpdateHodimlarPassword');
Route::post('/Admin/hodim/pay/ishhaqi', [HodimController::class, 'adminPayHodimlarIshHaqi'])->name('adminPayHodimlarIshHaqi');

Route::get('/Techer/index', [TecherController::class, 'index'])->name('Techer');
Route::get('/Techer/guruhlar', [TecherController::class, 'Guruhlar'])->name('TGuruhlar');
Route::get('/Techer/guruh/{id}', [TecherController::class, 'show'])->name('TGuruhShow');
Route::post('/Techer/guruh/davomat', [TecherController::class, 'davomat'])->name('TGuruhDavomat');
Route::get('/Techer/tulovlar', [TecherController::class, 'Tolovlar'])->name('TTolovlar');
Route::get('/Techer/kabinet', [TecherController::class, 'Kabinet'])->name('TKabinet');
Route::post('/Techer/kabinet/update', [TecherController::class, 'KabinetTUpdate'])->name('KabinetTUpdate');
Route::post('/Techer/kabinet/update/password', [TecherController::class, 'KabinetTUpdatePassword'])->name('KabinetTUpdatePassword');

Route::get('/User/index', [UserController::class, 'index'])->name('User');
Route::get('/User/kabinet', [UserController::class, 'Kabinet'])->name('Kabinet');
Route::post('/User/kabinet/update', [UserController::class, 'KabinetUpdate'])->name('KabinetUpdate');
Route::post('/User/kabinet/password/update', [UserController::class, 'KabinetUpdatePassw'])->name('KabinetUpdatePassw');

Route::get('/User/guruhlar', [UserGuruhController::class, 'Guruhlar'])->name('Guruhlar');
Route::get('/User/guruhlar/show/{id}', [UserGuruhController::class, 'show'])->name('GuruhShow');
Route::get('/User/guruhlar/test/show/{id}', [UserGuruhController::class, 'test'])->name('GuruhShowTest');
Route::post('/User/guruhlar/test/check', [UserGuruhController::class, 'check'])->name('GuruhShowTestCheck');

Route::get('/User/tolovlar', [UserPaymartController::class, 'Tolovlar'])->name('Tolovlar');
Route::get('/User/tolov/{summa}', [UserPaymartController::class, 'pay'])->name('Tolov');
Route::post('/User/tolov', [UserPaymartController::class, 'pay2'])->name('Tolov');

Route::get('/User/contact', [UserContactController::class, 'Contact'])->name('Contact');
Route::post('/User/contact', [UserContactController::class, 'ContactPost'])->name('ContactPost');

Route::post('/payme', [PaymeController::class, 'index']);
>>>>>>> 5288082 (Save)
