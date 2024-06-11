<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Resources\PatientResource;
use App\Repositories\Patient\PatientInterface;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    use ApiResponseTrait;

    private PatientInterface $repository;

    public function __construct(PatientInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $this->repository->index($request->all());
        return $this->ResponseSuccess($data, null, 'patients retrieved successfully', 200, 'success');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        $data = $this->repository->store($request->all());
        return $this->ResponseSuccess(new PatientResource($data), null, 'patient created successfully', 201, 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show($patientId)
    {
        $patient = $this->repository->show($patientId);
        return $this->ResponseSuccess(new PatientResource($patient), null, 'patient retrieved successfully', 200, 'success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePatientRequest $request, $patientId)
    {
        $patient = $this->repository->update($patientId, $request->all());
        return $this->ResponseSuccess(new PatientResource($patient), null, 'patient updated successfully', 200, 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($patientId)
    {
        $this->repository->destroy($patientId);
        return $this->ResponseSuccess(null, null, 'patient deleted successfully', 200, 'success');
    }

}
