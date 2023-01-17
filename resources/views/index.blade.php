@extends('layouts.app')

@section('content')

<section class="bg-light h-100">
    <p class="h1 text-black">{{ $title }}</p>
    <p class="h2 text-black">Welcome to {{ $content }}</p>
    <br>
    <p class="h2 text-black">-object</p>
    <p class="h2 text-black">user = {{ $object->user }}, msg = {{ $object->msg }}</p>
    <br>
    <p class="h2 text-black">-if</p>
    <p class="h2 text-black">Timestamp = {{ $timestamp }}</p>
    @if ($timestamp_odd == true)
        <p class="h3 text-black">Timestamp is odd</p>
    @else
        <p class="h3 text-black">Timestamp is even</p>
    @endif
    <br>
    <p class="h2 text-black">-foreach</p>
    <ul>
      @foreach ($users as $user)
        <li>{{ $user }}</li>
      @endforeach
    </ul>
</section>

@endsection
