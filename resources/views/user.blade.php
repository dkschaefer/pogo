<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
</head>
<body>
	<h1>{{ $user->name }}</h1>
	<ul>
		@foreach ($user->posts as $post)
			<li>{{ $post->title }}</li>
		@endforeach
	<ul>
</body>
</html>