!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>datos</title>
</head>
<body>
	Bien
</body>
</html>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif

@if (session('alertDamage'))
    <div class="alert alert-danger">
        {{ session('alertDamage') }}
    </div>
@endif