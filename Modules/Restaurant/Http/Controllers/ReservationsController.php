<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Reservation;
use Modules\Restaurant\Http\Requests\Reservations\StoreRequest;

class ReservationsController extends Controller
{
    public function index()
    {
        return view('restaurant::reservations.index');
    }

    public function create()
    {
        return view('restaurant::reservations.create');
    }

    public function store(StoreRequest $request, Reservation $model)
    {
        $model->create($request->merge(['start_date' => new \DateTimeImmutable('now')])->all());

        return redirect()->route('reservation.index')->withStatus(__('Reservation successfully created.'));
    }
}
