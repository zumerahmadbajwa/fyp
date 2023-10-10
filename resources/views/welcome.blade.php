<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h2>Login Page</h2>
  <form action="{{ route('logins') }}" method="post">
    @csrf
    
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="login_type">Login As:</label>
    <select name="login_type" id="login_type">
      <option value="admin">Admin</option>
      <option value="student">Student</option>
    </select><br><br>
    
    <button type="submit">Login</button>
  </form>
</body>
</html>
