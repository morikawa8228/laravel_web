<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- bootstrap読み込み -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>社員名簿Web管理システム</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 alert alert-dark w-50 mt-5 ml-5 mx-auto text-center">
                    <table class="table">
                        <tr>
                            <th>社員ID</th>
                            <th>社員名</th>
                            <th>所属セクション</th>
                            <th>メールアドレス</th>
                            <th>性別</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <!-- メニュー画面へ -->
                <button type="button" class="btn btn-link mt-3 ml-5" onclick="location.href='./menu'">メニュー画面</button><br>
            </div>
        </div>
        <!-- bootstrap読み込み -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>