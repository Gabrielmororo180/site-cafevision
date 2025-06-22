<div>
    <div class="w-11/12 p-6 mx-auto md:max-w-lg bg-white rounded shadow">
        <div class="flex items-center justify-between pb-3 border-b">
            <h3 class="text-2xl font-bold">{{ __('Definir Percentuais') }}</h3>
            <button wire:click="closeModal" class="text-3xl font-light text-gray-700 cursor-pointer">&times;</button>
        </div>

        <div class="py-4">
            <form wire:submit.prevent="savePercentages">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                    <div class="mb-4">
                        <label for="ripe" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Maduro (%)') }}</label>
                        <input type="number" id="ripe" wire:model.live="ripe" min="0" max="100" step="0.1"
                            class="w-full px-3 py-2 text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('ripe') border-red-500 @enderror">
                        @error('ripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="semi_ripe" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Meio Maduro (%)') }}</label>
                        <input type="number" id="semi_ripe" wire:model.live="semi_ripe" min="0" max="100" step="0.1"
                            class="w-full px-3 py-2 text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('semi_ripe') border-red-500 @enderror">
                        @error('semi_ripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="unripe" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Verde (%)') }}</label>
                        <input type="number" id="unripe" wire:model.live="unripe" min="0" max="100" step="0.1"
                            class="w-full px-3 py-2 text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('unripe') border-red-500 @enderror">
                        @error('unripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="overripe" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Passado (%)') }}</label>
                        <input type="number" id="overripe" wire:model.live="overripe" min="0" max="100" step="0.1"
                            class="w-full px-3 py-2 text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('overripe') border-red-500 @enderror">
                        @error('overripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="dry" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Seco (%)') }}</label>
                        <input type="number" id="dry" wire:model.live="dry" min="0" max="100" step="0.1"
                            class="w-full px-3 py-2 text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('dry') border-red-500 @enderror">
                        @error('dry') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="button" wire:click="closeModal"
                        class="px-4 py-2 mr-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                        {{ __('Cancelar') }}
                    </button>
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-600 rounded-lg hover:bg-green-800 disabled:opacity-50 disabled:cursor-not-allowed">
                        {{ __('Salvar Percentuais') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
