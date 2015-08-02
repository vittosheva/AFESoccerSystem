@if (count($messages) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($messages->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif