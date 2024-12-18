<?php

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\CategoriController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TutorialController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\User\LikeController;
use App\Models\Like;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::controller(FrontController::class)->group(function(){
    Route::get('/', 'index')->name('front.index');
    Route::get('/Front', 'front')->name('Utama.index');
    Route::get('/search', 'search')->name('search.index');
    Route::get('/Katalog', 'katalog')->name('katalog.index');
    Route::get('/Detail-produk/{id}', 'show')->name('produk.show');
    Route::post('/produk/{id}/comment', 'storeComment')->name('comments.store');
    Route::get('/Video', 'video')->name('video.index');
    Route::get('/produk/{slug}', 'produk')->name('front.produk.kate');

});

Route::post('/rate', [RatingController::class, 'rate'])->middleware('auth')->name('rate');

Route::middleware('auth')->group(function () {
    Route::post('/bookmark', [BookmarkController::class, 'toggleBookmark'])->name('bookmark.toggle');
    Route::get('/bookmarks', [BookmarkController::class, 'listBookmark'])->name('bookmarks.list');
    Route::get('/bookmarks/file', [BookmarkController::class, 'readFromFile'])->name('bookmark.file');
    Route::get('/my-bookmarks', [BookmarkController::class, 'myBook'])->name('my.bookmarks');
});

// ini route admin

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(BaseController::class)->group(function(){
        Route::get('/home', 'index')->name('index.home');
        Route::get('/data-user', 'dataUser')->name('data.user');
        Route::get('/data-admin', 'dataAdmin')->name('data.admin');
        Route::delete('/data-user/delete', 'deleteUser')->name('data.user.delete');
    });
    Route::controller(CategoriController::class)->group(function(){
        Route::get('/categori', 'index')->name('index.categori');
        Route::post('/categori/create', 'create')->name('categori.create');
        Route::put('/categori/update', 'update')->name('categori.update');
        Route::delete('/categori/delete', 'delete')->name('categori.delete');

        Route::get('/utama', [CategoriController::class, 'show'])->name('utama.show');


    });

    Route::controller(ProdukController::class)->group(function(){
         Route::get('/produk', 'index')->name('index.produk');
         Route::get('/form-produk', 'create')->name('create.produkk'); 
         Route::post('/form-produk/store', 'store')->name('store.produk');
         Route::put('/produk/update/{id}', 'update')->name('update.produk');
         Route::get('/produk/edit/{id}', 'edit')->name('edit.produk');
         Route::delete('/produk/delete', 'delete')->name('delete.produk');
    });

    Route::controller(TutorialController::class)->group(function(){
        Route::get('/tutorial', 'index')->name('index.tutorial');
        Route::get('/form-tutorial', 'create')->name('tutorial.create');
        Route::post('/tutorial/store', 'store')->name('tutorial.store');
        Route::put('/tutorial/update/{id}', 'update')->name('tutorial.update');
        Route::get('/tutorial/edit/{id}', 'edit')->name('tutorial.edit');
        Route::delete('/tutorial/delete', 'delete')->name('tutorial.delete');
        Route::get('/tutorial/{id}', 'show')->name('tutorial.show');
        Route::get('/aksesoris/{id}','detailAksesoris')->name('aksesoris.detail');


    });

    // Route::controller(KomentarController::class)->group(function(){
    //     Route::get('/komentar', 'index')->name('index.komentar');
    //     Route::get('/form-komentar', 'create')->name('komentar.create');
    //     Route::post('/komentar/store', 'store')->name('komentar.store');
    //     Route::put('/komentar/update/{id}', 'update')->name('komentar.update');
    //     Route::get('/komentar/edit/{id}', 'edit')->name('komentar.edit');
    //     Route::delete('/komentar/delete', 'delete')->name('komentar.delete');
    //     Route::delete('/komentar/{id}','destroy')->name('komentar.destroy');


    });

    // Route::controller(AdminVideoController::class)->group(function(){
    //     Route::get('/video', 'index')->name('index.video');
    //     Route::get('/form-video', 'create')->name('video.create');
    //     Route::post('/video/store', 'store')->name('video.store');
    //     Route::put('/video/update/{id}', 'update')->name('video.update');
    //     Route::get('/video/edit/{id}', 'edit')->name('video.edit');
    //     Route::delete('/video/delete', 'delete')->name('video.delete');
    // });

    // Route::controller(BookmarkController::class)->group(function () {
    //     Route::post('/bookmark/{id}', 'Bookmark')->name('bookmark.add');
    //     Route::delete('/bookmarkdelete/{id}', 'delete')->name('bookmark.delete'd);
    // });

    // Route::middleware('auth')->group(function(){ 
    //     Route::post('/bookmark', [UserBookmarkController::class, 'toogleBookmark'])->name('bookmark.toogle');
    //     Route::get('/bookmarks', [UserBookmarkController::class, 'listBookmarks'])->name('bookmarks.list');
    //     Route::get('/my-bookmarks', [UserBookmarkController::class, 'myBook'])->name('my.bookmarks');
    //     Route::get('/unbookmark', [UserBookmarkController::class, 'unbookmark'])->name('bookmark.unbookmark');
    // });

   
// });

Route::middleware(['auth'])->group(function () {
    Route::post('/like', [App\Http\Controllers\User\LikeController::class, 'like'])->name('like');
    Route::post('/unlike', [App\Http\Controllers\User\LikeController::class, 'unlike'])->name('unlike');
  

    Route::get('/get-likes', function () {
        $userId = Auth::id();

        $likedProdukIds = Like::where('user_id', $userId)->pluck('produk_id');
    
        return response()->json([
            'success' => true,
            'likedProdukIds' => $likedProdukIds
        ]);
    });
});
