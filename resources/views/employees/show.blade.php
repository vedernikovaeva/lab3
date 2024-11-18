<h1>Employee Details</h1>

<p><strong>Name:</strong> {{ $employee->name }}</p>
<p><strong>Position:</strong> {{ $employee->position }}</p>
<p><strong>Salary:</strong> ${{ $employee->salary }}</p>
<p><strong>Children:</strong> {{ $employee->children }}</p>
<p><strong>Experience:</strong> {{ $employee->experience }} years</p>

<a href="{{ route('employees.index') }}">Back to List</a>
<a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
<form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>