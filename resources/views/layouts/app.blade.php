<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" sizes="76x76" href="{{ asset('app/images/logo.png')}}" type="image/x-icon" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Inter:wght@100;200;300&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
 
    <title>Freelancer</title>
 <style>
    .border{
        border:1px solid grey;
        padding: 10px;
    }
    .m-0{
margin: 0

    }
     header{ 
      padding: 20px 10px;
    text-align: center;
    background:
#0D0C1C;
margin: 0
     }
     body{
  /* padding: 20px;   */
/* font-family: Georgia, serif; */
font-family: 'Oxygen';

font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 20px;
letter-spacing: 0.2px; 
color: #F2F2F2; 
margin: 0;
background:white;
     }
     .contentb{
text-align: center;
    background:
#0D0C1C !important;
color: #F2F2F2 !important; 
padding: 20px 10px;

     }
     .img_container{     
     position: absolute;
     right: 30px;

     }
     .img_container>a{
         margin: 0px 5px ;
     }
    
     .head{
         text-align: center;
     }
     footer{
         /* margin-top: 60px; */
         text-align: left;
         display: flex;
         flex-direction: row;
         padding: 10px;


     }
     .extra{
         margin-top: 40px;
     }
      .btn_container{
          text-align: center; 
          padding: 30px;
      }
    .btn_text{ 
        gap: 10px;
color:white;
font-size: 16px;
padding: 12px 15px;
background: #3f51b5;
border-radius: 10px;
 text-decoration: none;  
    }
    .token{
        /* font-weight: bold; */
        padding: 10px 0;
    }
    main{
        background:
#0D0C1C;
margin: 0

    }

    header>h3{
        
font-family: 'Oxygen';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 20px;

color: #F2F2F2;
    }

    main{
        padding: 100px 10px;
background:#0D0C1C !important;

    }
.second-col{
   /* background:red; */
   /* display: block; */
   display: flex;
   flex:3;
 text-align: left;
   flex-direction: row;
  justify-content: flex-end;
  align-content: center ;
  align-items: center;
  
  
   max-width: 50%;

  
}
li>a{
    color: #828282;
text-decoration: none;

}
.first-col{
   /* background:blue; */
   /* display: block; */
   display: flex;
   flex:2;
   max-width: 50%;
   text-align: right;
   flex-direction: row;
  justify-content: flex-end;
  align-content: center ;
  align-items: center;
  
   max-width: 63%;
  
}
li{
    list-style-type: none;
    display: inline; 
    margin: 5px;
    align-content: center;
    justify-items: center;

}
ul{
    display: flex;
    align-items:center;
    padding: 0;
      align-content: center;
    justify-items: center;
}
.border-right{
    border-right:1px solid #828282;
    padding-left: 4px;
    padding-right: 4px;
    margin: 0px;
}
.col-text{
    padding: 10px 20px;
}
.btn{
    font-family: 'Oxygen';
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 15px;

color: #F2F2F2;
border:1px solid #5FAEF6;
background:#0D0C1C;
padding: 10px 20px;
/* width:  */
border-radius: 6px;
}
 </style>
</head>
<body>
    <div id="app"> 
<header>
<a href="#"><img src="https://i.ibb.co/vQgw1cd/upscale.png" alt="upscale" border="0"></a>

    <h3 >Upscale Advisory</h3>

   
</header>
        <main >
            @yield('content')
        </main>
    

         
        <footer>
         <div class="first-col">

           <ul>
            <li class="border-right"><a href="#">Weissenberg</a></li>
            <li class="border-right"><a href="#">Nigeria</a></li>
            <li><a href="#">Dusseldorf</a></li>
           </ul>
         </div>
         <div class="second-col"> 
            <ul ><li><a href="#"><img src="https://i.ibb.co/qr5xhzK/instagram.png" alt=""></a></li>
            <li><a href="#"><img src="https://i.ibb.co/NSCbDpF/twitter2.png" alt=""></a></li>
        <li><a href="#"><img src="https://i.ibb.co/1Zm0Ybb/ball.png" alt=""></a></li>
            <li><a href="#"><img src="https://i.ibb.co/4mTzwqx/be.png" alt=""></a></li></ul>
         </div>
        </footer>
 
    </div>
</body>
</html>