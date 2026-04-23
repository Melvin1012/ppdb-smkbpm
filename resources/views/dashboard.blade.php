<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">My Dashboard</span>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-2 sidebar p-3">
      <h5 class="text-white">Menu</h5>
      <a href="#">Dashboard</a>
      <a href="#">Users</a>
      <a href="#">Reports</a>
      <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">
      <h3>Dashboard</h3>

      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card text-bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <p class="card-text fs-4">120</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card text-bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Sales</h5>
              <p class="card-text fs-4">Rp 15M</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card text-bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <p class="card-text fs-4">320</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="card mt-4">
        <div class="card-header">
          Recent Data
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td><span class="badge bg-success">Active</span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td><span class="badge bg-danger">Inactive</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
</div>

</body>
</html>