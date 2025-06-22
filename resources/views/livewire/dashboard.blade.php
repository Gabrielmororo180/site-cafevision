<div class="m-10 flex flex-col min-w-2 divide-y text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class=" mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
      <div class="flex flex-col justify-between gap-8 mb-4 md:flex-row md:items-center">
        <div>
          <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            Análises recentes
          </h5>
          <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            Aqui você pode observar se as amostras foram aprovadas ou reprovadas com seus respectivos percentuais da quantidade dos tipos de cerejas
          </p>

            
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a  x-data x-on:click="$dispatch('open-modal', {  name: 'configuration' })"  type="button"
                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Configurar percentual de qualidade</a>
            </div>
      </div>
    </div>
      <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-visible sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <div class="fi-ta-ctn divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 ">
 
    
                       <table class="divide-y divide-gray-300 text-left table-auto min-w-full">
                            <thead>
                            <tr>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">ID</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Data</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Status</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">{{ __('Unripe') }}%</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">{{ __('Semi Ripe') }}%</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">{{ __('Ripe') }}%</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">{{ __('Overripe') }}%</p>
                                </th>
                                <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">{{ __('Dry') }}%</p>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($analyses as $analysis)
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ htmlspecialchars($analysis['id']) }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $analysis->created_at->format('d/m/Y H:i') }}
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <div class="w-max">
                                    @if($analysis['status']==0)
                                        <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-md select-none whitespace-nowrap text-red-900 bg-red-500/20">
                                        <span class="">Reprovado</span>
                                    @else
                                        <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-md select-none whitespace-nowrap text-green-900 bg-green-500/20">
                                        <span class="">Aprovado</span>
                                    @endif
                                    </div>
                                </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{   $analysis['unripe'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{  $analysis['semi_ripe'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $analysis['ripe'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $analysis['overripe'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $analysis['dry'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    

                                    <a href="{{ route('viewanalasy', ['id' => $analysis['id']]) }}">
                                        <button class="mt-2 px-3 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">
                                            Ver Análise
                                        </button>
                                    </a>
                                 </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                  </div>
           </div>
        </div>
     </div>
      <x-modal  name="configuration" class="max-w-[200px]">
        <x-slot:body>
          <livewire:define-metrics-modal>
        </x-slot:body>
    </x-modal>
  </div>

