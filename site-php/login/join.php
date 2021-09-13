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
        <? php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>회원가입</h3>
                    <div class="join-info">
                        <ul class="list">
                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                        </ul>
                    </div>
                    <h4>개인정보 수집 및 이용에 대한 안내</h4>
                    <div class="join-privacy">
                        <ul class="list">
                            <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                            <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                            <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                            <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                        </ul>
                    </div>
                    <form name="join" action="joinSave.php" method="POST">
                        <fieldset>
                            <legend class="ir_so">회원가입 입력폼</legend>
                            <div class="join-box">
                                <div>
                                    <label youEmail>이메일</label>
                                    <input type="email" name="youEmail" class="input_write" placeholder="Sample@naver.com" auto>
                                </div>
                                <div>
                                    <label>비밀번호</label>
                                    <input type="youPass" name="youPass" class="input_write" placeholder="">
                                </div>
                                <div>
                                    <label>비밀번호 확인</label>
                                    <input type="email" name="youPassC" class="input_write" placeholder="">
                                </div>
                                <div>
                                    <label youName>이름</label>
                                    <input type="text" name="youName" class="input_write"  maxlength="5" placeholder="">
                                </div>
                                <div>
                                    <label youName>생년월일</label>
                                    <input type="text" name="youBirth" class="input_write"  maxlength="5" placeholder="">
                                </div>
                                <div>
                                    <label for="youPhone">휴대폰 번호</label>
                                    <input type="text" name="youPhone" class="input_write"  maxlength="5" placeholder="">
                                </div>
                            </div>
                        </fieldset>
                        <button id="join-btn" type="submit">회원가입 완료</button>
                    </form>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        footer
    </footer>
    <!-- //footer -->
</body>
</html>