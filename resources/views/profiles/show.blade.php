@extends('layouts.app')

@section('content')
  <header class="mb-6">
    <div>
      <img src="/images/profile-default.jpg"
           alt=""
           class="mb-4">
      <img src="{{ $user->avatar }}"
           alt=""
           class="rounded-full">
    </div>

    <div class="flex items-center justify-between">
      <div>
        <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div>
        <button class="rounded-full border border-gray-500 py-2 px-4 text-sm mr-2">Edit Profile</button>
        <button class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow Me</button>
      </div>
    </div>
  </header>

  @include('_timeline', [
    'tweets' => $user->tweets
  ])
@endsection
