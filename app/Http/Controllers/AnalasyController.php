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

   
   foreach (['image_1', 'image_2', 'image_3'] as $imageField) {
        if ($request->hasFile($imageField)) {
            $file = $request->file($imageField);
            
            $timestamp = Carbon::now()->format('Ymd_His_v');
            $filename = "{$imageField}_{$timestamp}." . $file->getClientOriginalExtension();
            
            $file->storeAs('images', $filename, 'public');
            
            $data[$imageField] = $filename;
        }
    }

     $analasy = AnalasyHistory::create($data);

     
     if (isset($data['json_api']) && is_string($data['json_api'])) {
        $data['json_api'] = json_decode($data['json_api'], true);
    }


    // Cria o registro no banco
   

    return response()->json($analasy, 201);
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
