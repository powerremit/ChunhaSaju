<script>
    $(function () {
        $('.join_btn').on('click', function () {
            _cmn.ajax.exec({
                url:'/api/member/insert_member',
                data: {
                    id: $('#id').val(),
                    pw: $('#pw').val(),
                    pw_confirm: $('#pw_confirm').val(),
                    name: $('#name').val(),
                    email: $('#email').val(),
                    tel: $('#tel').val(),
                    birthday: $('#birthday').val(),
                    [_cmn.ajax.csrf_token_name]: _cmn.ajax.csrf_token,
                },
                success:function (res) {
                    console.log(res)
                }

            })
        })
    })
</script>