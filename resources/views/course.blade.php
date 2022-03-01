@extends('template.main')

@section('isi')
<article>

    <h2>{{ $course->title }}</h2>
    <h5>{{ $course->author }}</h5>
    {!! $course->detail !!}

</article>
<a href="/courses">back to courses</a>
@endsection