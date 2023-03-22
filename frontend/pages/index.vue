<template>
  <div :class="isDark ? 'dark' : 'light'">
    <div class="font-montserrat text-sm bg-white dark:bg-zinc-900">
      <div
        class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
        <!-- Left Sidebar Sidebar L-->
        <aside
          class=" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300 dark:border-zinc-700  hidden md:block">

          <div class=" font-bold text-lg flex items-center gap-x-3">
            <svg class="h-8 w-8 fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z">
              </path>
            </svg>
            <div class="tracking-wide dark:text-white">MMovie<span class="text-red-600">.</span></div>
          </div>

          <!-- Menu -->
          <div class="mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm">
            <div class="text-gray-400/70  font-medium uppercase">Menu</div>
            <a
              class="flex items-center space-x-2 py-1 dark:text-white  font-semibold  border-r-4 border-r-red-600 pr-20 "
              href="#">
              <svg class="h-5 w-5 fill-red-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z">
                </path>
              </svg>
              <span>Home</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path
                    d="M19 2H9c-1.11 0-2 .89-2 2v5.586l-4.707 4.7v0c-.4.39-.4 1.02 0 1.41 .18.18.44.29.7.29v5 0c0 .55.44 1 1 1h16v0c.55 0 1-.45 1-1v-17c0-1.11-.9-2-2-2Zm-8 18H5v-5.586l3-3 3 3V20Zm8 0h-6v-4 0c.55 0 .99-.45 1-1 0-.27-.11-.53-.3-.72L8.99 9.57V3.984h10v16Z">
                  </path>
                  <path d="M11 6h2v2h-2Zm4 0h2v2h-2Zm0 4.03h2v1.96h-2Zm0 3.96h2v2h-2Zm-8 1h2v2H7Z"></path>
                </g>
              </svg>
              <span>Community</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white"
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z">
                  </path>
                  <path d="M8 16l5.991-2 2-6 -6 2Z"></path>
                </g>
              </svg>
              <span>Discovery</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z">
                  </path>
                  <path d="M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z"></path>
                </g>
              </svg>
              <span>Coming Soon</span>
            </a>

            <div class="mt-8 text-gray-400/70  font-medium uppercase">Social</div>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <path
                  d="M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z">
                </path>
              </svg>
              <span>Profile</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path
                    d="M16.6 11.04v-.001c.6-1.04.87-2.25.75-3.44 -.18-1.79-1.18-3.37-2.81-4.44l-1.11 1.66c1.11.742 1.8 1.79 1.91 2.974l-.001 0c.11 1.1-.29 2.2-1.08 2.98l-1.2 1.19 1.61.47c4.23 1.24 4.28 5.49 4.28 5.53h2c0-1.79-.96-5.285-4.4-6.952Z">
                  </path>
                  <path
                    d="M9.5 12c2.2 0 4-1.8 4-4 0-2.21-1.8-4-4-4 -2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4Zm0-6c1.1 0 2 .89 2 2 0 1.1-.9 2-2 2 -1.11 0-2-.9-2-2 0-1.11.89-2 2-2Zm1.5 7H8c-3.31 0-6 2.69-6 6v1h2v-1c0-2.21 1.79-4 4-4h3c2.2 0 4 1.79 4 4v1h2v-1c0-3.31-2.7-6-6-6Z">
                  </path>
                </g>
              </svg>
              <span>Friends</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path
                    d="M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z">
                  </path>
                  <path
                    d="M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z">
                  </path>
                </g>
              </svg>
              <span>Media</span>
            </a>

            <div class="mt-8 text-gray-400/70  font-medium uppercase">General</div>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
              href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:stroke-red-600" fill="none"
                   viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span>Settings</span>
            </a>
            <a
              class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white"
              href="#">
              <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24">
                <g>
                  <path d="M16 13v-2H7V8l-5 4 5 4v-3Z"></path>
                  <path
                    d="M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z">
                  </path>
                </g>
              </svg>
              <span>Logout</span>
            </a>
            <a class=" flex items-center space-x-2 py-1 mt-4" href="#">
              <div
                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                <input type="checkbox" name="toggle" id="toggle"
                       class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 border-gray-300 appearance-none cursor-pointer"
                       @click="isDark = !isDark" :value="isDark"/>
                <label for="toggle"
                       class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
              </div>
              <label for="toggle" class="">Dark Theme</label>
            </a>


          </div><!-- /Menu -->

        </aside><!-- /Left Sidebar -->

        <main class=" flex-1 py-10  px-5 sm:px-10 ">

          <header class=" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 ">
                    <span class="mr-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                    </span>
            <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z">
              </path>
            </svg>
            <div class="tracking-wide dark:text-white flex-1">MMovie<span class="text-red-600">.</span></div>

            <div class="relative items-center content-center flex ml-2">
                        <span class="text-gray-400 absolute left-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </span>
              <input type="text"
                     class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                     placeholder="Search ...">
            </div>
          </header>

          <section>
            <nav class="flex space-x-6 text-gray-400 font-medium">
              <a href="#" class="hover:text-gray-700 dark:hover:text-white">TV Series</a>
              <a href="#" class="text-gray-700 dark:text-white font-semibold">Movies</a>
              <a href="#" class="hover:text-gray-700 dark:hover:text-white ">Animes</a>
            </nav>

            <div
              class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white"
              style="background-image: url('images/inception.jpg');">
              <!-- <img class="object-cover w-full h-full" src="images/inception.jpg" alt=""> -->
              <div class="flex -space-x-1 items-center ">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt=""
                     srcset="">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck" alt=""
                     srcset="">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck" alt=""
                     srcset="">
                <span class="pl-4 text-xs drop-shadow-lg">+8 friends are watching</span>
              </div>

              <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                <span class="uppercase text-3xl font-semibold drop-shadow-lg ">Inception</span>
                <div class="text-xs text-gray-200 mt-2">
                  <a href="#" class="">Action</a>,
                  <a href="#" class="">Adventure</a>,
                  <a href="#" class="">Sci-Fi</a>
                </div>
                <div class="mt-4 flex space-x-3 items-center">
                  <a href="#"
                     class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block">Watch</a>
                  <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                         fill="currentColor">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <section class="mt-9">
            <div class="flex items-center justify-between">
              <span class="font-semibold text-gray-700 text-base dark:text-white">Top Stars</span>
              <div class="flex items-center space-x-2 fill-gray-500">
                <svg
                  class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                </svg>
                <svg
                  class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                </svg>
              </div>
            </div>

            <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">
              <div class="relative rounded-xl overflow-hidden">
                <img
                  src="https://www.jolie.de/sites/default/files/styles/image_gallery360w/public/2020-02/leonardo-dicaprio-oscars.jpg?h=64dbc2fc&itok=EH0B3oo4"
                  class="object-cover h-full w-full -z-10" alt="">
                <div
                  class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                  <a href="#"
                     class="p-2.5 bg-gray-800/80 bg-white rounded-lg text-white self-end hover:bg-red-600/80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                         fill="currentColor">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd"/>
                    </svg>
                  </a>

                  <div class="self-center flex flex-col items-center space-y-2">
                                    <span class="capitalize text-white font-medium drop-shadow-md">Leonardo
                                        DiCaprio</span>
                    <span class="text-gray-100 text-xs">+12 Movies</span>

                  </div>
                </div>
              </div>
              <div class="relative rounded-xl overflow-hidden ">
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/WP_-_random_-5_%2814094372762%29.jpg/319px-WP_-_random_-5_%2814094372762%29.jpg"
                  class="object-cover w-full h-full -z-10" alt="">
                <div
                  class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                  <a href="#"
                     class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                         fill="currentColor">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd"/>
                    </svg>
                  </a>

                  <div class="self-center flex flex-col items-center space-y-2">
                                    <span class="capitalize text-white font-medium drop-shadow-md">Joseph
                                        Gordon-Levitt</span>
                    <span class="text-gray-300 text-xs">+24 Movies</span>

                  </div>
                </div>
              </div>
              <div class="relative rounded-xl overflow-hidden ">
                <img src="https://img.zeit.de/kultur/film/2020-12/elliot-page-tranmann/wide__450x253__mobile__scale_1"
                     class="object-cover h-full w-full -z-10" alt="">
                <div
                  class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                  <a href="#"
                     class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                         fill="currentColor">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd"/>
                    </svg>
                  </a>

                  <div class="self-center flex flex-col items-center space-y-2">
                    <span class="capitalize text-white font-medium drop-shadow-md">Elliot Page</span>
                    <span class="text-gray-300 text-xs">+10 Movies</span>

                  </div>
                </div>
              </div>
              <div class="relative rounded-xl overflow-hidden ">
                <img src="https://de.web.img3.acsta.net/c_310_420/pictures/16/01/19/11/06/274206.jpg"
                     class="object-cover h-full w-full -z-10" alt="">
                <div
                  class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                  <a href="#"
                     class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                         fill="currentColor">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd"/>
                    </svg>
                  </a>

                  <div class="self-center flex flex-col items-center space-y-2">
                    <span class="capitalize text-white font-medium drop-shadow-md">Tom Hardy</span>
                    <span class="text-gray-300 text-xs">+27 Movies</span>

                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="mt-9">
            <div class="flex items-center justify-between">
              <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
              <div class="flex items-center space-x-2 fill-gray-500">
                <svg
                  class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                </svg>
                <svg
                  class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                </svg>
              </div>
            </div>

            <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
              <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                  class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                  <span class="capitalize  font-medium truncate">Tenet</span>
                  <div class="flex space-x-2 items-center text-xs">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>7.4</span>
                  </div>
                </div>
              </div>
              <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                  class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                  <span class="capitalize  font-medium truncate">Fight Club</span>
                  <div class="flex space-x-2 items-center text-xs">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>8.8</span>
                  </div>
                </div>
              </div>
              <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                  class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                  <span class="capitalize  font-medium truncate">Dune</span>
                  <div class="flex space-x-2 items-center text-xs">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>8.1</span>
                  </div>
                </div>
              </div>


            </div>
          </section>

        </main>

        <!-- Right Sidebar -->
        <aside
          class=" w-1/5 py-10 px-10  min-w-min  border-l border-gray-300 dark:border-zinc-700 hidden lg:block ">

          <div class="relative items-center content-center flex">
                    <span class="text-gray-400 absolute left-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
            <input type="text"
                   class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                   placeholder="Search ...">
          </div>

          <div class="mt-10">
            <span class="font-semibold text-gray-700 dark:text-white">Popular Movies</span>
            <ul class="mt-4 text-gray-400 text-xs space-y-3">
              <li class="flex space-y-3 space-x-3 ">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg"
                     class="w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                                    <span class="text-gray-700 dark:text-white font-semibold">The Shawshank
                                        Redemption</span>
                    <span class="text-xxs hidden xl:block">Drama</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>9.2</span>
                  </div>
                </div>
              </li>
              <li class="flex space-x-3 ">
                <img src="https://upload.wikimedia.org/wikipedia/en/1/1c/The_Dark_Knight_%282008_film%29.jpg"
                     class="object-cover w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                    <span class="text-gray-700 dark:text-white font-semibold">The Dark Knight</span>
                    <span class="text-xxs hidden xl:block">Action, Crime, Drama</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>9.1</span>
                  </div>
                </div>
              </li>
              <li class="flex space-x-3 ">
                <img src="https://m.media-amazon.com/images/I/81vZ6tNxuoL._SY500_.jpg"
                     class="object-cover w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                    <span class="text-gray-700 dark:text-white font-semibold">John Wick 4</span>
                    <span class="text-xxs hidden xl:block">Action, Crime, Thriller</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>7.4</span>
                  </div>
                </div>
              </li>
              <li class="pt-1">
                <a href="#"
                   class="px-5 py-2.5 bg-red-600  hover:bg-red-700 rounded-lg text-center font-medium block text-white">See
                  More</a>
              </li>

            </ul>
          </div>
          <div class="mt-10">
            <span class="font-semibold text-gray-700 dark:text-white">Favorites</span>
            <ul class="mt-4 text-gray-400 text-xs space-y-3">
              <li class="flex space-x-3 ">
                <img src="https://upload.wikimedia.org/wikipedia/en/c/c1/The_Matrix_Poster.jpg"
                     class="object-cover w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                    <span class="text-gray-700 dark:text-white font-semibold">The Matrix</span>
                    <span class="text-xxs hidden xl:block">Action, Sci-Fi</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>8.7</span>
                  </div>
                </div>
              </li>
              <li class="flex space-x-3 ">
                <img src="https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg"
                     class="object-cover w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                    <span class="text-gray-700 dark:text-white font-semibold">Interstellar</span>
                    <span class="text-xxs hidden xl:block">Adventure, Crime, Sci-Fi</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>8.6</span>
                  </div>
                </div>
              </li>
              <li class="flex space-x-3 ">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/86/The_Silence_of_the_Lambs_poster.jpg"
                     class="object-cover w-1/3 rounded-md" alt="">
                <div class="flex flex-col justify-between  ">
                  <div class="flex flex-col space-y-1">
                                    <span class="text-gray-700 dark:text-white font-semibold">The Silence of the
                                        Lambs</span>
                    <span class="text-xxs hidden xl:block">Crime, Drama, Thriller</span>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                         viewBox="0 0 64 32" version="1.1">
                      <g fill="#F5C518">
                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                      </g>
                      <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                        <path
                          d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                        </path>
                        <path
                          d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                        </path>
                        <path
                          d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                        </path>
                      </g>
                    </svg>
                    <span>8.6</span>
                  </div>
                </div>
              </li>
              <li class="pt-1">
                <a href="#"
                   class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-center font-medium block text-white">See
                  More</a>
              </li>

            </ul>
          </div>

        </aside>
        <!-- /Right Sidebar -->


      </div>
    </div>
    <el-alert
      title="success alert"
      type="success">
    </el-alert>

    <div class="flex">

      <button data-popover-target="popover-company-profile" type="button"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Company profile
      </button>
      <div data-popover id="popover-company-profile" role="tooltip"
           class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
        <div class="p-3">
          <div class="flex">
            <div class="mr-3 shrink-0">
              <a href="#" class="block p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite logo">
              </a>
            </div>
            <div>
              <p class="mb-1 text-base font-semibold leading-none text-gray-900 dark:text-white">
                <a href="#" class="hover:underline">Flowbite</a>
              </p>
              <p class="mb-3 text-sm font-normal">
                Tech company
              </p>
              <p class="mb-4 text-sm font-light">Open-source library of Tailwind CSS components and Figma design
                system.</p>
              <ul class="text-sm font-light">
                <li class="flex items-center mb-2">
                        <span class="mr-1 font-semibold text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                                          d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                                                                          clip-rule="evenodd"></path></svg>
                        </span>
                  <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">https://flowbite.com/</a>
                </li>
                <li class="flex items-start mb-2">
                        <span class="mr-1 font-semibold text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                                          clip-rule="evenodd"></path></svg>
                        </span>
                  <span>4,567,346 people like this including 5 of your friends</span>
                </li>
              </ul>
              <div class="flex mb-3 -space-x-3">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                     src="/docs/images/people/profile-picture-5.jpg" alt="">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                     src="/docs/images/people/profile-picture-2.jpg" alt="">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800"
                     src="/docs/images/people/profile-picture-3.jpg" alt="">
                <a
                  class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-2 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                  href="#">+3</a>
              </div>
              <div class="flex">
                <button type="button"
                        class="inline-flex items-center justify-center w-full px-5 py-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                  <svg class="w-4 h-4 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                          clip-rule="evenodd"></path>
                  </svg>
                  Like page
                </button>
                <button
                  class="inline-flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shrink-0 focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                  type="button">
                  <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                       xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div data-popper-arrow></div>
      </div>

      <el-button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Mon bouton personnalisé
      </el-button>
      <el-button
        plain
        class="bg-red-500"
        @click="open1">
        Success
      </el-button>
      <el-button
        plain
        @click="open2">
        Warning
      </el-button>
      <el-button
        plain
        @click="open3">
        Info
      </el-button>
      <el-button
        plain
        @click="open4">
        Error
      </el-button>


    </div>

    <form class="container p-16 dark:bg-zinc-900">
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
            name</label>
          <input type="text" id="first_name"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 placeholder="John" required>
        </div>
        <div style="width: 100%">
          <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>


          <input type="text" id="last_name" placeholder="Doe" required>
        </div>
        <div>
          <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
          <input type="text" id="company"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 placeholder="Flowbite" required>
        </div>
        <div>
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
          <input type="tel" id="phone"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
        </div>
        <div>
          <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
          <el-date-picker
            style="width: 100%;"
            v-model="value1"
            class="w-full"
            type="date"
            placeholder="Pick a day">
          </el-date-picker>
          <!--          <input type="url" id="website"-->
          <!--                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"-->
          <!--                 placeholder="flowbite.com" required>-->
        </div>
        <div>
          <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors
            (per month)</label>
          <input type="number" id="visitors"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 placeholder="" required>
        </div>
      </div>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="john.doe@company.com" required>
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="•••••••••" required>
      </div>
      <div class="mb-6">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
          password</label>
        <input type="password" id="confirm_password"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="•••••••••" required>
      </div>
      <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
          <input id="remember" type="checkbox" value=""
                 class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                 required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
          href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
      </div>
      <button type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Submit
      </button>
    </form>

  </div>

</template>
<script setup>
import {onMounted} from "vue";
import {initPopovers} from "flowbite";

onMounted(() => {
  initPopovers();
})
</script>
<script>
export default {
  data() {
    return {
      value1: '',
      isDark: false
    }
  },
  methods: {
    open1() {
      this.$notify({
        title: 'Success',
        message: 'This is a success message',
        type: 'success'
      });
    },

    open2() {
      this.$notify({
        title: 'Warning',
        message: 'This is a warning message',
        type: 'warning',
        customClass: 'notification',
        duration: 100000
      });
    },

    open3() {
      this.$notify.info({
        title: 'Info',
        message: 'This is an info message'
      });
    },
    open4() {
      this.$notify.error({
        title: 'Error',
        message: 'This is an error message'
      });
    }
  }
}
</script>

<style>
@tailwind base;
@tailwind components;
@tailwind utilities;
.dark .dark\:notification {
  background-color: #1f2937 !important;
  color: #fff;
}
</style>
