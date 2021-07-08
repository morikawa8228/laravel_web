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
                <div class="alert-dark w-75 mt-5 ml-5 mx-auto">
                    <form class= "col align-self-center" method="POST" action="">
                        <!-- 社員ID入力エリア -->
                        <div class="form-group input-group">
                            <label class="pt-4 pr-5 pl-5">社員ID<span class="badge badge-danger ml-1">必須</span></label>
                            <input type="text" name="" class="form-control mt-3" placeholder="例) YZ12345678">
                        </div>
                        <!-- 社員名入力エリア -->
                        <div class="form-group input-group">
                            <label class="pt-4 pr-5 pl-5">社員名<span class="badge badge-danger ml-1">必須</span></label>
                            <input type="text" name="" class="form-control mt-3" placeholder="姓">
                            <label class="pt-4 pr-2 pl-2">社員名<span class="badge badge-danger ml-1">必須</span></label>
                            <input type="text" name="" class="form-control mt-3" placeholder="名">
                        </div>
                        <!-- 所属セクションエリア -->
                        <div class="form-group input-group">
                            <label class="pt-4 pr-4 pl-2">所属セクション<span class="badge badge-danger ml-1">必須</span></label>
                            <select name="" class="form-control mt-3">姓
                                <option value=""></option>
                                <option value="シス開">シス開</option>
                                <option value="グロカル">グロカル</option>
                                <option value="ビジソル">ビジソル</option>
                            </select>
                        </div>
                        <!-- メールアドレスエリア -->
                        <div class="form-group input-group">
                            <label class="pt-4 pr-4 pl-2">メールアドレス<span class="badge badge-danger ml-1">必須</span></label>
                            <input type="email" name="" class="form-control mt-3" placeholder="例) taro_yaz@yaz.co.jp">
                        </div>
                        <!-- 性別エリア -->
                        <div class="form-group input-group">
                            <label class="pt-4 pr-4 pl-5">性別<span class="badge badge-danger ml-1">必須</span></label>
                            <div class="form-check form-check-inline mt-3 mr-5 ml-5">
                                <input type="radio" class="form-check-input" id="exampleRadio2" name="radio">
                                <label class="form-check-label">男性</label>
                            </div>
                            <div class="form-check form-check-inline mt-3 ml-5">
                                <input type="radio" class="form-check-input" id="exampleRadio3" name="radio">
                                <label class="form-check-label">女性</label>
                            </div>
                        </div>
                        <!-- 登録ボタン -->
                <button type="submit" class="btn btn-outline-secondary offset-5 mt-4 mr-5 mb-2 w-10 btn-sm send" onclick="location.href='./menu'">登録</button>
                    </form>
                </div>
                <!-- 登録ボタン -->
                <button type="submit" class="btn btn-outline-secondary offset-5 mt-4 mr-5 mb-2 w-10 btn-sm send" onclick="location.href='./menu'">登録</button>
                <!-- メニュー画面へ -->
                <button type="button" class="btn btn-link mt-3 ml-5" onclick="location.href='./menu'">メニュー画面</button><br>
            </div>
        </div>
        <!-- bootstrap読み込み -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>