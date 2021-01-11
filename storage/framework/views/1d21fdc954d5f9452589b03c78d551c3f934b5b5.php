<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo e($content['website_name']); ?></title>
<style type="text/css">
a:hover { text-decoration: underline !important; }
</style>
</head>

<body style="margin: 0px;">

<div style="border: 1px solid gray;padding: 10px 5%;">
<div>  
<h1>Welcome </h1>
<br/>
<br/>
<div>

<div>  
Hello <?php echo e($content['name']); ?>,
<div>
<br/>
<br/>

<p>
<table>
<tr>
<td>Name</td>
<td><?php echo e($content['user']->name); ?></td>
</tr>
<tr>
<td>Mobile</td>
<td><?php echo e($content['user']->Phone); ?></td>
</tr>
<tr>
<td>User Id</td>
<td><?php echo e($content['user']->email); ?></td>
</tr>


</table>
</p>
<br/>
<br/>

<br/>
<a target="_blank" href="<?php echo e(URL('/')); ?>">Go to Website</a>
<br/>
<p>Click here for Verify Email : <a href="<?php echo e(URL('/verify').'/'.encrypt($content['user']->id)); ?>">Click</a> </p>
<p><?php echo e(URL('/verify').'/'.encrypt($content['user']->id)); ?></p>
<br/>
<p>Regards,</p>




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
<?php echo e($content['website_name']); ?><br>
<?php echo e($content['address']); ?>

<br>
<?php echo e($content['mobile']); ?>

<br></p>
</td>

<td valign="top" width="174">
<img src="<?php echo e(URL('/')); ?>/assets/frontend/img/logo-dark.png"  height="35" width="174"/>
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