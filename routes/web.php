<?php

use App\Http\Controllers\admin\AddressC;
use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminLogin;
use App\Http\Controllers\admin\AuthorC;
use App\Http\Controllers\admin\CourseCategoryC;
use App\Http\Controllers\admin\CourseModeC;
use App\Http\Controllers\admin\CourseSpecializationC;
use App\Http\Controllers\admin\DefaultSeoC;
use App\Http\Controllers\admin\DestinationC;
use App\Http\Controllers\admin\DestinationContentC;
use App\Http\Controllers\admin\DestinationGalleryC;
use App\Http\Controllers\admin\DestinationPageFaqC;
use App\Http\Controllers\admin\DestinationTabC;
use App\Http\Controllers\admin\ExamC;
use App\Http\Controllers\admin\ExamPageC;
use App\Http\Controllers\admin\ExamPageContentC;
use App\Http\Controllers\admin\ExamPageFaqC;
use App\Http\Controllers\admin\InstituteTypeC;
use App\Http\Controllers\admin\LevelC;
use App\Http\Controllers\admin\NewsC;
use App\Http\Controllers\admin\NewsCategoryC;
use App\Http\Controllers\admin\ProgramC;
use App\Http\Controllers\admin\SeoC;
use App\Http\Controllers\admin\TreatmentC;
use App\Http\Controllers\admin\ServiceContentC;
use App\Http\Controllers\admin\StudyModeC;
use App\Http\Controllers\admin\TestimonialC;
use App\Http\Controllers\admin\UniversityC;
use App\Http\Controllers\admin\UniversityGalleryC;
use App\Http\Controllers\admin\UniversityOverviewC;
use App\Http\Controllers\admin\UniversityVideoGalleryC;
use App\Http\Controllers\admin\UserC;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\sitemap\SitemapController;
use App\Http\Controllers\AboutFc;
use App\Http\Controllers\admin\BlogC;
use App\Http\Controllers\admin\BlogCategoryC;
use App\Http\Controllers\admin\DynamicPageSeoC;
use App\Http\Controllers\admin\GalleryC;
use App\Http\Controllers\admin\ServiceC;
use App\Http\Controllers\admin\UploadFilesC;
use App\Http\Controllers\AppointmentFc;
use App\Http\Controllers\BlogFc;
use App\Http\Controllers\ContactFc;
use App\Http\Controllers\FaqFc;
use App\Http\Controllers\GalleryFc;
use App\Http\Controllers\HomeFc;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ServiceFc;
use App\Http\Controllers\TreatmentFc;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Treatment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Clear Cache facade value:
Route::get('/clear-cache', function () {
  $exitCode = Artisan::call('cache:clear');
  return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
  $exitCode = Artisan::call('optimize');
  return '<h1>Reoptimized class loader</h1>';
});
Route::get('/f/optimize', function () {
  $exitCode = Artisan::call('optimize');
  return true;
});

//Route cache:
Route::get('/route-cache', function () {
  $exitCode = Artisan::call('route:cache');
  return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
  $exitCode = Artisan::call('route:clear');
  return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
  $exitCode = Artisan::call('view:clear');
  return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
  $exitCode = Artisan::call('config:cache');
  return '<h1>Clear Config cleared</h1>';
});

//For MIgrate:
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migrated</h1>';
});
Route::get('/f/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return true;
});

Route::get('/', [HomeFc::class, 'index']);
Route::get('/about-us', [AboutFc::class, 'index']);
Route::get('/faq', [FaqFc::class, 'index']);
Route::get('/gallery', [GalleryFc::class, 'index']);
Route::get('/contact-us', [ContactFc::class, 'index']);
Route::get('/thank-you', [ContactFc::class, 'thankYou']);

Route::get('/services', [ServiceFc::class, 'index']);
$services = Service::all();
foreach ($services as $row) {
  Route::get('/' . $row->service_slug, [ServiceFc::class, 'Detail']);
}

//Route::get('/blog', [BlogFc::class, 'index']);

Route::get('/appointment', [AppointmentFc::class, 'index']);

Route::get('/news', [BlogFc::class, 'index']);
Route::get('/news/{slug}', [BlogFc::class, 'blogByCategory']);
$blogs = Blog::all();
foreach ($blogs as $row) {
  Route::get('/' . $row->slug, [BlogFc::class, 'blogdetail']);
}

Route::post('inquiry/contact-us', [InquiryController::class, 'submitContactUs']);
Route::post('inquiry/appointment', [InquiryController::class, 'appointment']);

