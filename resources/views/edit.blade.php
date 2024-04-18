<h1>Member list</h1>
<form action="{{ route("customer.add") }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input type="text" name="id" value="{{ $data->id }}" >
    <input type="text" name="name" placeholder="enter user name" value="{{ $data->name }}">
    <input type="text" name="email" placeholder="enter user email" value="{{ $data->email }}">
    <button type="submit">Add</button>

</form>
