<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>회원가입</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h4>회원가입</h4>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="name">이름</label>
                    <input type="text" class="form-control" placeholder="이름을 입력하세요" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="email">이메일</label>
                    <input type="email" class="form-control" placeholder="이메일을 입력하세요" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">비밀번호</label>
                    <input type="text" class="form-control" placeholder="비밀번호를 입력하세요" name="password" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">가입하기</button>
                </div>

                <br>
                <a href="login">로그인하기</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
