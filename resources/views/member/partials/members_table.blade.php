<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">S/N</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">School</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $member->fullname }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->school->name }}</td>
            <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>