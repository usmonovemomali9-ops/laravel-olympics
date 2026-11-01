<?php

namespace App\Http\Controllers;

use App\Models\Olympic;
use Illuminate\Http\Request;

class OlympicController extends Controller
{
    // Список всех олимпиад
    public function index()
    {
        $olympics = Olympic::all();
        return view('olympics.index', compact('olympics'));
    }

    // Форма создания
    public function create()
    {
        return view('olympics.create');
    }

    // Сохранение нового объекта
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1896|max:2100',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }

        Olympic::create($validated);

        return redirect()->route('olympics.index')
            ->with('success', 'Олимпиада добавлена!');
    }

    // Просмотр одного объекта
    public function show(Olympic $olympic)
    {
        return view('olympics.show', compact('olympic'));
    }

    // Форма редактирования
    public function edit(Olympic $olympic)
    {
        return view('olympics.edit', compact('olympic'));
    }

    // Обновление объекта
    public function update(Request $request, Olympic $olympic)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1896|max:2100',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }

        $olympic->update($validated);

        return redirect()->route('olympics.index')
            ->with('success', 'Олимпиада обновлена!');
    }

    // Удаление объекта
    public function destroy(Olympic $olympic)
    {
        $olympic->delete();
        return redirect()->route('olympics.index')
            ->with('success', 'Олимпиада удалена!');
    }
}