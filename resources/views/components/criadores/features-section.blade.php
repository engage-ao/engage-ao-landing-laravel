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
                "A plataforma conecta criadores de conteúdo a marcas que compartilham seus valores e interesses, facilitando parcerias autênticas e significativas.",
        },
        {
            title: "Monetização Justa e Transparente",
            description:
                "Monetize seu conteúdo com marcas que reconhecem seu valor. Na Engage, cada parceria é justa, transparente e paga com segurança.",
        },
        {
            title: "Portfólio Profissional",
            description:
                "Mostre seu trabalho com métricas reais de engajamento e impacto. Ganhe visibilidade e aumente suas chances de fechar parcerias com marcas.",
        },
        {
            title: "Feedback Estruturado",
            description:
                "Receba relatórios detalhados sobre cada campanha, entenda seu impacto e melhore suas parcerias futuras com dados reais.",
        },
        {
            title: "Suporte Dedicado",
            description:
                "A equipe da ENGAGE está sempre disponível para ajudar os criadores a maximizar seu potencial e resolver quaisquer dúvidas ou problemas.",
        },
    ];
</script>