{{-- default is flex-col for small viewport just incase and then its flex-row if it bigger viewport --}}
<div class=" w-full h-screen px-4 flex flex-col md:flex-row content-center mt-4 lg:justify-center lg:mt-[15vh] ">    
    <div id="left-side" class="flex flex-col p-2 items-ends text-center">
        
        <div class="text-[40px] text-2xl md:text-6xl md:text-right max-w-5xl ">
            <span class="text-gray-400 font-thin">Hi,</span>
            <span class="text-gray-400 font-thin">I'm</span>
            <span class="text-white font-medium">Rico</span>
            <div><span class="text-cyan-500 font-medium md:text-5xl">Web Developer</span></div>
        </div>

        <div class="md:text-right text-sm text-gray-400 pt-4 text-wrap md:w-sm ">
            <p>A fresh graduate who eager to build <br>a dynamic
                and responsive web applications.</p>
        </div>

    </div>
    
    {{-- Blue line --}}
    <div class="mx-4 flex flex-row sm:flex-col my-2">
        <div class="border-1 border-cyan-500 solid w-[100%] sm:h-[40vh] lg:max-h-[200px]"></div>
    </div>

    <div id="right-side" class="flex flex-col px-2 md:py-6 md:items-start">

        <div class="text-white text-center md:text-left">
            <span class="font-bold text-2xl md:text-4xl">Current Technologies</span>
            <p class="font-thin text-sm text-gray-400">
                These are some of the main technologies that I currently capable of.</p>
        </div>

        <div class="w-full flex flex-col sm:flex-row sm:flex-wrap items-center gap-4 pt-4  lg:max-w-[500px]">        
            <div class="flex w-60 rounded-lg border-1 border-gray-500 duration-200 hover:bg-gray-700">
                <div class="m-4 p-2 content-center bg-orange-500/10 rounded-lg">
                    <img src="/storage/img/laravel-logo.png" alt="Laravel" class="size-8">
                </div>
                <div class="content-center">
                    <p class="font-bold text-xl">Laravel</p>
                    <p class="font-thin text-sm text-gray-400">PHP Framework</p>
                </div>
            </div>

            <div class="flex w-60 rounded-lg border-1 border-gray-500 duration-200 hover:bg-gray-700">
                <div class="m-4 p-2 content-center bg-gray-700/70 rounded-lg">
                    <img src="/storage/img/livewire-logo.png" alt="Livewire" class="size-8">
                </div>
                <div class="content-center">
                    <p class="font-bold text-xl">Livewire</p>
                    <p class="font-thin text-sm text-gray-400">Frontend UI for Laravel</p>
                </div>
            </div>

            <div class="flex w-60 rounded-lg border-1 border-gray-500 duration-200 hover:bg-gray-700">
                <div class="m-4 p-2 content-center bg-red-800/20 rounded-lg">
                    <img src="/storage/img/git-logo.png" alt="Git" class="size-8">
                </div>
                <div class="content-center">
                    <p class="font-bold text-xl">Git</p>
                    <p class="font-thin text-sm text-gray-400">Version Control</p>
                </div>
            </div>

            <div class="flex w-60 rounded-lg border-1 border-gray-500 duration-200 hover:bg-gray-700">
                <div class="m-4 p-2 content-center bg-white rounded-lg">
                    <img src="/storage/img/mysql-logo.png" alt="MySQL" class="size-8">
                </div>
                <div class="content-center">
                    <p class="font-bold text-xl">MySQL</p>
                    <p class="font-thin text-sm text-gray-400">SQL Database</p>
                </div>
            </div>

            <div class="flex w-60 rounded-lg border-1 border-gray-500 duration-200 hover:bg-gray-700">
                <div class="m-4 p-2 content-center bg-gray-700/70 rounded-lg">
                    <img src="/storage/img/tailwindcss-logo.png" alt="TailwindCSS" class="size-8">
                </div>
                <div class="content-center">
                    <p class="font-bold text-xl">Tailwindcss</p>
                    <p class="font-thin text-sm text-gray-400">CSS Framework</p>
                </div>
            </div>

        </div>
    </div>
</div>
