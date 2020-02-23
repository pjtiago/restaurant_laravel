<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Reservation;
use Modules\Restaurant\Http\Requests\Reservations\StoreRequest;
use Modules\Restaurant\Http\Requests\Reservations\UpdateRequest;

class ReservationsController extends Controller
{
    public function index(Reservation $model)
    {
        return view('restaurant::reservations.index', ['reservations' => $model->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::reservations.create');
    }

    public function store(StoreRequest $request, Reservation $model): RedirectResponse
    {
        $model->create($request->merge(['start_date' => new \DateTimeImmutable('now')])->all());

        return redirect()->route('restaurant.reservation.index')->withStatus(__('Reservation successfully created.'));
    }

    public function edit(Reservation $reservation)
    {
        return view('restaurant::reservations.edit', compact('reservation'));
    }

    public function update(UpdateRequest $request, Reservation  $reservation): RedirectResponse
    {
        $reservation->update(
            $request->merge(['start_date' => new \DateTimeImmutable('now')])->all()
        );

        return redirect()->route('restaurant.reservation.index')->withStatus(__('Reservation successfully updated.'));
    }

    public function destroy($id): RedirectResponse
    {
        $reservation = Reservation::find($id);

        $reservation->delete();

        return redirect()->route('restaurant.reservation.index')->withStatus(__('Reservation successfully deleted.'));
    }
}
