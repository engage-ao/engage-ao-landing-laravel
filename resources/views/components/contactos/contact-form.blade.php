<section class="self-stretch flex w-full flex-col items-stretch text-sm text-[rgba(210,210,210,1)] font-normal">
    <form method="POST" action="{{ route('contactos.store') }}" class="flex flex-col mx-auto">
        @csrf
        <div class="mb-[30px]">
            <label for="name" class="text-[rgba(88,88,88,1)] text-base font-Kufam block mb-[9px]">
                Nome
            </label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Digite seu nome"
                class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-96 max-w-full p-3.5
                rounded-[9px] border-solid max-md:pr-5 border-[rgba(88,88,88,0.32)]" />
            @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-[30px]">
            <label for="email" class="text-[rgba(88,88,88,1)] text-base font-Kufam block mb-[13px]">
                E-mail
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                placeholder="Digite seu Email"
                class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-96 max-w-full p-3.5 rounded-[9px] border-solid max-md:pr-5 border-[rgba(88,88,88,0.32)]" />
            @error('email')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-[30px]">
            <textarea id="message" name="message" value="{{ old('message') }}" placeholder="Mensagem" rows="6" required
                class="bg-[rgba(217,217,217,0.08)] border text-[rgba(88,88,88,1)] w-96 max-w-full p-[17px]
                rounded-[9px] border-solid max-md:pr-5 resize-none border-[rgba(88,88,88,0.32)]"></textarea>
            @error('message')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="bg-[rgba(125,75,206,1)] text-xl font-Kufam text-white whitespace-nowrap uppercase px-[70px] py-[19px] rounded-xl max-md:px-5 cursor-pointer hover:bg-[rgba(125,75,206,0.9)] transition-colors">
            ENVIAR
        </button>
    </form>
</section>