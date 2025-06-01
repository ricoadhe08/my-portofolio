<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Rico Aditya Herlambang' }}</title>

        {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script> --}}

        {{-- Tailwind --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
        @vite('resources/css/app.css')

    </head>
    <body>

        
        {{ $slot }}
        
        <div>
            <livewire:page-manager />
        </div>

    </body>
    
    
    @livewireScripts
</html>

<script>
    document.addEventListener("alpine:init", () => {
        // Custom alpine directive
        Alpine.directive("reveal", (el, {}, { cleanup }) => {
        const callback = () => {
            // Check if the element is within 70% of the screen
            const position = el.offsetTop - window.scrollY
            const threshold = window.scrollY + window.innerHeight * 0.4
            const reveal = position < threshold

            // Ignore if the element doesn't reach the threshold
            if (!reveal) {
            return
            }
            
            // Add css classes to set the opacity to 100 and the offset to 0
            // We also use a 0.2 second delay
            setTimeout(() => {
            el.classList.add(
                "!opacity-100",
                // "!top-0",
                "!left-0",
                "transition-all",
                "duration-300",
            )
            }, 100)
        }

      setTimeout(() => callback(), 0)

      // Setup to reveal the element when the user scrolls
      var x = document.getElementById('page-content');
        var style = window.getComputedStyle(x);
        if(style.getPropertyValue('opacity') == 0){
            return
        }
        window.addEventListener("scroll", callback)
        cleanup(() => {
            window.removeEventListener("scroll", callback)
        })
    })

    // Alpine.directive('clicked',  (el, {}, { cleanup }) => {
    //     // let text = el.textContent
    
    //     // el.addEventListener('click', () => {
    //     //     console.log('clicked');
    //     // })
    //     const clicked = () => {
    //         console.log('clicked');
    //     }
    //     window.addEventListener("click", clicked)
    //     // cleanup(() => {
    //     //     window.removeEventListener("scroll", clicked)
    //     // })
    // })

})

function test(){
    console.log('eee')
}
</script>