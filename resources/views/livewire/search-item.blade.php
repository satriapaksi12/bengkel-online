<div class="flex px-5 lg:px-36 py-4 relative justify-between">
    <div class="w-1/5 self-center">
        <div class="w-[55px] h-[55px]  p-2 ml-10"><a href="../"><img src="{{ asset('img/arrow.png') }}" alt="" width="" class="object-cover"></a></div>
    </div>
    <div class="flex border-2 shadow-sm rounded-lg  w-full mx-10 lg:mx-0 border-slate-100 bg-slate-100 ">
        <div class="rounded-lg w-full absolute max-w-[810px] bg-slate-200">
            <form method="get" class="rounded-lg ">
                <input wire:model='term' type="text" placeholder="Search for a part..." class="py-3 border-2 border-slate-100 rounded-lg w-full bg-slate-100  focus:ring-green-500 focus:border-none focus:ring-2 focus:ring-offset-2 mt-0.5  ">
                <div class="z-10 text-blue-700 bg-blue-100 rounded-b-xl w-full " wire:loading>
                   <p class="p-2"> Searching items...</p>
                </div>
                <div class="z-10" wire:loading.remove>
                    @if ($term == '')

                    @else
                    @if ($item->isEmpty())
                    <div class="text-red-700 text-sm z-10 bg-red-100 rounded-b-xl ">
                       <p class="p-2"> No matching result was found.</p>
                    </div>
                    @else
                    @foreach ($item as $i)
                    <div class"z-10" class="bg-slate-200 hover:bg-slate-400 rounded-lg">
                        <img src="{{ $i->image }}" alt="">
                        <a href="/sparepart/{{ $i->slug }}/{{ $i->id }}" class="text-lg text-gray-900 text-bold "><p class="p-1">{{ $i->name }}</p></a>
                    </div>
                    @endforeach
                    @endif
                    @endif
                </div>
            </form>
        </div>

    </div>
</div>
