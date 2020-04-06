<div class="border border-gray-500 rounded-lg p-4 mb-4">
  <div class="flex">
    <div class="flex-shrink-0 mr-2">
      <a href="{{ $tweet->user->path() }}">
        <img src="{{ $tweet->user->avatar }}"
             class="rounded-full mr-2 w-12 h-12 object-cover"
             alt="">
      </a>
    </div>

    <div>
      <h5 class="font-bold mb-4">
        <a href="{{ $tweet->user->path() }}">
          {{ $tweet->user->name }}
        </a>
      </h5>

      <p class="text-sm">
        {{ $tweet->body }}
      </p>
    </div>
  </div>
</div>