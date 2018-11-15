<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <title></title>
</head>
 
<body>
    <h1>Users List</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Joined Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</body>
 
</html>