<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function events(): Collection
    {
        return Model::query()
            ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
            ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Model $model) {
                return [
                    'id' => $model->id,
                    'title' => $model->title,
                    'description' => $model->notes,
                    'date' => $model->scheduled_at,
                ];
            });
    }

    public function calendar()
    {


        return view('front.calendars');
    }
}
