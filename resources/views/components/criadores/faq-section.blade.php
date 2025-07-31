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
            question: "Como posso me cadastrar na Engage?",
            answer: "Basta preencher um formulário com seus dados. Em seguida, passamos por uma avaliação e, se aprovado, seu perfil estará disponível para marcas.",
        },
        {
            question: "Preciso ter muitos seguidores para entrar na plataforma?",
            answer: "Não necessariamente. A Engage valoriza criadores com autenticidade, engajamento e qualidade de conteúdo — não apenas números.",
        },
        {
            question: "Como recebo pelos trabalhos realizados?",
            answer: "Os pagamentos são feitos de forma segura pela plataforma após a entrega e aprovação do conteúdo.",
        },
        {
            question: "Como são definidas as campanhas?",
            answer: "As marcas definem os objetivos e diretrizes da campanha. Você recebe um briefing claro e pode aceitar apenas os trabalhos que fizerem sentido para você.",
        },
        {
            question: "A Engage me ajuda a conseguir mais oportunidades?",
            answer: "Sim. Com seu perfil ativo na plataforma, você será encontrado por marcas interessadas no seu estilo de conteúdo e no seu público.",
        },
        {
            question: "Posso negociar os valores com a marca?",
            answer: "Sim. Você pode definir seu preço base no perfil e negociar valores com base no escopo da campanha.",
        },
        {
            question: "A plataforma cobra alguma taxa dos criadores?",
            answer: "A inscrição é gratuita. Em alguns casos, uma pequena comissão pode ser aplicada sobre pagamentos recebidos, mas sempre de forma transparente.",
        },
    ];
</script>