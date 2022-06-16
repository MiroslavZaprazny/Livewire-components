 <div class="container mx-auto pt-16">
     <div class="lg:flex">
         <div class="xl:w-2/5 lg:w-2/5 bg-indigo-700 py-16 xl:rounded-bl rounded-tl rounded-tr xl:rounded-tr-none">
             <div class="xl:w-5/6 xl:px-0 px-8 mx-auto">
                 <h1 class="xl:text-4xl text-3xl pb-4 text-white font-bold">Get in touch</h1>
                 <p class="text-xl text-white pb-8 leading-relaxed font-normal lg:pr-4">Got a question about us? Are you
                     interested in partnering with us? Have some suggestions or just want to say Hi? Just contact us. We
                     are here to asset you.</p>
                 <div class="flex pb-4 items-center">
                     <div aria-label="phone icon" role="img">
                         <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg1.svg"
                             alt="phone" />

                     </div>
                     <p class="pl-4 text-white text-base">+1 (308) 321 321</p>
                 </div>
                 <div class="flex items-center">
                     <div aria-label="email icon" role="img">
                         <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg2.svg"
                             alt="email" />

                     </div>
                     <p class="pl-4 text-white text-base">Info@alphas.com</p>
                 </div>
                 <p class="text-lg text-white pt-10 tracking-wide">
                     545, Street 11, Block F
                     <br />
                     Dean Boulevard, Ohio
                 </p>
                 <div class=" pt-16">
                     <a href="javascript:void(0)"
                         class="text-white font-bold tracking-wide underline focus:outline-none focus:ring-2 focus:ring-white ">View
                         Job Openings</a>
                 </div>
             </div>
         </div>
         <div
             class="xl:w-3/5 lg:w-3/5 bg-gray-100 dark:bg-gray-500 h-full pt-5 pb-5 xl:pr-5 xl:pl-0 rounded-tr rounded-br">
             <form wire:submit.prevent="submitForm" id="contact" action="contact" method="POST"
                 class="bg-white dark:bg-gray-800 py-4 px-8 rounded-tr rounded-br">
                 @csrf
                 @if ($successMessage)
                     <div class="rounded-md bg-green-50 p-4 mb-3">
                         <div class="flex">
                             <div class="flex-shrink-0">
                                 <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                     <path fill-rule="evenodd"
                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </div>
                             <div class="ml-3">
                                 <p class="text-sm leading-5 font-medium text-green-800">
                                     {{ $successMessage }}
                                 </p>
                             </div>
                             <div class="ml-10">
                                 <button wire:click="$set('successMessage',null)" type="button">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                         <path
                                             d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                     </svg>
                                 </button>
                             </div>
                         </div>
                     </div>
                 @endif
                 <h1 class="text-4xl text-gray-800 dark:text-white font-extrabold mb-6">Enter Details</h1>
                 <div class="block xl:flex w-full flex-wrap justify-between mb-6">
                     <div class="w-2/4 max-w-xs mb-6 xl:mb-0">
                         <div class="flex flex-col">
                             <label for="full_name"
                                 class="text-gray-800 dark:text-white text-sm font-semibold leading-tight tracking-normal mb-2">Full
                                 Name</label>
                             <input wire:model="full_name" id="full_name" name="full_name" type="text"
                                 class="dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                 placeholder="Full Name" aria-label="enter your full name input" />
                         </div>
                         @error('full_name')
                             <p class="text-sm pt-1 font-semibold text-red-500"> {{ $message }} </p>
                         @enderror
                     </div>
                     <div class="w-2/4 max-w-xs xl:flex xl:justify-end">
                         <div class="flex flex-col">
                             <label for="email"
                                 class="text-gray-800 dark:text-white text-sm font-semibold leading-tight tracking-normal mb-2">Email</label>
                             <input wire:model="email" id="email" name="email"
                                 class="dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                 placeholder="example@email.com" aria-label="enter your email input" autocomplete="off" />
                             @error('email')
                                 <p class="text-sm pt-1 font-semibold text-red-500"> {{ $message }} </p>
                             @enderror
                         </div>
                     </div>
                 </div>
                 <div class="flex w-full flex-wrap">
                     <div class="w-2/4 max-w-xs">
                         <div class="flex flex-col">
                             <label for="phone"
                                 class="text-gray-800 dark:text-white text-sm font-semibold leading-tight tracking-normal mb-2">Phone</label>
                             <input wire:model="phone" id="phone" name="phone" type="tel"
                                 class="dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                 placeholder="+92-12-3456789" aria-label="enter your phone number input" />
                         </div>
                         @error('phone')
                             <p class="text-sm pt-1 font-semibold text-red-500"> {{ $message }} </p>
                         @enderror
                     </div>
                 </div>
                 <div class="w-full mt-6">
                     <div class="flex flex-col">
                         <label class="text-sm font-semibold text-gray-800 dark:text-white mb-2"
                             for="message">Message</label>
                         <textarea wire:model="message" placeholder="" name="message"
                             class="dark:bg-gray-900 dark:text-white dark:border-gray-700 border-gray-300 border mb-4 rounded py-2 text-sm outline-none resize-none px-3 focus:border focus:border-indigo-700"
                             rows="8" id="message" aria-label="enter your message input"></textarea>
                     </div>
                     @error('message')
                         <p class="text-sm pt-1 pb-2 font-semibold text-red-500"> {{ $message }} </p>
                     @enderror
                     <button type="submit"
                         class="focus:outline-none bg-indigo-700 hover:bg-indigo-600 
                                rounded text-white px-8 py-3 text-sm 
                                focus:ring-indigo-700">Submit</button>
                 </div>
             </form>
         </div>
     </div>
 </div>