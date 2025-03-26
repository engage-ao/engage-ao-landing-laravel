<section class="bg-white flex w-full justify-between px-[65px] py-[77px] max-md:max-w-full max-md:px-5">
    <div class="container mx-auto flex flex-col items-center justify-between">
        <div class="w-full flex flex-col items-center max-md:max-w-full">
            <h2
                class="text-[rgba(38,45,61,1)] max-w-[582px] text-4xl font-Kufam font-normal text-center uppercase max-md:text-[32px] max-md:max-w-full">
                <span>O QUE A ENGAGE OFERECE PARA OS </span>
                <span class="text-[#9B64F3]">CRIADORES DE CONTÚDO</span>
                <span>?</span>
            </h2>
            <div x-data="{ features: features }"
                class="grid grid-cols-[repeat(2,1fr)] max-w-[1081px] gap-x-[60px] gap-y-10 max-md:grid-cols-[1fr] mt-[47px] max-md:max-w-full">
                <template x-for="feature in features" :key="feature . title">
                    <div class="relative">
                        <h3 x-text="feature.title" class="font-Inter text-lg text-[#280364] font-medium mb-4">
                        </h3>
                        <p x-text="feature.description" class="font-Inter text-sm text-black font-medium text-justify">
                        </p>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
    const features = [
        {
            title: "Conexão com Marcas Relevantes",
            description:
                "A plataforma facilita a descoberta de oportunidades com marcas alinhadas ao estilo, nicho e valores dos criadores, aumentando as chances de parcerias significativas e duradouras.",
        },
        {
            title: "Pagamentos Seguros e Garantidos",
            description:
                "Os criadores podem confiar em um sistema que garante pagamentos pontuais, eliminando preocupações com atrasos ou inconsistências financeiras.",
        },
        {
            title: "Portfólio Profissional",
            description:
                "A ENGAGE oferece uma vitrine digital para os criadores exibirem seus trabalhos, com dados claros sobre engajamento e impacto, o que aumenta a visibilidade para as marcas.",
        },
        {
            title: "Oportunidades Globais",
            description:
                "Os criadores têm acesso a marcas de diferentes mercados, permitindo expandir suas redes e explorar colaborações internacionais.",
        },
        {
            title: "Feedback Estruturado",
            description:
                "Os criadores recebem relatórios claros sobre o desempenho de suas campanhas, ajudando a identificar pontos fortes e áreas de melhoria em suas colaborações.",
        },
    ];
</script>