<header class="fixed-top">
                <nav class="shadow-lg navbar navbar-expand-sm header mb-3">
                    <a class="navbar-brand logo" href="#top"><h1>BLACK ONE</h1></a>
                    <button class="navbar-toggler" v-on:click="open=!open" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
                         <ul class="navbar-nav">
                             <li class="nav-item active">
                                 <a class="nav-link" href="#intro">会社紹介<span class="sr-only">(current)</span></a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#info">企業情報</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#talent">タレント情報</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#contact">お問い合わせ</a>
                             </li>
                        </ul>
                    </div>
               </nav>
            </header>
            <div class="menu" v-bind:class="{'is-active' : open }">
                <div class="menu__item" @click="open = false"><a href="#top">TOP</a></div>
                <div class="menu__item" @click="open = false"><a href="#intro">会社紹介</div>
                <div class="menu__item" @click="open = false"><a href="#info">企業情報</a></div>
                <div class="menu__item" @click="open = false"><a href="#talent">タレント情報</a></div>
                <div class="menu__item" @click="open = false"><a href="#contact">お問い合わせ</a></div>
            </div>