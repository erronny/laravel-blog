<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>{{$content['website_name']}}</title>
	<style type="text/css">
	a:hover { text-decoration: underline !important; }
</style>
</head>

<body style="margin: 0px; background-color: #e0e0e0;">

        <div style="background: #ffffff;border: 1px solid gray;padding: 10px 5%;">
            	<div>  
        Hello {{ $content['interviwer']->name }},
        <div>
            <br/>
            <br/>
            
            <p>
                New Interview schedule below are the details of Candidate:
            </p>
            <br/>
            <br/>

<table>
    <tr>
        <td>Candidate Name</td>
        <td>:</td>
        <td>{{ $content['candidate']->FirstName }}</td>
    </tr> 
    <tr>
        <td>Candidate Current Title & Company</td>
        <td>:</td>
        <td>-</td>
    </tr> 
    <tr>
        <td>Candidate Phone No.</td>
        <td>:</td>
        <td>{{ $content['candidate']->Phone }}</td>
    </tr> 
    <tr>
        <td>When</td>
        <td>:</td>
        <td>
            {{ $content['interview_date'].' [ '.$content['interview_time'].' ]' }}
        </td>
    </tr> 
    <tr>
        <td>Scheduled By</td>
        <td>:</td>
        <td>{{ $content['jobmaster']->user->name }}</td>
    </tr> 
</table>

<br/>
<!--<a href="#" target="_blank">View Candidate Profile</a>-->

<br/>
<p>Regards,</p>

<p>{{ $content['jobmaster']->user->name }}</p>



	<!--email container-->
<table bgcolor="#fffdf9" cellspacing="0" border="0" align="center" cellpadding="30" width="100%">
        <tr>
                <td>
                        <!--email content-->
                        <table cellspacing="0" border="0" id="email-content" cellpadding="0" width="100%">
                                <tr>
                                        <td>
                                                <!--section 1-->
                                                <table cellspacing="0" border="0" cellpadding="0" width="100%">
                                                        <tr>
                                                                <td valign="top" align="center">
                                                                        <!--line break-->
                                                                        <!-- Table Generate Here-->





                                                                        <!-- Table End Here generate-->

                                                                </td>
                                                        </tr>
                                                </table><!--/section 1-->
                                                <!--line break-->
                                                <table cellspacing="0" border="0" cellpadding="0" width="100%">
                                                        <tr>
                                                                <td height="5"><br><div style="border-bottom:1px solid #000; padding-top:15px;"></div></td>
                                                        </tr>
                                                        <tr>
                                                                <td height="20"></td>
                                                        </tr>
                                                </table><!--/line break-->
                                                <!--section 2-->
                                                <!--section 3-->
                                                <table cellspacing="0" border="0" cellpadding="0" width="100%">
                                                        <tr>
                                                                <td valign="top" width="100%">
                                                                        <h1 style="font-size: 24px; font-family: Georgia, Times New Roman, Times, serif; color: #333333; margin-top: 0px; margin-bottom: 12px;">
                                                                                Regards
                                                                        </h1>
                                                                        <p style="font-size: 16px; line-height: 22px; font-family: Georgia, Times New Roman, Times, serif; color: #333; margin: 0px;">
                                                                                {{$content['website_name']}}<br>
                                                                                {{$content['address']}}
                                                                                <br>
                                                                                {{$content['mobile']}}
                                                                                <br></p>
                                                                        </td>

                                                                        <td valign="top" width="174">
                                                                                <img src="{{URL('/')}}/assets/img/{{$content['website_logo']}}"  height="35" width="174"/>
                                                                        </td>

                                                                </tr>
                                                        </table>
                                                </td>
                                        </tr>
                                </table><!--/email content-->
                        </td>
                </tr>
        </table><!--/email container-->
        </div>
        
        
        
	
			</body>
			</html>