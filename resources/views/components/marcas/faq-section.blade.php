<section
    class="bg-[rgba(254,248,255,1)] flex w-full items-stretch flex-wrap justify-between px-[65px] pb-[77px] max-md:max-w-full max-md:px-5">
    <div class="container mx-auto flex items-center justify-between">
        <div class="w-full flex flex-col justify-between">
            <h2 class="text-[rgba(38,45,61,1)] font-Kufam text-4xl font-normal max-md:text-center">
                Perguntas frequêntes
            </h2>
            <div class="w-full mt-[47px] max-md:mt-10" x-data="{ faqs: faqs }">
                <template x-for="faq in faqs" :key="faq . question">
                    <div @click="faq.open = !faq.open"
                        class="bg-white shadow-[2px_1px_2px_rgba(0,0,0,0.23)] flex w-full flex-col items-stretch justify-center mt-[15px] first:mt-0 px-4 py-[17px] rounded-[9px] max-md:max-w-full cursor-pointer">
                        <div class="rounded flex gap-5 w-full items-stretch justify-between max-md:max-w-full">
                            <div class="text-[rgba(104,112,118,1)] font-Inter text-xl font-normal"
                                x-text="faq.question"></div>
                            <div class="flex items-stretch">
                                <button class="text-[rgba(104,112,118,1)] font-Inter text-lg font-bold"
                                    @click="faq.open = !faq.open">
                                    <span x-show="!faq.open">+</span>
                                    <span x-show="faq.open">-</span>
                                </button>
                            </div>
                        </div>
                        <div x-show="faq.open" class="text-[rgba(104,112,118,0.8)] text-base mt-4" x-cloak
                            x-text="faq.answer">
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
    const faqs = [
        {
            question: "O que é a Engage e como pode ajudar minha marca?",
            answer: "A Engage conecta sua marca com criadores de conteúdo que falam com o teu público-alvo. Em vez de investir em publicidade tradicional ou influenciadores aleatórios, ajudamos você a promover seu negócio de forma mais autêntica e eficaz.",
        },
        {
            question: "E se o criador não atender às expectativas?",
            answer: "Oferecemos contratos claros, avaliações de desempenho e um processo de mediação caso algo fuja do combinado. Nossa prioridade é garantir a sua satisfação.",
        },
        {
            question: "Posso acompanhar os resultados das campanhas?",
            answer: "Sim. A Engage fornece métricas em tempo real sobre engajamento, alcance, visualizações, cliques e conversões.",
        },
        {
            question: "Quanto custa usar a Engage?",
            answer: "Você paga apenas pelos serviços contratados. Os preços são transparentes e definidos previamente, sem taxas ocultas.",
        },
        {
            question: "Não tenho tempo para negociar com influenciadores. A Engage ajuda nisso?",
            answer: "Sim. A plataforma centraliza todo o processo, da proposta à entrega do conteúdo, para que você não perca tempo com negociações individuais.",
        },
        {
            question: "A Engage oferece suporte?",
            answer: "Sim. Nosso time está disponível para ajudar você em todas as etapas, desde a escolha do criador até o fim da campanha.",
        },
    ];
</script>