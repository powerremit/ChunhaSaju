<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>천하사주-설암</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">



    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <!-- CUSTOM STYLE -->
    <script type="text/javascript" src="/assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script type="text/javascript" src="/assets/js/loading.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!--    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->
</head>

<!--
 You can change the color scheme of the page. Just change the class of the <body> tag.
 You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark"
 -->

<!--
Each element is able to have its own background or text color. Just change the class of the element.
You can use this class:
"background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary"
"text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
-->

<script>
    $(function () {
        // 스크롤 이벤트 리스너
        window.addEventListener('scroll', () => {
            // 스크롤 위치가 100px 이상일 때 위로 가기 버튼을 보이게 함
            if (
                document.body.scrollTop > 100 ||
                document.documentElement.scrollTop > 20
            ) {
                document.getElementById('btn-back-to-top').style.display = 'block';
            } else {
                document.getElementById('btn-back-to-top').style.display = 'none';
            }
        });

        // 클릭 시 페이지 맨 위로 스크롤
        function backToTop3() {
            window.scrollTo({ top: 0, behavior: 'smooth' });  // Smooth scrolls to the top
        }


        $('#btn-back-to-top').on('click', function () {
            backToTop3();
        })

    })
</script>
<style>
    #btn-back-to-top {
        display: none;  /* Make sure it's not a block element */
        width: auto;  /* Prevent 100% width behavior */
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        border: none;
        outline: none;
        background-color: #555;
        color: white;
        cursor: pointer;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
    }

    #btn-back-to-top:hover {
        background-color: #333;
    }

</style>
<body class="page-top">
    <?php echo $header?>
    <?php echo $contents?>
    <?php echo $contents_js?>
    <?php echo $common_js?>
    <?php echo $footer?>
    <button id="btn-back-to-top" title="위로 가기">Top</button>
</body>
</html>