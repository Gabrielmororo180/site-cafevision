<?php
namespace App\Http\Controllers;

use App\Models\AnalasyHistory;
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

   
   if ($request->hasFile('image_1')) {
        $file = $request->file('image_1');

        
         $timestamp = Carbon::now()->format('Ymd_His_v'); // Exemplo: 20250524_152130_123
        $extension = $file->getClientOriginalExtension();
        $filename = $timestamp . '.' . $extension;

        // Salva no disco public/images
        $file->storeAs('public/images', $filename);

        $data['image_1'] = $filename;
    }

    // Cria o registro no banco
    $analasy = AnalasyHistory::create($data);

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
