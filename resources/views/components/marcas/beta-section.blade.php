<section id="formulario"
    class="bg-[rgba(254,248,255,1)] flex w-full items-stretch flex-wrap justify-between px-[65px] py-[77px] max-md:max-w-full max-md:px-5">
    <div class="container mx-auto flex flex-col items-center justify-between">
        <div class="w-full flex flex-col justify-between max-md:max-w-full">
            <div class="text-[rgba(38,45,61,1)] text-4xl font-Kufam font-normal text-center max-md:max-w-full">
                Fique por dentro da ENGAGE em primeira mão
            </div>
            <div class="text-[rgba(38,45,61,1)] font-Kufam text-xl font-normal text-center mt-[17px] max-md:max-w-full">
                Lançamento exclusivo no dia <span class="font-bold">25 de Agosto de 2025 </span>.
                <br class="max-md:hidden" /> Apenas <span class="font-black">25 marcas</span>
                terão acesso antecipado à versão BETA. Esta é a sua oportunidade única!
            </div>
        </div>
        <div class="w-full flex justify-center mt-[58px] max-md:max-w-full max-md:mt-10">
            <div class="w-full hidden lg:block">
                <img src="{{ asset('assets/Group 42.png') }}" alt="Beta testing" class="w-full h-full object-cover" />
            </div>
            <div
                class="lg:-ml-10 max-w-md bg-white shadow-[2px_1px_2px_rgba(0,0,0,0.23)] border flex flex-col text-sm font-normal p-10 rounded-2xl border-[rgba(155,100,243,0.66)] border-solid max-md:max-w-full">
                <div class="text-[rgba(38,45,61,1)] font-Kufam text-[32px] font-medium">
                    Garanta agora o lugar da sua empresa
                </div>
                <div class="text-[rgba(38,45,61,1)] font-Inter text-sm font-medium mt-[20px]">
                    Preencha o formulário abaixo e assegure seu acesso privilegiado, sem custos e sem
                    riscos. Não deixe essa oportunidade escapar!
                </div>
                <form class="w-full" method="POST" action="{{ route('marcas.store') }}">
                    @csrf
                    <div class="flex flex-col items-stretch mt-[20px] gap-[10px]">
                        <label for="name" class="text-[rgba(88,88,88,1)] font-Kufam text-base font-normal">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome" value="{{ old('name') }}"
                            required
                            class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-full px-[13px] py-4 rounded-[9px] border-[rgba(88,88,88,0.32)] border-solid" />
                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col items-stretch mt-[15px] gap-[10px]">
                        <label for="email"
                            class="text-[rgba(88,88,88,1)] font-Kufam text-base font-normal">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite aqui seu email"
                            value="{{ old('email') }}" required
                            class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-full px-[13px] py-4 rounded-[9px] border-[rgba(88,88,88,0.32)] border-solid" />
                        @error('email')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col items-stretch mt-[15px] gap-[10px]">
                        <label for="phone"
                            class="text-[rgba(88,88,88,1)] font-Kufam text-base font-normal">Telefone</label>
                        <input type="hidden" name="country_code" id="country_code" value="{{ old('country_code') }}" />
                        <input type="tel" id="phone" name="phone" placeholder="9XX XXX XXX" value="{{ old('phone') }}"
                            class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-full px-[13px] py-4 rounded-[9px] border-[rgba(88,88,88,0.32)] border-solid" />
                        @error('phone')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex items-stretch max-md:flex-col gap-3 mt-[15px]">
                        <div class="flex flex-col items-stretch gap-[10px] w-full">
                            <label for="company_name"
                                class="text-[rgba(88,88,88,1)] font-Kufam text-base font-normal">Empresa</label>
                            <input type="text" id="company_name" name="company_name" placeholder="Nome da empresa"
                                value="{{ old('company') }}"
                                class="bg-[rgba(217,217,217,0.08)] border w-full text-[rgba(88,88,88,1)] px-[13px] py-[17px] rounded-[9px] border-[rgba(88,88,88,0.32)] border-solid" />
                            @error('company_name')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col items-stretch gap-[10px] w-full">
                            <label for="role"
                                class="text-[rgba(88,88,88,1)] font-Kufam text-base font-normal">Cargo</label>
                            <input type="text" id="role" name="role" placeholder="Seu cargo" value="{{ old('role') }}"
                                class="bg-[rgba(217,217,217,0.08)] border w-full text-[rgba(88,88,88,1)] px-[13px] py-[17px] rounded-[9px] border-[rgba(88,88,88,0.32)] border-solid" />
                            @error('role')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-[rgba(125,75,206,1)] w-full mt-[30px] min-h-[63px] font-Kufam text-base font-medium text-white rounded-[12px] uppercase text-center cursor-pointer hover:bg-[rgba(125,75,206,0.9)] transition-colors">
                        Garantir meu acesso
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    const input = document.querySelector("#phone");
    const countryCodeInput = document.querySelector("#country_code");
    const iti = window.intlTelInput(input, {
        initialCountry: "ao",
        preferredCountries: ["ao", "br", "pt"],
        separateDialCode: true,
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
    });

    input.addEventListener("change", () => {
        countryCodeInput.value = iti.getSelectedCountryData().dialCode;
    });

    // Set initial country code value
    countryCodeInput.value = iti.getSelectedCountryData().dialCode;
</script>