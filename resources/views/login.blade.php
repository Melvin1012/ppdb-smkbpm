<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #9be15d;
      background: linear-gradient(135deg, #9be15d, #00e3ae);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      width: 300px;
      text-align: center;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
    }
    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #00b894;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }
    button:hover {
      background: #019875;
    }
    .links {
      margin-top: 10px;
      font-size: 0.9em;
    }
    .links a {
      color: #00b894;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login Aplikasi</h2>
    <form action="dashboard.html" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login </button>
    </form>
    <div class="links">
      <a href="#">Lupa password?</a> | <a href="#">Daftar</a>
    </div>
  </div>
</body>
</html>