<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/uikit/3.0.0-beta.42/css/uikit.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/uikit/3.0.0-beta.42/js/uikit.js"></script>
    <title>Document</title>
    <style>

        .page2 {
            background-color: deepskyblue;
        }
        .page3 {
            background-color: deeppink;
        }
        .page4 {
            background-color: #0f7ae5;
        }
    </style>
</head>
<body>
<div class="uk-section page page1">
    <div class="uk-container">
        <table class="uk-table">
            <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>成绩</th>
            </tr>
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->age }}</td>
                <td>{{ $row->score }}</td>
            </tr>
        </table>
    </div>
</div>
</body>
<script>
    window.onload = function() {
      document.querySelectorAll('.page').forEach(function(e) {
        e.style.height = window.innerHeight + 'px'
      })
    }


    window.onresize = function() {
      document.querySelectorAll('.page').forEach(function(e) {
        e.style.height = window.innerHeight + 'px'
      })
    }
</script>
</html>
