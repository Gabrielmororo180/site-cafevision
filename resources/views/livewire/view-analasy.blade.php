<div class="m-10 bg-white p-6 rounded-xl shadow-md">
    <div class="flex items-center justify-between mb-6">
        <div class="mt-6">
        <a href="{{ route('dashboard') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md shadow-sm transition">
            ← {{ __('Voltar') }}
        </a>
    </div>

        <h2 class="text-xl font-bold">{{ __('Resultado da Análise') }}</h2>

        @if ($analysis['status'] == 0)
            <div class="inline-flex items-center px-3 py-1 text-xs font-bold uppercase text-red-900 bg-red-100 rounded-md">
                {{ __('Reprovado') }}
            </div>
        @else
            <div class="inline-flex items-center px-3 py-1 text-xs font-bold uppercase text-green-900 bg-green-100 rounded-md">
                {{ __('Aprovado') }}
            </div>
        @endif
    </div>

    {{-- Dados principais da análise --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 mb-6">
        <div>
            <label class="block text-sm font-medium text-gray-700">{{ __('Unripe') }} %</label>
            <input type="text" readonly value="{{ $analysis->unripe }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">{{ __('Semi Ripe') }} %</label>
            <input type="text" readonly value="{{ $analysis->semi_ripe }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">{{ __('Ripe') }} %</label>
            <input type="text" readonly value="{{ $analysis->ripe }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">{{ __('Overripe') }} %</label>
            <input type="text" readonly value="{{ $analysis->overripe }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">{{ __('Dry') }} %</label>
            <input type="text" readonly value="{{ $analysis->dry }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
        <div class="md:col-span-1">
            <label class="block text-sm font-medium text-gray-700">{{ __('Data da Análise') }}</label>
            <input type="text" readonly value="{{ $analysis->created_at->format('d/m/Y H:i') }}" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 text-sm" />
        </div>
    </div>

    {{-- Itens da Análise --}}
    <h3 class="text-lg font-bold mb-3">{{ __('Itens da Análise') }}</h3>

    @foreach ($items as $index => $item)
        <div class="mb-4 border rounded-lg p-4 bg-gray-50 shadow-sm">
            <h4 class="font-semibold text-sm mb-2">{{ __('Item') }} #{{ $index + 1 }}</h4>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-sm">
                <div>
                    <label class="text-gray-600">{{ __('Unripe') }} %</label>
                    <input type="text" readonly value="{{ $item->unripe }}" class="w-full bg-gray-100 rounded border border-gray-300" />
                </div>
                <div>
                    <label class="text-gray-600">{{ __('Semi Ripe') }} %</label>
                    <input type="text" readonly value="{{ $item->semi_ripe }}" class="w-full bg-gray-100 rounded border border-gray-300" />
                </div>
                <div>
                    <label class="text-gray-600">{{ __('Ripe') }} %</label>
                    <input type="text" readonly value="{{ $item->ripe }}" class="w-full bg-gray-100 rounded border border-gray-300" />
                </div>
                <div>
                    <label class="text-gray-600">{{ __('Overripe') }} %</label>
                    <input type="text" readonly value="{{ $item->overripe }}" class="w-full bg-gray-100 rounded border border-gray-300" />
                </div>
                <div>
                    <label class="text-gray-600">{{ __('Dry') }} %</label>
                    <input type="text" readonly value="{{ $item->dry }}" class="w-full bg-gray-100 rounded border border-gray-300" />
                </div>
                
            </div>
        </div>
    @endforeach

    {{-- Imagens --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
        <div>
             <label class="text-gray-600 text-sm">{{ __('Imagem 1') }}</label>
            <img src="{{ asset('storage/images/' . $analysis->image_1) }}" alt="Imagem 1" class="w-full h-auto rounded shadow" />
        </div>
        <div>
            <label class="text-gray-600 text-sm">{{ __('Imagem 2') }}</label>
            <img src="{{ asset('storage/images/' . $analysis->image_2) }}" alt="Imagem 2" class="w-full h-auto rounded shadow" />
        </div>
        <div>
            <label class="text-gray-600 text-sm">{{ __('Imagem 3') }}</label>
            <img src="{{ asset('storage/images/' . $analysis->image_3) }}" alt="Imagem 3" class="w-full h-auto rounded shadow" />
        </div>
    </div>



</div>
