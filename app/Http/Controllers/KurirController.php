<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
class KurirController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        $kurirs = Kurir::latest()->paginate(10);
        return view('kurirs.index', compact('kurirs'));
    }

    public function create(): View
    {
        return view('kurirs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kurir' => 'required',
            'telepon' => 'required',
            'wilayah_operasi' => 'required',
        ]);

        Kurir::create($request->all());

        return redirect()->route('kurirs.index')->with('success', 'Kurir berhasil ditambahkan.');
    }

    public function show(Kurir $kurir): View
    {
        return view('kurirs.show', compact('kurir'));
    }

    public function edit(Kurir $kurir): View
    {
        return view('kurirs.edit', compact('kurir'));
    }

    public function update(Request $request, Kurir $kurir)
    {
        $request->validate([
            'nama_kurir' => 'required',
            'telepon' => 'required',
            'wilayah_operasi' => 'required',
        ]);

        $kurir->update($request->all());

        return redirect()->route('kurirs.index')->with('success', 'Kurir berhasil diperbarui.');
    }

    public function destroy(Kurir $kurir): RedirectResponse
    {
        $kurir->delete();

        return redirect()->route('kurirs.index')->with('success', 'Kurir berhasil dihapus.');
    }
}
