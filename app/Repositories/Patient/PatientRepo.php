<?php

namespace App\Repositories\Patient;

use App\Models\Patient;

class PatientRepo implements PatientInterface
{
    protected Patient $model;

    public function __construct(Patient $model)
    {
        $this->model = $model;
    }

    public function index($filters = [])
    {
        $query = $this->model
            ->orderBy('id', 'desc')
            ->when(isset($filters['name']), function ($query) use ($filters) {
                $query->where('name', 'like', '%' . $filters['name'] . '%');
            })
            ->when(isset($filters['gender']), function ($query) use ($filters) {
                $query->where('gender', 'like', '%' . $filters['gender'] . '%');

            });

        return $query->paginate($filters['per_page'] ?? 10);
    }

    public function store(array $data)
    {
        $patient = new Patient();
        $patient->fill($data);
        $patient->save();

        return $patient;
    }

    public function show($patientId)
    {
        return $this->model->findOrFail($patientId);
    }

    public function update($patientId, array $data)
    {
        $patient = $this->model->findOrFail($patientId);
        $patient->fill($data);
        $patient->save();

        return $patient;
    }

    public function destroy($patientId)
    {
        $patient = $this->model->findOrFail($patientId);
        $patient->delete();
    }
}
