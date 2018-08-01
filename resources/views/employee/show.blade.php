@extends('layout.mainlayout')

@section("body")
    <div class="container">
        <p>Angajati</p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nume</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)

                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td align="right">
                            <button type="button" class="btn btn-success" onclick="location.href='{{route('destroyEmployee', [$employee->id, $companyId])}}'">Delete</button>
                            <button type="button" class="btn btn-primary" onclick="location.href='{{route('employeeEdit', [$companyId, $employee->id])}}'">Update</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
