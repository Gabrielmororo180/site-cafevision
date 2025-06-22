<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Configuration;

class DefineMetricsModal extends Component
{
    public int $dry = 0;
    public int $overripe = 0;
    public int $ripe = 0;
    public int $semi_ripe = 0;
    public int $unripe = 0;

    public ?Configuration $config = null;

    protected function rules()
    {
        return [
            'dry'       => 'required|numeric|min:0|max:100',
            'overripe'  => 'required|numeric|min:0|max:100',
            'ripe'      => 'required|numeric|min:0|max:100',
            'semi_ripe' => 'required|numeric|min:0|max:100',
            'unripe'    => 'required|numeric|min:0|max:100',
        ];
    }

    protected $messages = [
        '*.required' => 'O campo é obrigatório.',
        '*.numeric'  => 'Deve ser um número.',
        '*.min'      => 'O valor mínimo é 0.',
        '*.max'      => 'O valor máximo é 100.',
    ];

    public function mount()
    {
        // Carrega o primeiro registro de configuração, se existir
        $this->config = Configuration::first();

        if ($this->config) {
            $this->dry       = $this->config->dry;
            $this->overripe  = $this->config->overripe;
            $this->ripe      = $this->config->ripe;
            $this->semi_ripe = $this->config->semi_ripe;
            $this->unripe    = $this->config->unripe;
        }
    }

    public function openModal()
    {
        $this->resetValidation();

        // Recarrega os dados da configuração se necessário
        if ($this->config) {
            $this->dry       = $this->config->dry;
            $this->overripe  = $this->config->overripe;
            $this->ripe      = $this->config->ripe;
            $this->semi_ripe = $this->config->semi_ripe;
            $this->unripe    = $this->config->unripe;
        } else {
            $this->reset(['dry', 'overripe', 'ripe', 'semi_ripe', 'unripe']);
        }
    }

    public function closeModal()
    {
        $this->dispatch('close-modal');
    }

    public function savePercentages()
    {
        $this->validate();

        if ($this->config) {
            // Atualiza se já existe
            $this->config->update([
                'dry'       => $this->dry,
                'overripe'  => $this->overripe,
                'ripe'      => $this->ripe,
                'semi_ripe' => $this->semi_ripe,
                'unripe'    => $this->unripe,
            ]);
        } else {
            // Cria novo se não existe
            $this->config = Configuration::create([
                'dry'       => $this->dry,
                'overripe'  => $this->overripe,
                'ripe'      => $this->ripe,
                'semi_ripe' => $this->semi_ripe,
                'unripe'    => $this->unripe,
            ]);
        }

        $this->dispatch('close-modal');
    }

    public function render()
    {
        return view('livewire.define-metrics-modal');
    }
}