/* ADMIN ROUTES BEFORE LOGIN */
Route::middleware(['adminLoggedOut'])->group(function () {
  Route::get('/admin/login/', [AdminLogin::class, 'index']);
  Route::post('/admin/login/', [AdminLogin::class, 'login']);
});
/* ADMIN ROUTES AFTER LOGIN */
Route::middleware(['adminLoggedIn'])->group(function () {
  Route::get('/admin/logout/', function () {
    session()->forget('adminLoggedIn');
    return redirect('admin/login');
  });
  Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index']);
    Route::get('/dashboard/', [AdminDashboard::class, 'index']);
    Route::get('/profile/', [AdminDashboard::class, 'profile']);
    Route::post('/update-profile/', [AdminDashboard::class, 'updateProfile']);

    Route::prefix('/gallery')->group(function () {
      Route::get('', [GalleryC::class, 'index']);
      Route::post('/store', [GalleryC::class, 'store']);
      Route::get('/delete/{id}/', [GalleryC::class, 'delete']);
      Route::get('/update/{id}/', [GalleryC::class, 'index']);
      Route::post('/update/{id}/', [GalleryC::class, 'update']);
    });

    Route::prefix('/treatments')->group(function () {
      Route::get('', [TreatmentC::class, 'index']);
      Route::post('/store/', [TreatmentC::class, 'store']);
      Route::get('/delete/{id}/', [TreatmentC::class, 'delete']);
      Route::get('/update/{id}/', [TreatmentC::class, 'index']);
      Route::post('/update/{id}/', [TreatmentC::class, 'update']);
    });
    Route::prefix('/treatment-content')->group(function () {
      Route::get('/{service_id}/', [ServiceContentC::class, 'index']);
      Route::post('/{service_id}/store/', [ServiceContentC::class, 'store']);
      Route::get('/delete/{id}/', [ServiceContentC::class, 'delete']);
      Route::get('/{service_id}/update/{id}/', [ServiceContentC::class, 'index']);
      Route::post('/{service_id}/update/{id}/', [ServiceContentC::class, 'update']);
    });

    Route::prefix('/blog-category')->group(function () {
      Route::get('', [BlogCategoryC::class, 'index']);
      Route::post('/store', [BlogCategoryC::class, 'store']);
      Route::get('/delete/{id}', [BlogCategoryC::class, 'delete']);
      Route::get('/update/{id}', [BlogCategoryC::class, 'index']);
      Route::post('/update/{id}', [BlogCategoryC::class, 'update']);
    });
    Route::prefix('/blogs')->group(function () {
      Route::get('', [BlogC::class, 'index']);
      Route::post('/store', [BlogC::class, 'store']);
      Route::get('/delete/{id}', [BlogC::class, 'delete']);
      Route::get('/update/{id}', [BlogC::class, 'index']);
      Route::post('/update/{id}', [BlogC::class, 'update']);
    });

    Route::prefix('/services')->group(function () {
      Route::get('/', [ServiceC::class, 'index']);
      Route::post('/store/', [ServiceC::class, 'store']);
      Route::get('/delete/{id}/', [ServiceC::class, 'delete']);
      Route::get('/update/{id}/', [ServiceC::class, 'index']);
      Route::post('/update/{id}/', [ServiceC::class, 'update']);
    });

    Route::prefix('/authors')->group(function () {
      Route::get('/', [AuthorC::class, 'index']);
      Route::post('/store/', [AuthorC::class, 'store']);
      Route::get('/delete/{id}/', [AuthorC::class, 'delete']);
      Route::get('/update/{id}/', [AuthorC::class, 'index']);
      Route::post('/update/{id}/', [AuthorC::class, 'update']);
    });

    Route::prefix('/seos')->group(function () {
      Route::get('/', [SeoC::class, 'index']);
      Route::post('/store/', [SeoC::class, 'store']);
      Route::get('/delete/{id}/', [SeoC::class, 'delete']);
      Route::get('/update/{id}/', [SeoC::class, 'index']);
      Route::post('/update/{id}/', [SeoC::class, 'update']);
    });
    Route::prefix('/dynamic-page-seos')->group(function () {
      Route::get('/', [DynamicPageSeoC::class, 'index']);
      Route::get('add/', [DynamicPageSeoC::class, 'index']);
      Route::post('/store/', [DynamicPageSeoC::class, 'store']);
      Route::get('/delete/{id}/', [DynamicPageSeoC::class, 'delete']);
      Route::get('/update/{id}/', [DynamicPageSeoC::class, 'index']);
      Route::post('/update/{id}/', [DynamicPageSeoC::class, 'update']);
    });

    Route::prefix('/addresses')->group(function () {
      Route::get('/', [AddressC::class, 'index']);
      Route::post('/store/', [AddressC::class, 'store']);
      Route::get('/delete/{id}/', [AddressC::class, 'delete']);
      Route::get('/update/{id}/', [AddressC::class, 'index']);
      Route::post('/update/{id}/', [AddressC::class, 'update']);
    });

    Route::prefix('/users')->group(function () {
      Route::get('/', [UserC::class, 'index']);
      Route::post('/store/', [UserC::class, 'store']);
      Route::get('/delete/{id}/', [UserC::class, 'delete']);
      Route::get('/update/{id}/', [UserC::class, 'index']);
      Route::post('/update/{id}/', [UserC::class, 'update']);
    });
    Route::prefix('/upload-files')->group(function () {
      Route::get('/', [UploadFilesC::class, 'index']);
      Route::get('/get-data', [UploadFilesC::class, 'getData']);
      Route::get('/delete/{id}', [UploadFilesC::class, 'delete']);
      Route::post('/store-ajax', [UploadFilesC::class, 'storeAjax']);
      Route::get('/update/{id}', [UploadFilesC::class, 'index']);
      Route::post('/update/{id}', [UploadFilesC::class, 'update']);
    });
  });
});

Route::prefix('common')->group(function () {
  Route::get('/change-status/', [CommonController::class, 'changeStatus']);
  Route::get('/update-field/', [CommonController::class, 'updateFieldById']);
  Route::get('/update-bulk-field/', [CommonController::class, 'updateBulkField']);
  Route::get('/get-country-by-destination/', [CommonController::class, 'getCountryByDestination']);
  Route::get('/search-university-and-program/', [HomeFc::class, 'searchUniversity']);
  Route::get('/slugify/', [CommonController::class, 'slugifyString']);
});
