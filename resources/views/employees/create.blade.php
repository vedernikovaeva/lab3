<h1>Add New Employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="position" placeholder="Position" required>
    <input type="number" name="salary" placeholder="Salary" step="0.01" required>
    <input type="number" name="children" placeholder="Number of Children" required>
    <input type="number" name="experience" placeholder="Years of Experience" required>
    <button type="submit">Save</button>
</form>