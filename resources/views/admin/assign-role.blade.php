<!-- assign-role.blade.php -->

<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">
</head>
<body>

<form method="POST" action="{{ route('assign-role') }}">
    @csrf
    <div class="container">
        <h2>Associar</h2>

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id">                    
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="role">Selecionar:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="tecnicos">Técnicos</option>
                <option value="analistas">Analistas</option>
            </select>
        </div>

        <button type="submit">Associate</button>
    </div>
</form>

</body>
</html>
