<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership bascat payment">
        <div class="container">
            <section class="bascat-info">
                <div class="section-header">
                    <h1>장바구니</h1>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 42px;">
                            <col style=" width: 100px;">
                            <col style=" width: 454px;">
                            <col style=" width: 94px;">
                            <col style=" width: 78px;">
                            <col style=" width: 82px;">
                            <col style=" width: 88px;">
                            <col style=" width: 108px;">
                            <col style=" width: 124px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="check" id="check">
                                    <label for="check" class="sr-only"></label>
                                </th>
                                <th>이미지</th>
                                <th>상품정보</th>
                                <th>판매가</th>
                                <th>수량</th>
                                <th>적립금</th>
                                <th>배송비</th>
                                <th>합계</th>
                                <th>선택</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="check" id="check-2">
                                    <label for="check-2" class="sr-only"></label>
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="/assets/images/membership/order_img01.jpg" alt="구매상품이미지">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">샘플아이템</a><br>
                                    <dl class="inline-dl">
                                        <dt>옵션</dt>
                                        <dd>00</dd>
                                    </dl>
                                </td>
                                <td>25,000원</td>
                                <td>
                                    <p class="count">
                                       1
                                        <button class="top">&and;</button>
                                        <button class="down">&or;</button>
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white">변경</a>
                                        </p>
                                    </div>
                                </td>
                                <td>250원</td>
                                <td>2,500원</td>
                                <td>27,500원</td>
                                <td>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white" role="button">주문하기</a>
                                            <a href="#" class="btn btn-white" role="button">장바구니담기</a>
                                            <a href="#" class="btn btn-white" role="button">삭제</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>상품구매금액 59,000 + 배송비 0 = <strong>59,000원</strong></p>
                    <p>상품의 옵션 및 수량 변경은 상품상세 또는 장바구니에서 가능합니다</p>
                </div>
                <div class="user-info">
                    <h2>주문자정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="an-orderer">주문하시는 분</label></th>
                                    <td><input type="text" id="an-orderer" class="an-orderer"></td>
                                </tr>
                                <tr>
                                    <th><label for="orderer-addr1">주소</label></th>
                                    <td>
                                        <input type="text" id="orderer-addr1" class="address">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white" role="button">우편번호찾기</a>
                                            </p>
                                        </div>
                                        <input type="text" id="orderer-addr2" class="addr">
                                        <label for="orderer-addr2">기본주소</label>
                                        <input type="text" id="orderer-addr3" class="addr">
                                        <label for="orderer-addr3">나머지 주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>일반전화</th>
                                    <td>
                                        <select id="orderer-tel1">
                                            <option value="">02</option>
                                        </select> -
                                        <input type="text" id="orderer-tel2" class="tel"> -
                                        <label for="orderer-tel2" class="sr-only">전화번호</label>
                                        <input type="text" id="orderer-tel3" class="tel">
                                        <label for="orderer-tel3" class="sr-only">전화번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>휴대전화</th>
                                    <td>
                                        <select id="orderer-phone">
                                            <option value="">010</option>
                                        </select> -
                                        <input type="text" id="orderer-phone2" class="phone"> -
                                        <label for="orderer-phone2" class="sr-only">휴대번호</label>
                                        <input type="text" id="orderer-phone3" class="phone">
                                        <label for="orderer-phone3" class="sr-only">휴대번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td>
                                        <input type="mail" id="orderer-mail2" class="mail"> @
                                        <label for="orderer-mail2" class="sr-only">이메일주소</label>
                                        <input type="text" id="orderer-mail3" class="mail">
                                        <label for="orderer-mail3" class="sr-only">도메인</label>
                                        <select id="orderer-mail">
                                            <option value="">google.com</option>
                                        </select>
                                        <p>
                                            이메일을 통해 주문처리과정을 보내드립니다. <br> 이메일 주소란에는 반드시 수신가능한 이메일주소를 입력해 주세요.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="orderer-pw">주문조회 비밀번호</label></th>
                                    <td>
                                        <input type="password" id="orderer-pw" class="pw">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="confirm-pw">주문조회 비밀번호 확인</label></th>
                                    <td>
                                        <input type="password" id="confirm-pw" class="pw">
                                    </td>
                                </tr>
                                <tr>
                                    <th>비회원 구매 및 결제<br>개인정보취급방침</th>
                                    <td>
                                        <p>비회원 구매 및 결제 개인정보취급방침에 대하여 동의합니다.</p>
                                        <input type="radio" id="consent" class="radio">
                                        <label for="consent">동의함</label>
                                        <input type="radio" id="not-consent" class="radio">
                                        <label for="not-consent">동의안함</label>
                                        <textarea id="privacy"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="addr-info">
                    <h2>배송지정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>배송지 선택</th>
                                    <td>
                                        <input type="radio" id="same" class="radio">
                                        <label for="same">주문자 정보와 동일</label>
                                        <input type="radio" id="new-addr" class="radio">
                                        <label for="new-addr">새로운배송지</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="addressee">받으시는 분</label></th>
                                    <td>
                                        <input type="text" id="addressee" class="addressee">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="addressee-1">주소</label></th>
                                    <td>
                                        <input type="text" id="addressee-1" class="addressee-1">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white" role="button">우편번호찾기</a>
                                            </p>
                                        </div>
                                        <input type="text" id="addressee-2" class="addr">
                                        <label for="addressee-2">기본주소</label>
                                        <input type="text" id="addressee-3" class="addr">
                                        <label for="addressee-3">나머지 주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>일반전화</th>
                                    <td>
                                        <select id="orderer-tel1">
                                            <option value="">02</option>
                                        </select> -
                                        <input type="text" id="orderer-tel2" class="tel"> -
                                        <label for="orderer-tel2" class="sr-only">전화번호</label>
                                        <input type="text" id="orderer-tel3" class="tel">
                                        <label for="orderer-tel3" class="sr-only">전화번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>휴대전화</th>
                                    <td>
                                        <select id="orderer-phone">
                                            <option value="">010</option>
                                        </select> -
                                        <input type="text" id="orderer-phone2" class="phone"> -
                                        <label for="orderer-phone2" class="sr-only">휴대번호</label>
                                        <input type="text" id="orderer-phone3" class="phone">
                                        <label for="orderer-phone3" class="sr-only">휴대번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>배송메세지</th>
                                    <td>
                                        <textarea id="message"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
