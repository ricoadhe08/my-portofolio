<div>

@if (session()->has('success'))
      <div class="flex text-center items-center justify-center w-full bg-cyan-500 rounded mb-1 p-2">
          <p class="text-sm leading-none text-white">
            {{ session('success') }}
          </p>
      </div>
@endif
@if (session()->has('error'))
  <div class="w-full overflow-hidden bg-white rounded-lg shadow-sm">
      <div class="flex items-center justify-center w-12 bg-red-500">
          <p class="mb-1 text-sm leading-none text-white">
            {{ session('error') }}
          </p>
      </div>
  </div>
@endif

<div class=" relative flex flex-col h-full mt-8 lg:mt-4 w-80 max-w-md items-center min-w-[400px] ">
        
    <h2 class="text-3xl font-bold text-center">Contact Me</h2>
    <p class="text-base font-light text-gray-400 text-center">I'd love to hear from you!</p>
    
    <form wire:submit.prevent="contactFormSubmit" method="POST" class="my-6 w-80 max-w-screen-lg">
      @csrf  
      <div class="flex flex-col gap-6">
            
            <div class="w-full max-w-sm min-w-[200px]">
                <label for="email" class="block text-gray-200 text-sm my-1 ">Email</label>
                <input wire:model='email' type="email" name="email" placeholder="you@example.com"
                        class="w-full appearance-none border rounded py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-cyan-500"
                        required>
            </div>

            <div class="w-full max-w-sm min-w-[200px]">
                <label for="subject" class="block text-gray-200 text-sm my-1 ">Subject</label>
                <input wire:model='subject' type="text" name="subject" placeholder="What's this about?"
                        class="w-full appearance-none border rounded py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-cyan-500"
                        required>
            </div>

            <div class="w-full max-w-sm min-w-[200px]">
                <label for="message" class="block text-gray-200 text-sm my-1 ">Message</label>
                <textarea wire:model='contactMessage' name="message" rows="5" placeholder="Your message here..."
                            class="w-full appearance-none border rounded py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-cyan-500 resize-y"
                            required></textarea>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" 
                        class="bg-cyan-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg
                                focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                                Send Message
              </button> 
            </div>

        </div>
    </form>

    
 
</div>
<div>
<script type="text/javascript">
    // (function() {
    //     emailjs.init({
    //         publicKey: "LFoaYEVjsITJDFS7S",
    //     });
    // })();

    // window.onload = function() {
    //     document.getElementById('contact-form').addEventListener('submit', function(event) {
    //         event.preventDefault();
    //         // these IDs from the previous steps
    //         emailjs.sendForm('service_b32p0it', 'template_vek26zs', '#contact-form')
    //             .then(() => {
    //                 console.log('SUCCESS!', response.status, response.text);
    //             }, (error) => {
    //                 console.log('FAILED...', error);
    //             });
    //     });
    // }
</script>