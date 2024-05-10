<div class="container">
    <h2>Všetky produkty</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Akcie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success btn-sm">Upraviť</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
