function initApp() {
    let vue = new Vue({
        el: "#app",
      components: {
        'carousel': VueCarousel.Carousel,
        'slide': VueCarousel.Slide
      },
      data:{
        open: false,
        form:{
          name:"",
          email:"",
          content:"",
        },
        width: window.innerWidth,
        height: window.innerHeight,
        talents:[
            {
                id:1,
                name:"代表：Keiya　Matsuzaki",
                img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88+2021-07-19+22.54.52.png",
                description:"blackone代表兼タレント",
                sns:"https://www.instagram.com/keiya_888/"
            },
            {
              id:2,
              name:"ガノン・ドロフ",
              img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/ganon.jpeg",
              description:"TikToker"
          },
          {
            id:3,
            name:"Mariam",
            img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/mariam.jpeg",
            description:"シンガー/トラックメーカー/モデル/占い師",
            sns:"https://instagram.com/____hey.maria?utm_medium=copy_link"
        },
        {
          id:4,
          name:"八重澤 就土",
          img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/yaezawa.jpeg",
          description:"モデル/俳優",
          sns:"https://www.instagram.com/shuto_.desu"
      },
      {
          id:5,
          name:"イケゆー",
          img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/fukayama.png",
          description:"TikTokerタレント",
          sns:"https://www.instagram.com/fukayuu.ikemen/"
      },
      {
          id:6,
          name:"LEON",
          img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/ren.png",
          description:"TikToker タレント　DJ",
          sns:""
      },
            // {
            //     id:2,
            //     name:"タレント2",
            //     img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/woman.jpg",
            //     description:"紹紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文介文"
            // },
            // {
            //     id:3,
            //     name:"タレント3",
            //     img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/woman.jpg",
            //     description:"紹紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文介文"
            // },
            // {
            //     id:4,
            //     name:"タレント4",
            //     img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/man.jpg",
            //     description:"紹紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文介文"
            // },
            // {
            //     id:5,
            //     name:"タレント5",
            //     img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/man.jpg",
            //     description:"紹紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文介文"
            // },
            // {
            //     id:6,
            //     name:"タレント6",
            //     img:"https://blackone-web.s3.ap-northeast-1.amazonaws.com/img/woman.jpg",
            //     description:"紹紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文紹介文介文"
            // },
        ]
      },
      computed:{
        carouselContent:function(){
            if(this.width >= 570){
                return 2
            }else{
                return 1
            }
        }
      },
      methods:{
        async post(){
          console.log(this.form)
          const body = {
            fields:{
              name:{
                stringValue: this.form.name
              },
              comment:{
                stringValue: this.form.email
              },
              content:{
                stringValue: this.form.content
              }
            }
          }
          console.log(body)
          const res = await axios.post(`https://firestore.googleapis.com/v1/projects/blackone-1/databases/(default)/documents/contacts`,
          body)
          res && alert('送信されました')
          this.form.name=""
          this.form.content=""
          this.form.email=""
          console.log(res)
        },
        handleResize: function() {
            // resizeのたびにこいつが発火するので、ここでやりたいことをやる
            this.width = window.innerWidth;
            this.height = window.innerHeight;
          }
      },
      mounted(){
        console.log(document.getElementById('app'))
        window.addEventListener('resize', this.handleResize)
          console.log('mounted')
      }
    });
  }

  initApp()