<!DOCTYPE html>
<html lang="en">
<head>
  <title>api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/my_laravel/public/css/style.css">
</head>
<body>
  <div class="container">
    <h2>新增資料</h2>
    <button type="button" class="btn btn-primary" onclick="location.href='/my_laravel/public/'">回首頁</button>
    <form action="{{route('bikes.store')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" class="form-control" id="usr" name="name">
      </div>
      <div class="form-group">
        <label for="ch">Chinese:</label>
        <input type="number" class="form-control" id="ch" name="chinese">
      </div>
      <div class="form-group">
        <label for="en">English:</label>
        <input type="number" class="form-control" id="en" name="english">
      </div>
      <div class="form-group">
        <label for="mt">Math:</label>
        <input type="number" class="form-control" id="mt" name="math">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">確定</button>
        <button type="reset" class="btn btn-warning">重置</button>
      </div>
    </form>
  </div>
</body>
</html>