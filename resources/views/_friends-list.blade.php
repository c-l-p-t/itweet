<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
  @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
      <div>
        <a href="{{ $user->path() }}"
           class="flex items-center text-sm">
          <img src="{{ $user->avatar }}"
               class="rounded-full mr-2 w-12 h-12 object-cover"
               alt="">
          {{ $user->name }}
        </a>
      </div>
    </li>
  @endforeach
</ul>