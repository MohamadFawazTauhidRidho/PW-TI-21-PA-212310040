<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['students'] as $index => $result)
            <tr>
                <td>{{$index+1 }}</td>
                <td>{{$result['npm'] }}</td>
                <td>{{$result['name'] }}</td>
                <td>{{$result['gender'] }}</td>
                <td>{{$result['alamat'] }}</td>
            <tr>
            @endforeach
        </tbody>
    </table>
</div>