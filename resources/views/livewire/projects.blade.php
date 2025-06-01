<div class=" w-full h-full flex flex-col items-center pt-2">
    
    {{-- the page name --}}
    <div class=" md:w-6xl w-[70%] flex flex-row">
        <span class="text-white font-medium text-xl md:text-3xl">
            My Portofolio
        </span>
        <div class="flex flex-row ml-4">
            <div class="border-1 border-cyan-500 solid h-[3xl]"></div>
        </div>
        
        {{-- <div><button>All Projects</button></div> --}}
    </div>

    <div class="grid lg:grid-cols-2 gap-4 max-w-5xl mx-auto w-full ">

        {{-- <div class=" w-sm mx-8 flex flex-col"> --}}
        <div class=" p-8 flex flex-col">
            <div class="rounded-lg">
                <img src="/storage/img/ss-dijkstrahospital.png" alt="dijkstrahospital" class="h-sm object-fill">
            </div>
            <div class="w-full mt-2">
                <span class="text-gray-100 font-medium text-base ">DijkstraHospital</span>
                <div class="border-1 border-gray-600 solid w-full mt-2"></div>
                <p class="text-gray-400 font-thin text-sm min-h-[10vh] mt-2">
                    Implemented Dijkstra algorithm to find the nearest hospital in the area
                    using custom intersections data and custom routes
                </p>
            </div>
            <div class="font-thin text-xs text-right">
                <p>Laravel, Livewire, Dijkstra</p>
            </div>
            <div class="my-2 text-right">
                <a href="https://runlaraveldijkstra.site" class="px-2 py-1 text-xs font-medium text-center text-black bg-gray-200 rounded-lg">VISIT</a>
                <a class="px-2 py-1 text-xs font-medium text-center text-white bg-gray-700 rounded-lg">GITHUB</a>
            </div>
        </div>

        <div class=" p-8 flex flex-col">
            <div class=" ">
                <img src="/storage/img/ss-portofolio.png" alt="portofolio" class="h-sm object-fill">
            </div>
            <div class="w-full mt-2">
                <span class="text-gray-100 font-medium text-base">Portofolio</span>
                <div class="border-1 border-gray-600 solid w-full mt-2"></div>
                <p class="text-gray-500 font-thin text-sm">
                    Laravel and Livewire package used as main framework and Tailwindcss as
                    CSS framework
                </p>
            </div>
            <div class="font-thin text-xs text-right">
                <p>Laravel, Livewire, Tailwindcss</p>
            </div>
            <div class="my-2 text-right">
                <a href="https://ricoadityahweb.site" class="px-2 py-1 text-xs font-medium text-center text-black bg-gray-200 rounded-lg">VISIT</a>
                <a class="px-2 py-1 text-xs font-medium text-center text-white bg-gray-700 rounded-lg">GITHUB</a>
            </div>
        </div>
        
    </div>


</div>
