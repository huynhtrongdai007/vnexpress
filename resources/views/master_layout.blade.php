<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }} ">
</head>
<body>
    <div id="wrap-vp">
        <div id="header-vp">
            <div id="logo"><img src="{{asset('assets/images/logo.gif')}}" /></div>
        </div>
        
        <div id="menu-vp">
            {{--'blocks/menu.php' ?> --}}
            @include('pages.blocks.menu')
        </div>
          <div id="midheader-vp">
            <div id="left">
                <ul class="list_arrow_breakumb">
                    <li class="start">
                    <a href="javascript:;">Trang nhất</a>
                    <span class="arrow_breakumb">&nbsp;</span></li>
               </ul>
            </div>
            <div id="right">
                <!--blocks/thongtinchung.php-->
                @include('pages.blocks.thongtinchung')
            </div>
        </div>
        <div class="clear"></div>
    
        <div id="slide-vp">
            <!--blocks/top_trang_chu.php-->
            @include('pages.blocks.top_trang_chu')
            <div id="slide-right">
            <!--blocks/quangcao_top_phai.php-->
            @include('pages.blocks.quangcao_top_phai')
            </div>
        </div>
    
          <div id="content-vp">
            <div id="content-left">
            <!--blocks/cot_trai.php-->
            @include('pages.blocks.cot_trai')
            </div>
            <div id="content-main">
                @include('pages.blocks.content-main')
                <!--PAGES--> 
            </div>
            <div id="content-right">
            <!--blocks/cot_phai.php-->
            @include('pages.blocks.cot_phai')
            </div>
    
        <div class="clear"></div>
            
        </div>
        
         <div id="thongtin">
            <!--blocks/thongtindoanhnghiep.php-->
            @include('pages.blocks.thongtindoanhnghiep')
        </div>
        <div class="clear"></div>
        <div id="footer">
            <!--blocks/footer.php-->
            @include('pages.blocks.footer')
            <div class="ft-bot">
                <div class="bot1"><img src="{{asset('assets/images/logo.gif')}}" /></div>
                <div class="bot2">
                         <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                         <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
                </div>
                <div class="bot3">
                    
                         <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                         <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                      
                </div>
            </div>
        </div>    
    </div>
</body>
</html>