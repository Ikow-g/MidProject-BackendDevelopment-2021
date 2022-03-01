@extends('template.main')

@section('isi')
    
<div class="container">
    <h1>CatGeto Code Courses!</h1>

    @foreach ($courses as $course)
    <article class="mb-5">
        <h2>
            <a href="/course/{{ $course->id }}">{{ $course->title }}</a>
        </h2>
        <h5>{{ $course->author }}</h5>
        <p>{{ $course->excerpt }}</p>
    </article>
    @endforeach
</div>



@endsection