<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
  <form action="/tweets" method="POST">
    @csrf

    <textarea name="body"
              class="w-full"
              required
    ></textarea>

    <hr class="my-4">

    <footer class="flex justify-between">
      <img src="{{ auth()->user()->avatar }}"
           class="rounded-full mr-2 w-12 h-12 object-cover"
           alt="">

      <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white">Tweet</button>
    </footer>
  </form>

  @error('body')
  <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
  @enderror
</div>