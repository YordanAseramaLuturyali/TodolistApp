<nav class="nav bg-[#2F58CD] h-[10vh] text-white relative">
    <ul class="flex h-16 items-center justify-between px-[5%]">
        @auth
            <form action="\logout" method="POST">
                @csrf
                <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg></button>
            </form>
        @else
            <li><a href="\register"><svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" className="w-5 h-5">
                        <path fillRule="evenodd"
                            d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                            clipRule="evenodd" />
                        <path fillRule="evenodd"
                            d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z"
                            clipRule="evenodd" />
                    </svg>
                </a></li>
            <li>
            @endauth
            <a href="\">
                <h1 class=" text-2xl font-bold">Todo List</h1>
            </a>
        </li>
        <li>
            <button id="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-5 h-5">
                    <path fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                </svg></button>
        </li>
    </ul>
    <form action="" method="GET" id="form-search" class="absolute left-[28%] top-[70px] hidden">
        <input type="search" name="search" id="search" placeholder="Search"
            class=" w-[100%] outline-[#2F58CD] bg-slate-700 border-[#2F58CD] rounded py-1 px-3 text-white">
    </form>
</nav>
