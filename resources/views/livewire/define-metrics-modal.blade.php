<div>
    <div class="w-11/12 p-6 mx-auto   md:max-w-lg">
        <div class="flex items-center justify-between pb-3 border-b">
            <h3 class="text-2xl font-bold">Define percentages</h3>
            <button wire:click="closeModal" class="text-3xl font-light text-gray-700 cursor-pointer">&times;</button>
        </div>
        <div class="py-4">
            <form wire:submit.prevent="savePercentages">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                    <div class="mb-4">
                        <label for="ripe" class="block mb-2 text-sm font-bold text-gray-700">Ripe (%):</label>
                        <input type="number" id="ripe" wire:model.live="ripe" min="0" max="100" step="0.1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('ripe') border-red-500 @enderror">
                        @error('ripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="semi_ripe" class="block mb-2 text-sm font-bold text-gray-700">Semi Ripe (%):</label>
                        <input type="number" id="semi_ripe" wire:model.live="semi_ripe" min="0" max="100" step="0.1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('semi_ripe') border-red-500 @enderror">
                        @error('semi_ripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="unripe" class="block mb-2 text-sm font-bold text-gray-700">Unripe (%):</label>
                        <input type="number" id="unripe" wire:model.live="unripe" min="0" max="100" step="0.1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('unripe') border-red-500 @enderror">
                        @error('unripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="overripe" class="block mb-2 text-sm font-bold text-gray-700">Overripe (%):</label>
                        <input type="number" id="overripe" wire:model.live="overripe" min="0" max="100" step="0.1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('overripe') border-red-500 @enderror">
                        @error('overripe') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="dry" class="block mb-2 text-sm font-bold text-gray-700">Dry (%):</label>
                        <input type="number" id="dry" wire:model.live="dry" min="0" max="100" step="0.1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('dry') border-red-500 @enderror">
                        @error('dry') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex justify-end pt-6">
                    <button type="button" wire:click="closeModal" class="px-4 py-2 mr-2 text-gray-700 bg-transparent rounded-lg hover:bg-gray-100">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-600 rounded-lg hover:bg-green-800 disabled:opacity-50 disabled:cursor-not-allowed" >
                        Save Percentages
                    </button>
                </div>
            </form>
        </div>               
    </div>
</div>