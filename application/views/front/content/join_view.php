<section class="projects-section" id="">
    <div class="container px-4 px-lg-5">
        <form onsubmit="return false">
            <table>
                <tr>
                    <td><h2>회원가입</h2></td>
                </tr>
                <tr><td>아이디*</td></tr>
                <tr><td><input type="text" class="text" id="id"></td></tr>
                <tr><td>비밀번호*</td></tr>
                <tr><td><input type="password" class="text" id="pw"></td></tr>
                <tr><td>비밀번호 확인*</td></tr>
                <tr><td><input type="password" class="text" id="pw_confirm"></td></tr>
                <tr><td>이름*</td></tr>
                <tr><td><input type="text" class="text" id="name"></td></tr>
                <tr><td>이메일*</td></tr>
                <tr>
                    <td><input type="text" class="email" id="email"></td>
                </tr>
                <tr><td>생년월일*</td></tr>
                <tr><td><input type="date" class="text date_box" id="birthday"></td></tr>
                <tr><td>연락처*</td></tr>
                <tr><td><input type="text" class="text" id="tel"></td></tr>
                <tr><td><input type="button" value="가입하기" class="join_btn"></td></tr>
            </table>
        </form>
    </div>
</section>

<style>
    table {
        width: 280px;
        height: 550px;
        margin: auto;
    }
    .email {
        height: 32px;
        font-size: 15px;
        border: 0 lightgray;
        border-radius: 10px;
        outline: none;
        padding-left: 10px;
    }
    .text {
        width: 250px;
        height: 32px;
        font-size: 15px;
        border: 0 lightgray;
        border-radius: 10px;
        outline: none;
        padding-left: 10px;
    }
    .date_box {
        width: 100%;
        height: 32px;
        border: 1px solid lightgray;
        padding: 12px;
        margin: 8px 0px;
    }
    .join_btn {
        width: 100%;
        height: 40px;
        font-size: 15px;
        color: white;
        border-radius: 10px;
        border: 1px solid lightgray;
        outline: none;
        background-color:#4b7976;
        text-align:center;
        vertical-align: center;
    }

    .join_btn:hover {
        background-color: white;
        color: black;
        transition: color 0.5s;
    }
</style>