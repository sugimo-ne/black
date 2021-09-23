<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="会社情報 | BLACK ONE">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.blackone8.com/">
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use,fontawesome.com/releases/v5.6.3/css/all.css"
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body>
        <div id="app">
            
            <?php get_header(); ?>

            <main>
                <section id="top" class="content content1">
                  <h2 class="message2">インフルエンサー事務所<br/>BLACK ONE</h2>
                    <h2 v-bind:class="{'message' : !open }">onlyone を世界へ<br/></h2>
                    <carousel :per-page="1" :autoplay-timeout="5000" :autoplay="true" :loop="true" :speed="1000">
                        <slide>
                          <span class="label zoom zoom-1">
                            <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/sample12.png" alt="">
                          </span>
                        </slide>
                        <slide>
                          <span class="label zoom zoom-1">
                            <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/sample9.png" alt="">
                            </span>
                        </slide>
                            <slide>
                          <span class="label zoom zoom-1">
                            <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/sample11.jpeg" alt="">
                          </span>
                        </slide>
                      </carousel>
                </section>
    
                <section id="intro" class="content content2">
                    <div class="content2-background"></div>
 
                        <h3 class="title">会社紹介</h3>
                        <p class="sub">あなたの魅力を世界に届ける</p>
                        <p class="sub2 absolute_center">BLACK ONEでは所属タレントを募集中<br/><br/>BLACK　ONEに所属して<br/>我々と世界に影響を与えよう</p>
                        <p class="text">昨今の世界を取り巻く環境や、通信技術の発達により、これから経済構造が変化し伸びていく、SNS、ライブ配信。<br/>そんな中、暗闇から抜け出せない若い世代の才能を活かして伸ばす。<br>それがBLACK ONE</p>
            
                </section>
                <section id="info" class="content content3">
                    <div class="content3-background"></div>
                        <h3 class="title">企業情報</h3>
                        <ul class="sub" style="text-align: left; font-size:24px !important">
                          <li>インフルエンサー事業</li>
                          <li>配信事業</li>
                          <li>システム開発事業</li>
                        </ul>
                        <div class="w-75 mx-auto">
                        <table class="table table-bordered" style="color:white">
                          <thead>
                            <tr>
                              <th>President</th>
                              <th>Keiya　Matsuzaki</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Tell</th>
                              <td>080-2265-3373</td>
                            </tr>
                            <tr>
                              <th scope="row">E-mail</th>
                              <td>8blackone@gmail.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                </section>

                <section id="talent" class="content content4">
      
                    <h3 class="p-5">タレント紹介</h3>
                    <div class="mt-5 row w-75 mx-auto">
                        <!-- <carousel :per-page="carouselContent "class="w-75 mx-auto" autoplay="true" loop="true" >
                            <slide v-for="talent in talents">
                               
                                  <div class="card mx-auto bg-dark" style="width: 18rem;">
                                    <img class="bd-placeholder-img card-img-top img-fluid" width="100%" height="320" :src="talent.img" />
                                    <div class="card-body">
                                      <h5 class="card-title">{{talent.name}}</h5>
                                      <p class="card-text">{{talent.description}}</p>
                                    </div>
                                  </div>
                                
                            </slide>
                          </carousel> -->
                          <div v-for="talent in talents" class="col-md-4">
                            <div class="card mt-3 bg-dark">
                              <img class="bd-placeholder-img card-img-top img-fluid" width="100%" height="180" :src="talent.img" />
                              <div class="card-body">
                                <h5 class="h6">{{talent.name}}</h5>
                                <p class="h6">{{talent.description}}</p>
                                <a href="talent.sns">{{talent.sns}}</a>
                              </div>
                            </div>
                          </div>
                    </div>
                </section>

                <section id="contact" class="content content5 mb-5 pb-5">
                  <h3 class="p-4">お問い合わせ</h3>
                <form action="" method="" class="form-horizontal w-75 mx-auto">
                  <div class="form-group">
                      <label class="col-sm-3 control-label" for="name1">お名前</label>
                    <div class="col-sm-6 text-center mx-auto">
                      <input v-model="form.name" type="text" class="form-control" name="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">メールアドレス</label>
                  <div class="col-sm-6 text-center mx-auto">
                    <input type="text" v-model="form.email" class="form-control" name="">
                  </div>
                 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="ask1">お問い合わせ内容</label>
                  <div class="col-sm-6 text-center mx-auto">
                  <textarea rows="7" name="" v-model="form.content" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3"></label>
                  <div class="col-sm-9  mx-auto text-center">
                  </div>
                  </div>
              </form>
              <div class="btn btn-light" @click="post">送信する</div>

                </section>
                
            </main>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://ssense.github.io/vue-carousel/js/vue-carousel.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/index.js"></script>
    <?php get_footer(); ?>
            <?php wp_footer(); ?>
  </body>
</html>