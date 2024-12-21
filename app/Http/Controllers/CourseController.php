<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::latest()
            ->withSum('lessons as length', 'length')
            ->where('title', 'like', "%{$request->search}%")
            ->orWhere('description', 'like', "%{$request->search}%")
            ->paginate(10)
            ->withQueryString();

        return view('pages.courses.index', compact('courses'));
    }

    public function show(Course $course): View
    {
        return view('pages.courses.show', compact('course'));
    }
}
