<nav class="bg-black px-2 py-2.5">
    <div class="flex justify-between">
        <div class="flex py-5 px-5 space-x-3">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 0 text-purple-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                  </svg> 
                <a href="#">
                     
                    <span class="text-white text-l font-extrabold hover:text-purple-400">
                        TakeepShop
                    </span>
                </a>
            </div>
        <div class="hidden md:flex">
            <div class="pl-10 ">
                <a href="#">
                    <span class="text-white  border-slate-50 hover:text-yellow-50 hover:border-b-[1px] hover:font-bold">Home</span>
                </a>
            </div>
            <div class="pl-10">
                <a href="#">
                    <span class="text-white border-slate-50 hover:text-yellow-50 hover:border-b-[1px] hover:font-bold">Browse Items</span>
                </a>
            </div>
        </div>
        </div>

        <div class="py-5 flex">
            <div class="hidden md:flex">
                <div class="mx-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 hover:border-2 hover:rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                          </svg>                      
                    </a>
                </div>
                <div class="px-5">
                    <a href="#">
                        <span class="py-1 px-4 bg-purple-900 hover:bg-purple-900 bg-opacity-25 text-purple-400">Login</span>
                    </a>
                </div>
            </div>
                <!-- mobile -->
            <div class="md:hidden flex items-center pr-4">
                    <button class="mobile-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                          
                    </button>
            </div>
        </div>
    </div>
    <!-- mobile mehu -->

    <div class="mobile-menu hidden md:hidden">
        <a href="#">
            <span class="text-white block py-2 px-4 text-sm hover:bg-purple-800">Home</span>
        </a>
        <a href="#">
            <span class="text-white block py-2 px-4 text-sm hover:bg-purple-800">Browse Items</span>
        </a>
    </div>
</nav>

<script>
    //grab
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    //event listener
    btn.addEventListener('click',() => {
        menu.classList.toggle("hidden");
    } )
</script>