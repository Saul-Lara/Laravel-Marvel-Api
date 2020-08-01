<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 py-1" placeholder="Search...">
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 rounded text-sm w-64 mt-2">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a href="{{ url("/comics/".$result['id'] ) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                            <img src="{{ $result['thumbnail']['path'].'/portrait_xlarge.'.$result['thumbnail']['extension'] }}" alt="{{ $result['title'].' cover' }}" class="w-8">
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">
                    No results for "{{ $search }}"
                </div>
            @endif
        </div>
    @endif
</div>