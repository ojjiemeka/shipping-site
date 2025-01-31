@forelse ($clients as $client)
    <tr>
        <td>{{ $client->firstName }} {{ $client->lastName }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->address->address ?? 'N/A' }}</td>
        <td>{{ $client->address->city ?? 'N/A' }}</td>
        <td>{{ $client->address->state ?? 'N/A' }}</td>
        <td>{{ $client->address->zipCode ?? 'N/A' }}</td>
        <td>{{ $client->address->country ?? 'N/A' }}</td>
        <td>
            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="10" class="text-center">No clients found</td>
    </tr>
@endforelse 