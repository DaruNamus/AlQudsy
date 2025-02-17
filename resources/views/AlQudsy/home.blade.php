<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Al Qudsy</title>
    <style></style>
</head>
<body>
    {{-- NavBar --}}
    <div class="static inset-x-0 top-0 z-20 bg-background">
        <div class="container mx-auto">
          <nav aria-label="Main" data-orientation="horizontal" dir="ltr"
            class="relative z-10 flex max-w-max flex-1 items-center justify-center min-w-full">
            <div class="flex w-full items-center justify-between gap-12 py-4">
              <div>
                <a href="#"><img src="/images/placeholders/logos/wicked-word.svg" alt="Logo" class="h-8 w-auto" /></a>
              </div>
              {{-- <div style="position: relative">
                <ul data-orientation="horizontal"
                  class="group flex-1 list-none items-center justify-center space-x-1 hidden lg:flex" dir="ltr">
                  <li>
                    <button id="radix-:R0:-trigger-radix-:Rkb:" data-state="closed" aria-expanded="false"
                      aria-controls="radix-:R0:-content-radix-:Rkb:"
                      class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 group"
                      data-radix-collection-item="">
                      Platform<!-- -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down relative top-[1px] ml-1 h-3 w-3 transition duration-200 group-data-[state=open]:rotate-180"
                        aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                  </li>
                  <li>
                    <button id="radix-:R0:-trigger-radix-:R14b:" data-state="closed" aria-expanded="false"
                      aria-controls="radix-:R0:-content-radix-:R14b:"
                      class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 group"
                      data-radix-collection-item="">
                      Use cases<!-- -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down relative top-[1px] ml-1 h-3 w-3 transition duration-200 group-data-[state=open]:rotate-180"
                        aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                  </li>
                  <li>
                    <button id="radix-:R0:-trigger-radix-:R1kb:" data-state="closed" aria-expanded="false"
                      aria-controls="radix-:R0:-content-radix-:R1kb:"
                      class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 group"
                      data-radix-collection-item="">
                      Developers<!-- -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down relative top-[1px] ml-1 h-3 w-3 transition duration-200 group-data-[state=open]:rotate-180"
                        aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                  </li>
                  <li>
                    <button id="radix-:R0:-trigger-radix-:R24b:" data-state="closed" aria-expanded="false"
                      aria-controls="radix-:R0:-content-radix-:R24b:"
                      class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 group"
                      data-radix-collection-item="">
                      Resources<!-- -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down relative top-[1px] ml-1 h-3 w-3 transition duration-200 group-data-[state=open]:rotate-180"
                        aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                  </li>
                </ul>
              </div> --}}
              <div class="hidden items-center gap-4 lg:flex">
                <button
                  class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                  Log in</button><button
                  class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                  Start now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right ml-2 size-4">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </button>
              </div>
              <div class="flex items-center gap-4 lg:hidden">
                <button
                  class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10"
                  aria-label="Main Menu">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-menu size-4">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                  </svg>
                </button>
              </div>
            </div>
            <div class="absolute left-0 top-full flex justify-center"></div>
          </nav>
        </div>
      </div>

      {{-- Content 1 : Pondok Pesantren Al Qudsy --}}
      <section class="py-32">
        <div class="container mx-auto">
          <div class="grid items-center gap-8 lg:grid-cols-2">
            <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
              <h1 class="my-6 text-pretty text-3xl font-semibold lg:text-5xl">Al Qudsy</h1>
              <p class="mb-8 max-w-xl text-zinc-600 lg:text-lg">
                Pondok pesantren adalah sebuah institusi pendidikan Islam tradisional di Indonesia. Di pondok pesantren, santri tinggal dan belajar di bawah bimbingan ustadz (guru atau pemimpin pesantren).
              </p>
              <div class="flex w-full flex-col justify-center gap-2 sm:flex-row lg:justify-start">
                <a href="#content-2" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-zinc-900 text-white hover:bg-zinc-900/90 h-10 px-4 py-2 w-full sm:w-auto transition-all duration-300">
                  Baca Selengkapnya
                </a>
              </div>
            </div>
            <img src="{{ asset('images/edited01.jpg') }}" alt="placeholder hero"
              class="max-h-96 w-full rounded-md object-cover" />
          </div>
        </div>
      </section>

    {{-- Content 2 : Selengkapnya --}}
    <section class="py-32" id="content-2">
        <div class="container mx-auto">
          <div class="mx-auto mb-20 max-w-screen-md text-center">
            <h1 class="mb-6 text-4xl font-medium md:mb-11 md:text-7xl">
              Pondok Pesantren Al Qudsy
            </h1>
            <p class="font-medium md:text-lg">
                Jln. Pangeran Puger Gg. 5, No. 54, Demaan, Kudus
            </p>
          </div>
          <div class="mx-auto grid max-w-screen-lg gap-10 md:grid-cols-2">
            <div class="order-1 flex h-full items-center rounded-lg bg-zinc-100">
              <img src="{{ asset('images/edited02.jpg') }}" alt="placeholder"
                class="h-full w-full rounded-md object-cover" />
            </div>
            <div class="order-3 flex h-full items-center rounded-lg bg-zinc-100">
              <img src="{{ asset('images/edited03.jpg') }}" alt="placeholder"
                class="h-full w-full rounded-md object-cover" />
            </div>
            <div class="order-2 -mt-6 max-w-[412px] md:order-3">
              <p class="mb-6 text-sm text-zinc-600 md:mb-12">TPQ</p>
              <h3 class="mb-3 text-2xl font-medium md:mb-6">Dekat dengan Pusat Kota</h3>
              <p class="mb-6">
                Pondok Pesantren Al Qudsy terletak di Desa Demaan, Kabupaten Kudus, Jawa Tengah. Pesantren ini didirikan dengan tujuan utama untuk memperdalam pengetahuan dan pemahaman agama Islam bagi para santri. Di bawah bimbingan para kiai dan ustaz yang berkompeten, santri Al Qudsy mendapatkan pendidikan agama yang menyeluruh, meliputi studi Al Quran, hadis, fikih, dan tasawuf.
              </p>
            </div>
            <div class="order-4 -mt-6 max-w-[412px] md:order-3">
              <p class="mb-6 text-sm text-zinc-600 md:mb-12">Ruang Tamu</p>
              <h3 class="mb-3 text-2xl font-medium md:mb-6">Pengembangan Ilmu dan Akhlak</h3>
              <p class="mb-6">
                Selain memperdalam ilmu agama, Pondok Pesantren Al Qudsy juga mengajarkan santri untuk mengembangkan akhlak mulia dan menerapkan nilai-nilai Islam dalam kehidupan sehari-hari. Para santri tinggal di asrama yang berada di dalam kompleks pesantren, sehingga mereka dapat mengikuti kegiatan belajar dan ibadah secara intensif dan berkesinambungan.
              </p>
            </div>
          </div>
        </div>
      </section>

    {{-- Content 3 : Pembelajaran --}}

    <section class="py-32">
        <div class="container mx-auto">
          <div
            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-6">
            Materi
          </div>
          <h2 class="text-3xl font-medium">{{ $count }} Materi Yang Diberikan</h2>
          <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-8"></div>
          <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($materi_pembelajaran as $materi)
            <div class="flex gap-3">
              <div>
                <h3 class="text-lg font-medium">{{ $materi->judul }}</h3>
                <p class="leading-7 text-zinc-600">
                    {{ $materi->deskripsi }}
                </p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

    {{-- Content 4 : Pengajar --}}
    <section class="py-32">
        <div class="container flex flex-col items-center text-center mx-auto">
          <p class="semibold">Berkenalan dengan</p>
          <h2 class="my-6 text-pretty text-2xl font-bold lg:text-4xl">Tenaga Pendidik Kami</h2>
          <p class="mb-8 max-w-3xl text-zinc-600 lg:text-xl">
          </p>
        </div>
        <div class="container mt-16 grid gap-x-8 gap-y-16 md:grid-cols-2 lg:grid-cols-4 mx-auto">
          <div class="flex flex-col items-center">
            <img src="{{ asset ('images/pengajar/aliimroni.jpg') }}"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Ali Imroni</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="{{ asset ('images/pengajar/ulilalbab.jpg') }}"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Ulil Albab</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="/images/placeholders/minima/avatar-bw-3.jpg"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Mb. Hanik</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="{{ asset ('images/pengajar/nurafif.jpg') }}"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Nur Afif</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="{{ asset ('images/pengajar/kohirulanam.jpg') }}"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Khoirul Anam</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="{{ asset ('images/pengajar/kohirunamala.jpg') }}"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Khoirul Amala</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="/images/placeholders/minima/avatar-bw-1.jpg"
              class="relative flex shrink-0 overflow-hidden rounded-full mb-4 size-20 border md:mb-5 lg:size-24" />
            <p class="text-center font-medium">Cava Billah</p>
            <p class="text-center text-zinc-600">Role / Pendidikan</p>
          </div>
        </div>
      </section>

      {{-- Footer --}}
      <section class="py-32">
        <div class="container mx-auto">
          <footer>
            <div class="grid grid-cols-2 gap-8 lg:grid-cols-6">
              <div class="col-span-2 flex h-full items-center justify-between md:items-start lg:col-span-3 lg:flex-col">
                <img src="/images/placeholders/logos/figma.svg" alt="logo alqudsy" class="h-7" />
                <ul class="flex items-center space-x-6 text-zinc-600">
                    <p>Jln. Pangeran Puger Gg. 5, No. 54, Demaan, <br> Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah</p>
                </ul>
              </div>
              <div data-orientation="horizontal" role="none"
                class="shrink-0 bg-border h-[1px] w-full col-span-2 my-6 lg:hidden"></div>
              <div>
                <h3 class="mb-4 font-bold">Contact</h3>
                <ul class="space-y-4 text-zinc-600">
                  <li class="font-medium hover:text-gray-800"><a target="_blank" rel="noopener noreferrer" href="http://wa.me/6281326688919">Whatsapp</a></li>
                  <li class="font-medium hover:text-gray-800"><a target="_blank" rel="noopener noreferrer" href="https://maps.app.goo.gl/1BHYULczPzko3yWX6">Google Maps</a></li>
                </ul>
              </div>
            </div>
            <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-14 lg:my-10"></div>
            <div class="flex flex-col justify-between gap-4 text-sm font-medium text-zinc-600 md:flex-row md:items-center">
              <p>© 2024 Wickedblocks. All rights reserved.</p>
            </div>
          </footer>
        </div>
      </section>
</body>
</html>