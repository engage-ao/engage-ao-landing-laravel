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
            question: "A ENGAGE é segura para transações?",
            answer: "Sim, a ENGAGE implementa protocolos de segurança avançados para garantir que todas as transações sejam seguras. Utilizamos criptografia de ponta a ponta e sistemas de verificação para proteger os dados dos usuários.",
        },
        {
            question: "Posso cancelar minha conta a qualquer momento?",
            answer: "Absolutamente. Você tem total liberdade para cancelar sua conta quando desejar, sem taxas ou penalidades. Todos os seus dados serão removidos de nossos servidores após o cancelamento.",
        },
        {
            question: "É possível acompanhar os resultados das campanhas realizadas com criadores?",
            answer: "Sim, a plataforma oferece ferramentas analíticas detalhadas que permitem acompanhar o desempenho das campanhas em tempo real, incluindo métricas de engajamento, alcance e conversão.",
        },
        {
            question: "Como garantir que o criador escolhido atenda às expectativas?",
            answer: "A ENGAGE possui um sistema de avaliação e portfólio que permite verificar o histórico e qualidade do trabalho dos criadores.Além disso, oferecemos um processo de seleção rigoroso e contratos claros para garantir que as expectativas sejam atendidas.",
        },
        {
            question: "A plataforma oferece suporte ao usuário?",
            answer: "Sim, oferecemos suporte ao usuário 24/7 através de chat ao vivo, e-mail e telefone. Nossa equipe está sempre pronta para ajudar com qualquer dúvida ou problema que possa surgir.",
        },
    ];
</script>