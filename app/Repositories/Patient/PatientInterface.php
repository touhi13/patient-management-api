<?php

namespace App\Repositories\Patient;
interface PatientInterface
{
    public function index(array $data);
    public function store(array $data);
    public function show($patientId);
    public function update($patientId, array $data);
    public function destroy($patientId);
}
