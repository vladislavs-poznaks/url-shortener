<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordStoreRequest;
use App\Models\Record;
use Illuminate\Support\Str;

class RecordsController extends Controller
{
    public function create()
    {
        return view('records.create');
    }

    public function store(RecordStoreRequest $request)
    {
        $record = Record::query()
            ->where([
                'url' => $request->get('url')
            ])
            ->first();

        if (is_null($record)) {
            while (true) {
                $hash = Str::random(config('url.hash.length'));

                if (Record::query()->where('hash', $hash)->exists() === false) {
                    break;
                }
            }

            $record = Record::create(array_merge($request->validated(), [
                'hash' => $hash
            ]));
        }

        return view('records.create', [
            'record' => $record
        ]);
    }

    public function redirect(Record $record)
    {
        return redirect($record->url);
    }
}
