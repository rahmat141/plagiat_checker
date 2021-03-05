<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use PhpParser\JsonDecoder;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;

class CheckerPageController extends Controller
{
    public function index()
    {
        //ambil semua isi dari folder file_doc
        // $files = scandir(public_path('file_doc'));
        // $data = [];
        // foreach ($files as $row) {
        //     if ($row != '.' && $row != '..') {
        //         $data[] = [
        //             'name' => explode('.', $row)[0],
        //             'url' => asset('file_doc/' . $row)
        //         ];
        //     }
        // }
        // return view('checker', compact('data'));
        return view('checker');
    }
    


    public function store(Request $request)
    {
        $file = $request->file('file');
        $name = explode(".", $request->file('file')->getClientOriginalName());
        // $text = 'The text you are desperate to analyze :)';
        // $fileName = time() . '-' . strtoupper(Str::random(5)) . '.' . $file->extension();
        // DB::table('file_jawaban')->insert([
        //     'nama_file' => $name[0]
        // ]);
        $fileName = $name[0] . '.' . $file->extension();
        $file->move(public_path('storage'), $fileName);
        $response = Http::attach('file', file_get_contents('storage/'.$fileName), $fileName)->post('http://127.0.0.1:4000');
        if ($response->successful()) {
            return response()->json(['success' => $response]);
        }
        // $response = Http::attach('file', file_get_contents('photo.jpg'), 'photo.jpg')->post('http://127.0.0.1/upload');
        return response()->json(['failed' => $response]);
    }

    public function checker()
    {
        $response = Http::post('http://127.0.0.1:4000/check');
        if ($response->successful()) {
            $data = $response->json();
            return view('detail', $data);
        }
        return response()->json(['failed' => $response]);
    }
}
