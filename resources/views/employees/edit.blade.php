<h1>Edit Employee</h1>
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $employee->name }}" required>
    <input type="text" name="position" value="{{ $employee->position }}" required>
    <input type="number" name="salary" value="{{ $employee->salary }}" step="0.01" required>
    <input type="number" name="children" value="{{ $employee->children }}" required>
    <input type="number" name="experience" value="{{ $employee->experience }}" required>
    <button type="submit">Update</button>
</form>