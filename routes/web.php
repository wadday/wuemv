<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::prefix('projects')->group(function() {
    Route::prefix('fs')->name('fs.')->group(function() {
        Route::get('/', function() {
            return Inertia::render('Projects/FS/HomePage', [
                'title' => 'Fuvahmulaku School',
            ]);
        })->name('home');

        Route::prefix('about')->name('about.')->group(function() {
            Route::get('/', function() {
                return Inertia::render('Projects/FS/SchoolIntroduction', [
                    'title' => 'Introduction',
                ]);
            })->name('introduction');

            Route::get('/history', function() {
                return Inertia::render('Projects/FS/SchoolHistory', [
                    'title' => 'School History',
                ]);
            })->name('history');
        });

        Route::prefix('news')->name('news.')->group(function() {
            Route::get('/', function() {
                return Inertia::render('Projects/FS/NewsPage', [
                    'title' => 'News',
                ]);
            })->name('list');

            Route::get('/{news}', function() {
                return Inertia::render('Projects/FS/NewsDetailsPage', [
                    'title' => 'News Details',
                ]);
            })->name('details');
        });

        Route::prefix('events')->name('events.')->group(function() {
            Route::get('/{event}', function() {
                return Inertia::render('Projects/FS/EventDetailsPage', [
                    'title' => 'Event Details',
                ]);
            })->name('details');
        });

        Route::get('/gallery', function() {
            return Inertia::render('Projects/FS/GalleryPage', [
                'title' => 'Gallery',
            ]);
        })->name('gallery');

        Route::get('/downloads', function() {
            return Inertia::render('Projects/FS/DownloadsPage', [
                'title' => 'Downloads',
            ]);
        })->name('downloads');
    });
});

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
