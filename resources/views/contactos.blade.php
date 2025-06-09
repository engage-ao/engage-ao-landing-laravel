<x-layout>
  <x-header />
  <div
    class="bg-[rgba(254,248,255,1)] relative flex w-full items-stretch flex-wrap justify-between px-[65px] py-[77px] max-md:max-w-full max-md:px-5 max-md:py-10">
    <div class="container mx-auto flex justify-between">
      <main class="flex max-lg:flex-col w-full gap-[60px] justify-between max-md:max-w-full">
        <x-contactos.contact-info />
        <div class="bg-[rgb(210,210,210)] flex w-0.5 max-lg:w-[388px] h-[388px] max-lg:h-0.5 max-lg:mx-auto"
          role="separator"></div>
        <x-contactos.contact-form />
      </main>
    </div>
  </div>
  <x-footer />
</x-layout>