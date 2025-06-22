<?php
namespace App\Http\Controllers;

use App\Models\AnalasyHistory;
use App\Models\AnalasyHistoryItem;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AnalasyController extends Controller
{
    public function index()
    {
        return AnalasyHistory::all();
    }

    public function store(Request $request)
{
    $data = $request->all();

    // Salva imagens
   foreach (['image_1', 'image_2', 'image_3'] as $imageField) {
        if ($request->hasFile($imageField)) {
            $file = $request->file($imageField);

            // Gera nome único baseado no timestamp
            $timestamp = Carbon::now()->format('Ymd_His_v');
            $filename = "{$imageField}_{$timestamp}." . $file->getClientOriginalExtension();

            // Salva em storage/app/public/images
            $file->storeAs('images', $filename, 'public');

            // Armazena o nome no array de dados (ex: para salvar no banco)
            $data[$imageField] = $filename;
        }
    }

    // Cria o AnalasyHistory
    $analasy = AnalasyHistory::create($data);

    $jsonKeys = ['j_imagem1', 'j_imagem2', 'j_imagem3'];

    foreach ($jsonKeys as $index => $jsonKey) {
        if (!empty($data[$jsonKey])) {
            $jsonArray = json_decode($data[$jsonKey], true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return response()->json(['error' => 'JSON inválido em ' . $jsonKey], 422);
            }
            $valoresExtraidos = $this->extrairClassCounts($jsonArray);
            AnalasyHistoryItem::create(array_merge([
                'id_analasy_history' => $analasy->id,
                'json' => json_encode($jsonArray),
                'num' => $index + 1,
            ], $valoresExtraidos));
        }
    }



    return response()->json($analasy, 201);


     
  }

    function extrairClassCounts(array $json): array
    {
        $classes = ['unripe', 'semi_ripe', 'ripe', 'overripe', 'dry'];

        $classCounts = $json['class_counts'] ?? [];

        return collect($classes)->mapWithKeys(function ($key) use ($classCounts) {
            return [$key => $classCounts[$key] ?? 0];
        })->toArray();
    }


    
    public function show($id)
    {
        return AnalasyHistory::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $analasy = AnalasyHistory::findOrFail($id);
        $analasy->update($request->all());
        return $analasy;
    }

    public function destroy($id)
    {
        AnalasyHistory::destroy($id);
        return response()->json(null, 204);
    }
}
