<section class="snap-start" id="about-me">
    <div class="container">
        <div class=" lg:w-screen lg:h-screen flex m-[15px] pt-10  gap-[20px] lg:p-[40px] flex-col">
            <div class="text-5xl xl:text-[90px] font-extrabold text-center lg:mt-[20px]">
                about me.
            </div>
            <div class="text-center mx-auto xl:w-2/3">
                <p class="text-sm xl:text-base">
                    {{ $aboutMe }}
                </p>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:grid-rows-2 gap-6 auto-cols-min">
                <div>
                    <h2
                        class="text-3xl xl:text-[45px] font-extrabold lg:mt-[10px] xl:mb-[20px] xl:mt-[25px] text-center">
                        education
                    </h2>
                    <ol class="border-l border-neutral-300 dark:border-neutral-500">
                        <!--First item-->
                        @foreach ($educations as $education)

                        <li>
                            <div class="flex-start flex items-center pt-3">
                                <div
                                    class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    {{ $education['year'] }}
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">{{ $education['eduTitle'] }}</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    {{ $education['eduDesc'] }}
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                <div>
                    <h2
                        class="text-3xl xl:text-[45px] font-extrabold lg:mt-[10px] xl:mt-[25px] xl:mb-[20px] text-center">
                        work
                        experience</h2>
                    <ol class="border-l border-neutral-300 dark:border-neutral-500">
                        <!--First item-->
                        @foreach ($experiences as $experience)
                        <li>
                            <div class="flex-start flex items-center pt-3">
                                <div
                                    class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    {{ $experience['year'] }}
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">{{ $experience['eduTitle'] }}</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    {{ $experience['eduDesc'] }}
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>

            {{--
            <div class="flex gap-[30px]">
                <div class="flex flex-col w-full h-[min-content]">
                    <h2 class="text-[45px] font-extrabold mt-[25px] text-center">education</h2>
                    <ol class="border-l border-neutral-300 dark:border-neutral-500">
                        <!--First item-->
                        <li>
                            <div class="flex-start flex items-center pt-3">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    01.07.2021
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 1</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    scelerisque diam non nisi semper, et elementum lorem ornare.
                                    Maecenas placerat facilisis mollis. Duis sagittis ligula in
                                    sodales vehicula.
                                </p>
                            </div>
                        </li>

                        <!--Second item-->
                        <li>
                            <div class="flex-start flex items-center pt-2">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    13.09.2021
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 2</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Libero expedita explicabo eius fugiat quia aspernatur autem
                                    laudantium error architecto recusandae natus sapiente sit nam
                                    eaque, consectetur porro molestiae ipsam an deleniti.
                                </p>
                            </div>
                        </li>

                        <!--Third item-->
                        <li>
                            <div class="flex-start flex items-center pt-2">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    25.11.2021
                                </p>
                            </div>
                            <div class="ml-4 mt-2 pb-5">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 3</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit
                                    natus! Eum corporis illum nihil officiis tempore. Excepturi illo
                                    natus libero sit doloremque, laborum molestias rerum pariatur quam
                                    ipsam necessitatibus incidunt, explicabo.
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="flex flex-col  w-full h-[min-content]">
                    <div class="text-[45px] font-extrabold mt-[25px] text-center">work experience</div>
                    <ol class="border-l border-neutral-300 dark:border-neutral-500">
                        <!--First item-->
                        <li>
                            <div class="flex-start flex items-center pt-3">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    01.07.2021
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 1</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    scelerisque diam non nisi semper, et elementum lorem ornare.
                                    Maecenas placerat facilisis mollis. Duis sagittis ligula in
                                    sodales vehicula.
                                </p>
                            </div>
                        </li>

                        <!--Second item-->
                        <li>
                            <div class="flex-start flex items-center pt-2">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    13.09.2021
                                </p>
                            </div>
                            <div class="mb-6 ml-4 mt-2">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 2</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Libero expedita explicabo eius fugiat quia aspernatur autem
                                    laudantium error architecto recusandae natus sapiente sit nam
                                    eaque, consectetur porro molestiae ipsam an deleniti.
                                </p>
                            </div>
                        </li>

                        <!--Third item-->
                        <li>
                            <div class="flex-start flex items-center pt-2">
                                <div
                                    class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>
                                <p class="text-sm text-neutral-500 dark:text-neutral-300">
                                    25.11.2021
                                </p>
                            </div>
                            <div class="ml-4 mt-2 pb-5">
                                <h4 class="mb-1.5 text-xl font-semibold">Title of section 3</h4>
                                <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                                    Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit
                                    natus! Eum corporis illum nihil officiis tempore. Excepturi illo
                                    natus libero sit doloremque, laborum molestias rerum pariatur quam
                                    ipsam necessitatibus incidunt, explicabo.
                                </p>
                            </div>
                        </li>
                    </ol>

                </div>
            </div> --}}
        </div>
    </div>
</section>