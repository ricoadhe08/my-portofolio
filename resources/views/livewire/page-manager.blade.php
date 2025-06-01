<div class="h-screen bg-gray-900 text-white flex flex-col ">
    
    <x-navbar :currentPage="$currentPage" /> {{-- Pass the current page as a properties --}}


    <div  class="flex-grow relative overflow-auto lg:overflow-x-hidden" id="page-content">
        @if ($currentPage == 'about')
            <div key="about-page" x-data x-reveal 
                 
                 {{-- x-transition:enter-start="opacity-0 {{ $directionOfTransition === 'left' ? 'translate-x-full' : '-translate-x-full' }}"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 {{ $directionOfTransition === 'left' ? '-translate-x-full' : 'translate-x-full' }}" --}}
                {{-- x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" --}}
                {{-- x-transition:enter="transition ease-out duration-300"
                x-transition:leave="transition ease-in duration-300" --}}
                 class="inset-0 flex h-full lg:overflow-hidden">
                {{-- <h1 class="text-5xl font-bold text-white">Welcome to the About Page!</h1> --}}
                <livewire:about />
            </div>
        @endif

        @if ($currentPage == 'projects')
            <div key="projects-page" x-data x-reveal 
                 
                 {{-- x-transition:enter-start="opacity-0 {{ $directionOfTransition === 'left' ? 'translate-x-full' : '-translate-x-full' }}"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 {{ $directionOfTransition === 'left' ? '-translate-x-full' : 'translate-x-full' }}" --}}
                 {{-- x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90" --}}
                 class="absolute inset-0 h-full">
                <livewire:projects>
            </div>
        @endif

        @if ($currentPage == 'contact')
            <div key="contact-page" x-data x-reveal
                 
                 {{-- x-transition:enter-start="opacity-0 {{ $directionOfTransition === 'left' ? 'translate-x-full' : '-translate-x-full' }}"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 {{ $directionOfTransition === 'left' ? '-translate-x-full' : 'translate-x-full' }}" --}}
                {{-- x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" --}}
                 class="absolute inset-0 flex items-center justify-center">
                <livewire:contacts>
            </div>
        @endif
    </div>
</div>