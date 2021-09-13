<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">  
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>로그인</h3>

                    <form name="login" action="loginSave.php" method="POST">
                        <fieldset>
                            <legend class="ir_so">로그인 입력폼</legend>
                            <div class="member-box">
                                <div>
                                    <label youEmail>이메일</label>
                                    <input type="email" name="youEmail" class="input_write" placeholder="Sample@naver.com" auto>
                                </div>
                                <div>
                                    <label>비밀번호</label>
                                    <input type="youPass" name="youPass" class="input_write" placeholder="">
                                </div>
                        </fieldset>
                        <button id="joinBtn" type="btn_submit">로그인</button>
                    </form>

                    <p class="info">* 새로오신 분들은 회원가입을 먼저 해주세요! <a href="join.php">회원가입</a></p>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>