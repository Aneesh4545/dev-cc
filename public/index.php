*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins',sans-serif;
    box-sizing: border-box;


}
html{
    scroll-behavior: smooth;
}
body{
    background: #080808;
    color: #fff;

}
#header{
    width: 100%;
    height: 100vh;
    background-image: url(images/back.png);
    background-position: center;
    background-size: cover;


}
.container
{
    margin-top: -50px;
padding-left: 800px;


}
.logo{
    font-size: 30px;
    margin-left: 60px;
}
.logo h1 span{
    color: #ff004f;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
   
}

nav ul li{
    margin-right: 40px;
display: inline-block;
list-style: none;
margin: 10px 20px;

}
nav ul li a{
  
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    position: relative;
}

nav ul li a::after{
content: '';
width: 0;
height: 3px;
background: #ff004f;
position: absolute;
left: 0;
bottom: -6px;
transition: 0.5s;

}
nav ul li a:hover::after{
width: 100%;

}
.header-text{
    margin-left: 40px;
    margin-top: 20%;
    font-size: 30px;
}
.header-text h1{
    font-size: 60px;
    margin-top: 20px;
}
.header-text h1 span{
color: bisque;
}

/*--about---------------------------------------------------------*/
#about{
padding: 80px 0;
color: #ababab;
}
.about-col-1{
    flex-basis: 35%;
}
.about-col-1 img{
    width: 230px;
    margin-left: 600px;
    height: 300px;
    border-radius: 15px;
}
.about-col-2{
    flex-basis: 60%;
}
.sub-title{
    margin-left: 600px;
    font-size: 60px;
    font-weight: 100;
    color: #fff;
}

.tab-titles{

    display: flex;
    margin: 20px 0 40px;
}
.tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
}
.tab-links::after{
    content: '';
    width: 0;
    height: 3px;
    background: #ff004f;
    position: absolute;
    left: 300px;
    bottom: -8px;
    transition: 0.5s;
}
.tab-links.active-link::after{
width: 50%;
}
.tab-contents ul li{
    list-style: none;
    margin: 10px 0;
}
.tab-contents ul li span{
    color: #b54769;
    font-size: 14px;
}
.tab-contents{
    display: none;

}
.tab-contents.active-tab{
    display:block
}
/*-----------------services-----------*/
#services{
    padding: 30px 0;
}
.contain
{
    margin-top: 20px;
padding-left: 20px;
}
.services-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    grid-gap: 40px;
    margin-top: 50px;

}
.services-list div{
    background: #262626;
    padding: 40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: background 0.5s, transform 0.5s;
}
.services-list div i{
    font-size: 50px;
    margin-bottom: 30px;
}
.services-list div h2{
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 15px;
}
.services-list div a{
    text-decoration: none;
    color: #fff;
    font-size: 12px;
    margin-top: 20px;
    display: inline-block;
}
.services-list div:hover{
    background: #ff004f;
    transform: translateY(-10px);
}

/*-----------portfolio-----------*/
#portfolio{
    padding: 50px 0;
}
.work-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.work{
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}
.work img{
    width: 100%;
    border-radius: 10px;
    display: block;
    transition: transform 1.5s;
}
.layer{
    width: 100%;
    height: 0;
    background: linear-gradient(rgba(0,0,0,0.6),#ff004f);
    border-radius: 10px;
    position: absolute;
    left: 0;
    bottom: 0;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
padding: 0 40px;
text-align: center;
font-size: 14px;
transition: height 1s;
}
.layer h3{
    font-weight: 500;
    margin-bottom: 20px;
}
.layer a{
    margin-top: 20px;
    color: #ff004f;
    text-decoration: none;
    font-size: 18px;
    line-height: 60px;
    background: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;

}
.work:hover img{
   transform: scale(1.1);
}
.work:hover .layer{
height: 100%;

}
.btn{
    display: block;
    margin: 50px auto;
    width: fit-content;
    border: 1px solid #ff004f;
    padding: 14px 50px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    transition: background 0.5s;
}
.btn:hover{
    background: #ff004f;
}
/*---------------------contact------*/
.contact-left{
    flex-basis: 35%;
}
.contact-right{
    flex-basis: 60%;
}

.contact-left p{
    margin-left: 30px;
}
.contact-left p i{
color: #ff004f;
margin-right: 15px;
font-size: 25px;
}
.social-icons a{
    text-decoration: none;
    font-size: 30px;
    margin-left: 30px;
    margin-right: 15px;
    color: #ababab;
    display: inline-block;
    transition: transform 0.5s;
}
.social-icons a:hover{
    color: #ff004f;
    transform: translateY(-5px);
}
.btn.btn2{
    display: inline-block;
    background: #ff004f;
}
.contact-right form{
    width: 100%;
}
form input, form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background: #262626;
    padding: 15px;
    margin: 15px 0;
    color: #fff;
    font-size: 18px;
    border-radius: 6px;
}

form .btn2{
    padding: 14px 60px;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;
}
.copyright{
    width: 100%;
    text-align: center;
    padding: 25px 0;
    background: #262626;
    font-weight: 300;
    margin-top: 20px;
}
/*---------------css for small-----------*/
nav .fa-solid{
    display: none;
}
@media only screen and (max-width: 600px){
    #header{
        background-image: url(images/phn.png);
    }
.header-text{
    margin-top: 100%;
    font-size: 16px;
}
.header-text h1{
    font-size: 30px;

}
nav .fa-solid{
    display: block;
    font-size: 25px;

}
nav ul{
     background: #ff004f;
     position: fixed;
     top: 0;
     right: -200px;
     width: 200px;
     height: 100vh;
     padding-top: 50px;
     z-index: 2;
     transition: right 0.5s;
}
nav ul li{
    display: block;
    margin: 25px;
}
nav ul .fa-solid{
    position: absolute;
    top: 25px;
    left: 25px;
    cursor:pointer;
}
.sub-title{
    font-size: 40px;
    margin-left: 10px;
}
.about-col-1, .about-col-2{
    flex-basis: 100%;
    margin-left: 10px;
}
.about-col-1{
    margin-bottom: 30px;
}
.about-col-1 img{
    margin-left: 10px;
}
.tab-titles{
    margin-left: 10px;
}
.tab-links{
    font-size: 16px;
    margin-right: 20px;
}
.about-col-2{
    font-size: 14px;
}
}

#msg{
    color: #61b752;
    margin-top: -40px;
    display: block;
}