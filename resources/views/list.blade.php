<h1>Members List</h1>

<form action="">
    <input type="text" name="name" placeholder="Search by name or email">


    <input type="radio" id="male" name="gender" value="male" placeholder="Search by name or email">
    <label for="male">male</label>
    <input type="radio" id="female" name="gender" value="female" placeholder="Search by name or email">
    <label for="female">female</label>
    <select name="caste">
        @foreach ($castes as $caste)
            <option value="{{ $caste->caste }}">{{ $caste->caste }}</option>
        @endforeach
    </select>
    <button type="submit">Search Caste</button>
</form>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Religion</td>
        <td>Caste</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>
    @foreach($data as $value)
    <tr>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['gender'] }}</td>
        <td>{{ $value['religion'] }}</td>
        <td>{{ $value['caste'] }}</td>

        <td><a href="{{ "delete/" . $value['id'] }}">delete</a></td>
        <td><a href="{{ "edit/" . $value['id'] }}">Add</a></td>
    </tr>
    @endforeach

</table>
