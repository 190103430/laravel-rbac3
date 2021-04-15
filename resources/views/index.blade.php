<!DOCTYPE >
<html lang="{{app()->getLocale()}}">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BARBERACADEMY</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{ asset('/css/templatemo-style.css')}}" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
<style>

</style>
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

	<div id="templatemo_container">
    	<div id="templatmeo_header">
        	<div id="templatemo_menu">
            	<ul>
                    <li><a href="#" class="current">@lang('home.home_menu')</a></li>
                    <li><a href="#">@lang('home.gallery_menu')</a></li>
                    <li><a href="#">@lang('home.masters_menu')</a></li>
                  
                    <li><a href="#">@lang('home.company_menu')</a></li>
                    <li><a href="#">@lang('home.contact_menu')</a></li>
					<li><a href="#">@lang('home.video_menu')</a></li>
                </ul> 
            </div>
            <div class="from-inline my-2 my-lg-0">
            <ul id="templatemo_menu">
            <li class ="nav-item">
            <a class="nav-link" href="locale/en"><img src="images/ca08cf6a0a3b39e838131599c8194b8f23346714.png" width="30" height="20"  /> English</a>
            </li>
            <li class ="nav-item">
            <a class="nav-link" href="locale/ru"> <img src="images/russian-flag-russian-flag-russia-flag-of-russia.jpg" width="30" height="20"  />Русский</a>
            </li>

            </ul>
            </div>
            <div id="templatemo_logo_area">
            	<div id="templatemo_logo">
                	ELEGANCE</div>
            </div>
            
            <div class="templatemo_welcome">
            	<h1>@lang('home.TM_BARBER_ACADEMY')</h1>
                <p>@lang('home.-ThisisthefirstandonlybarberschoolinKazakhstan.')</p>
                
                <div class="templatemo_more">
                	<a href="#"></a>
                </div>
                
                <div class="templatemo_more">
                	<a href="#"></a></div>
            </div>
        </div><!-- End Of header -->
        
        <div id="templatemo_content">
        	<div id="templatemo_content_top">
            	<div id="templatemo_content_bottom">
                	<div id="templaetmo_left">
                    	<div class="templatemo_one_col">
                        	<h1>@lang('home.Advantagesofworkingasabarber')</h1>
                            <a href="#"><img src="images/e199482176e942e1ab2fe1080d8a34fb.jpg" width="295" height="170"  /></a>
                          <p>@lang('home.Barberisnot')</p>
                            <div class="cleaner"></div>
                            
                        </div>
                                              
                        <div class="templatemo_h_line"></div>
                        
                        <div class="templatemo_one_col">
                        	<h1>@lang('home.HOWDOWEWORK?')</h1>
                            
                            <img src="images/a774b68c2d4fc256b93211567d678ef8127b2c80_12801421017118.jpg" alt="Icon" width="295" height="170" />
                            <p>@lang('home.Amanshaircutat')</p>
                            
                            <div class="cleaner"></div>
                            
                        </div>
                        
                        <div class="templatemo_h_line"></div>
                        
                        <div class="templatemo_section_1">
                        	<h1>@lang('home.OurAdvantages')</h1>
                            <div class="templatemo_h_line_2"></div>
             
                            
                            <ul class="templatemo_list">
                            	<li><a href="#"></a></li>
                                <li><a href="#">@lang('home.Good earnings')</a></li>
                                <li><a href="#">@lang('home.Friendly team')</a></li>
                                <li><a href="#">@lang('home.Employment opportunities')</a></li>
							</ul>
                            
                            
                        </div>
                        
                        <div class="templatemo_v_line"></div>
                        <div class="templatemo_section_2" >
							
                        	<h1>@lang('home.Contact Info')</h1>
                            <div class="templatemo_h_line_2"></div>
                            <p>@lang('home.Tel: +77775702244')<br />
                            Whatsapp:+77775554422<br />
                            Email: 190103430@stu.sdu.edu.kz<br />
                            Web: <a href="#">www.BARBERACADEMY.com</a></p>
					  </div>
                        
                        <div class="cleaner"></div>
                    </div><!-- End Of Left-->
                    
                    <div id="templatemo_right">
                    	<div id="templatemo_right_top">                        
                        	<h6>@lang('home.Our Certificates')</h6>
                        </div>     
                        <div id="templatemo_right_mid">
                        	<div id="right_mid_top">
								<a href="#"><img src="images/certificate-of-participation-3.png" alt="City" width="293" height="170" /></a>
                                <a href="#"><img src="images/Certificate-student-3-TemplateLab.com_-e1542525882593.jpg" alt="Sunset" width="292" height="170" /></a>
                               
                                <a href="#"><img src="images/certificate-golden-purple.jpg" alt="Beach" width="293" height="170" /></a> </div>
                      </div>               
                        <div id="templatemo_right_bottom">
                        </div>
                    </div><!-- End Of Right-->
                    
                    <div class="cleaner"></div>
                </div><!-- End Of Content Bottom-->
            </div><!-- End Of Content Top-->
        </div><!-- End Of Content-->
    	<div id="templatemo_bottom_panel">
        	<div id="bottom_top">
                
            	<div class="templatemo_bottom_3_col">
	               	<h1>@lang('home.Necessary documents for the portfolio')</h1>
                    <p>@lang('home.Photo 4*4')</p>
                	<p>@lang('home.Copy of the certificate')</p>
                    <p>@lang('home.Reference')</p>
                    <p>@lang('home.The answer to the question why do you want to become a barber')</p>
              </div>
                
                <div class="templatemo_bottom_3_col">
                	<h1>@lang('home.Video explanation how to upload a portfolio')</h1>
                    <video  controls class="img-fluid project-gallery-img" width="250px" >
							<source src="images/Заполнение документа с помощью модуля _Распознавание паспортов_.mp4" type="video/mp4">
							</video>
                   
                
              </div>
                
                <div class="templatemo_bottom_3_col">
                
                <h1>@lang('home.Contact Us')</h1>
                	<form action="#" method="post">
                    	<label class="labels">@lang('home.Your Name:')</label>
                        <div class="cleaner"></div>
               	  	    <input type="text" value="@lang('home.Type Your Name')" name="fullname" class="field"  title="name" onfocus="clearText(this)" onblur="clearText(this)" id="fullname" />
                        <div class="cleaner"></div>
                        <label class="labels">@lang('home.Email:')</label>
                        <div class="cleaner"></div>
                        <input type="text" value="@lang('home.Type Your Email Adddress')" name="email" class="field"  title="email" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div class="cleaner"></div>
                        <label class="labels">@lang('home.Message:')</label>
                      	<div class="cleaner"></div>
                        <textarea name="message" cols="50" rows="3" class="text_area" title="message" onfocus="clearText(this)" onblur="clearText(this)">@lang('home.Type Your Message')</textarea>
                	  	<input type="submit" name="search" value = "@lang('home.Send')" alt="Search" class="button" title="Subscribe" />
            		</form>
                </div>
                <div class="cleaner"></div>
<div class="container">
   
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>@lang('home.Upload your portfolio here')</h2></div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                Inappropriate file format.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">@lang('home.Upload')</button>
                </div>
   
            </div>
        </form>
      </div>
    </div>
</div>
            </div>
        </div>
        <div id="templatemo_bottom_bottom">
        </div>
        
        <div id="templatemo_footer">
        Copyright © 2021 <a>BARBERACADEMY</a> 
       
    </div>
  

</body>
</html>