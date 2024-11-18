<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Add New Employee</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Children</th>
            <th>Experience</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->position }}</td>
            <td>${{ $employee->salary }}</td>
            <td>{{ $employee->children }}</td>
            <td>{{ $employee->experience }} years</td>
            <td>{{ $employee->creator->name ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('employees.show', $employee->id) }}">View</a>
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>