<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Modules\Restaurant\Services\Employee\Create as CreateEmployeeService;
use Modules\Restaurant\Services\Employee\Update as UpdateEmployeeService;
use Modules\Restaurant\Http\Models\BooleanOption;
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Models\Employee;
use Modules\Restaurant\Http\Requests\Employees\StoreRequest;
use Modules\Restaurant\Http\Requests\Employees\UpdateRequest;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('restaurant::employees.index', ['employees' => Employee::with('visible', 'role')->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::employees.create', [
            'employee_roles' => EmployeeRole::all(),
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->getCreateEmployeeService()->save($request->all());

        return redirect()->route('restaurant.employee.index')->withStatus(__('restaurant::lang.employee_create_message'));
    }

    public function edit(Employee $employee)
    {
        $employee->with('visible', 'highlight', 'category');

        return view('restaurant::employees.edit', [
            'employee_roles' => EmployeeRole::all(),
            'employee' => $employee,
        ]);
    }

    public function update(UpdateRequest $request, Employee $employee): RedirectResponse
    {
        $this->getUpdateEmployeeService()->save($employee, $request->all());

        return redirect()->route('restaurant.employee.index')->withStatus(__('restaurant::lang.employee_updated_message'));
    }

    public function destroy(Employee $employee): RedirectResponse
    {
        try {
            $employee->delete();
        } catch (\Exception $e) {
            return redirect()->route('restaurant.employee.index')->withErrors(__('restaurant::lang.employee_fail_to_delete_message'));
        }

        return redirect()->route('restaurant.employee.index')->withStatus(__('restaurant::lang.employee_delete_message'));
    }

    private function getCreateEmployeeService(): CreateEmployeeService
    {
        return App::make('CreateEmployeeService');
    }

    private function getUpdateEmployeeService(): UpdateEmployeeService
    {
        return App::make('UpdateEmployeeService');
    }
}
