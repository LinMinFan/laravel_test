<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
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
    <h2>學生資料表</h2>
    <div>
      <?php
      if (isset($result)) {
        echo "$result";
      }
      ?>
      </div>
    <button type="button" class="btn btn-primary" onclick="location.href='{{route('bikes.create')}}'">新增</button>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">name</th>
          <th class="text-center">Chinese</th>
          <th class="text-center">English</th>
          <th class="text-center">Math</th>
          <th class="text-center">操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $student)
            <tr>
              <td class="text-center">
                {{$student->name}}
              </td>
              <td class="text-center">
                {{$student->chinese}}
              </td>
              <td class="text-center">
                {{$student->english}}
              </td>
              <td class="text-center">
                {{$student->math}}
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-warning" onclick="location.href='{{route('bikes.create')}}'">編輯</button>
                <button type="button" class="btn btn-danger" onclick="location.href='{{route('bikes.create')}}'">刪除</button>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </body>
</html>

