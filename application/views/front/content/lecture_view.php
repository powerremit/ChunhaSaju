<section class="projects-section" id="">
    <div class="text-center l_list">
        <h1 class="mx-auto my-0">강의 목록</h1>
    </div>
    <hr>
    <div class="container px-4 px-lg-5">
        <? for ($i = 1; $i < 11; $i++) { ?>
            <div class="row gx-0 my-4 my-lg-5 lecture_list">
                <div class="col-lg-4 lecture_thumb_box">
                    <a href="javascript:void(0)"><img class="img-fluid mb-3 mb-lg-0 lecture_thumb"
                                                      src="/assets/img/demo-image-01.jpg"></a>
                </div>
                <div class="col-lg-6 lecture_title">
                    <a href="javascript:void(0)" class="l_title">
                        <div class="display-6">천하사주 제 <?= $i ?>강</div>
                        <div class="text-black">
                            사주는 인간 삶에 지혜를 준다. 사주를 통해 삶의 고통을 극복 하는 방법을 얻을 수 있다.
                            그러나 안타깝게도 엉터리 사주 풀이가 너무 많아 인류의 가장 위대한 학문인 사주학의 신뢰가 땅에 떨어졌다.
                            이에 바로잡아 모든 인류의 삶에 큰 도움이 되고자 한다.
                        </div>
                    </a>
                </div>
            </div>
            <hr>
        <? } ?>
    </div>
</section>

<style>

    .l_list {
        font-family: "Gowun Dodum", sans-serif;
        margin: 30px 0;
    }

    .lecture_thumb_box, .lecture_title {
        padding: 0 20px;
        vertical-align: top;
    }

    .lecture_thumb {
        border-radius: 20px;
    }

    .lecture_title {
        font-family: "Gowun Dodum", sans-serif;
        justify-content: flex-start; /* Ensures the content is aligned at the top */
        align-items: flex-start; /* Aligns items to the top */
        height: 100%;
    }

    .l_title {
        text-decoration: none;
        cursor: pointer;
    }

    .l_title > div:first-child {
        font-weight: bold;
        padding-bottom: 20px;
    }
</style>