<x-layout>
    <x-header />
    <div
        class="bg-[rgba(254,248,255,1)] flex w-full items-stretch flex-wrap justify-between px-[65px] py-[77px] max-md:max-w-full max-md:px-5 max-md:py-10">
        <div class="container mx-auto flex items-center justify-between">
            <div class="w-full flex justify-center gap-[30px]">
                <div class="max-w-3xl w-full bg-white rounded-lg shadow-lg p-8 text-center">
                    <div
                        class="inline-flex justify-center items-center w-20 h-20 bg-[rgba(155,100,243,0.2)] rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[rgba(125,75,206,1)]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                    </div>

                    <h1 class="text-[rgba(38,45,61,1)] text-4xl font-Kufam font-normal max-md:text-[32px] mb-5">
                        Obrigado!</h1>

                    <p class="text-[rgba(38,45,61,1)] font-Kufam text-xl font-normal mb-8">
                        Recebemos seu formulário com sucesso. Agradecemos pelo seu interesse na ENGAGE.
                        Nossa equipe entrará em contato com você em breve.
                    </p>

                    <div class="text-[rgba(96,96,96,1)] font-Inter mb-8">
                        <p>Enquanto isso, explore mais sobre a nossa plataforma e descubra como podemos ajudar você a
                            atingir seus objetivos.</p>
                    </div>

                    <a href="{{ url()->previous() }}"
                        class="inline-block bg-[rgba(125,75,206,1)] min-h-[43px] items-center justify-center font-kufam text-base font-medium text-white px-6 py-3 rounded-[9px] hover:bg-[rgba(125,75,206,0.9)] transition-colors">
                        Voltar para a página anterior
                    </a>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>