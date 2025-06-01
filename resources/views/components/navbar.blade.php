{{-- Define the properties this component expects --}}
@props(['currentPage']) 

<div class="flex flex-col ">

    <nav class="p-4 flex items-center">
        <div class="mx-auto ">

            <div class="flex justify-center items-center">
                <div>
                    <button wire:click="goToPageHere('about')" 
                        {{ $currentPage == 'about' ? 'disabled' : '' }}
                        class="nav-link text-md font-thin rounded-md mx-4 px-4 py-2 duration-50
                            {{ $currentPage == 'about' ? 'text-white outline-2 outline-offset-2 outline-cyan-500 animate-pulse' : 'text-white hover:bg-cyan-300 ' }}">
                        About
                    </button>
                </div>

                <div>
                    <button wire:click="goToPageHere('projects')"
                        {{ $currentPage == 'projects' ? 'disabled' : '' }}
                        class="nav-link text-md font-thin rounded-md mx-4 px-4 py-2 duration-50
                                {{ $currentPage == 'projects' ? 'text-white outline-2 outline-offset-2 outline-cyan-500 animate-pulse' : 'text-white hover:bg-cyan-300 ' }}">
                        Projects
                    </button>
                </div>

                <div>
                    <button wire:click="goToPageHere('contact')"
                        {{ $currentPage == 'contact' ? 'disabled' : '' }}
                        class="nav-link text-md font-thin rounded-md mx-4 px-4 py-2 duration-50
                            {{ $currentPage == 'contact' ? 'text-white outline-2 outline-offset-2 outline-cyan-500 animate-pulse' : 'text-white hover:bg-cyan-300 ' }}">
                        Contact
                    </button>
                </div>

            </div>

        </div>
    </nav>

{{-- <div class="px-4 py-6 ">
    <nav class="flex justify-center space-x-4">
        <div id="about"  >
            <a  class="nav-link font-bold rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100 hover:text-orange-400 ">
                About
            </a>
        </div>
        <div id="projects" >
            <a  class="nav-link font-bold rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100 hover:text-orange-400 ">
                Projects
            </a>
        </div>
        <div id="contacts" >
            <a  class="nav-link font-bold rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100 hover:text-orange-400 ">
                Contacts
            </a>
        </div>
      </nav>
</div> --}}




</div>