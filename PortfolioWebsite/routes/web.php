<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    // For now, reuse about or make a simple contact page
    // Using a simple contact placeholder for now as requested by user button
    // Or I can make a dedicated contact view, but the plan didn't explicitly detail a contact view file, just the button.
    // I'll make a simple view or just redirect to home with a contact section fragment if I had one.
    // Let's make a contact view to be safe and complete, reusing the layout.
    return view('contact'); // I will create this contact view next to be complete
});
