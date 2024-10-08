<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">천하사주</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/#about">천하사주</a></li>
                <li class="nav-item"><a class="nav-link" href="/#projects">프로필</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">연락처</a></li>
                <li class="nav-item"><a class="nav-link <?=$this->uri->segment(1) == 'lecture' ? 'active' : ''?>" href="/lecture">교육과정</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)" id="loginBtn">로그인</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--로그인 팝업-->
<div id="loginModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="loginForm">
            <label for="username">ID</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">로그인</button>
            <div id="join_btn_div">
                <a href="/join" class="small" id="join_btn">회원가입</a>
            </div>
        </form>
    </div>
</div>

<style>
    #join_btn_div {
        display: flex;
        justify-content: flex-end;
        text-align: center;
    }
    #join_btn_div:hover{
        text-decoration-line: underline;
    }
    #join_btn {
        color: #1f1d1d;
        text-decoration-line: none;
        cursor: pointer;
    }

    /* Style the modal */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    }

    /* Modal Content */
    .modal-content {
        position: relative; /* Set position relative to make the close button's absolute position work */
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 400px;
    }

    /* Adjust the modal position for mobile devices */
    @media only screen and (max-width: 600px) {
        .modal-content {
            margin-top: 50%;  /* Push the modal lower to avoid the header */
            width: 90%;       /* Adjust width to fit mobile screens */
        }
    }

    /* Close button */
    .close {
        position: absolute;
        top: 10px;
        right: 20px; /* Position it 20px from the right */
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        cursor: pointer;
    }

    /* Input fields */
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Button */
    button {
        background-color: #64a19d;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

</style>
<script>
    // Get the modal
    var modal = document.getElementById('loginModal');

    // Get the button that opens the modal
    var btn = document.getElementById('loginBtn');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName('close')[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = 'block';
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Optionally handle the form submission
    document.getElementById('loginForm').onsubmit = function(event) {
        event.preventDefault();
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Do login verification here
        alert('Username: ' + username + '\nPassword: ' + password);

        // Close the modal after login
        modal.style.display = 'none';
    }

</script>