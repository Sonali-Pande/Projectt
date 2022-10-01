<?php
/* Smarty version 4.2.0, created on 2022-08-23 09:48:51
  from 'C:\xampp\htdocs\uctest\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63048663dc3364_41339914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759799e213b70fcd0d085522532fdc5f564c1869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\header.tpl',
      1 => 1661240924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63048663dc3364_41339914 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<HEAD>
    <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .answer_bullets {
            line-height: 14px;
            padding: 3px 3px;
            margin: 1px;
            float: left;
            text-align: center;
            border-radius: 50%;
            color: #aea8a8;
            background: #fff;
            border: 1px solid #aea8a8;
            font-size: 13px;
            font-weight: 700;
            width: 22px;
            height: 22px;
        }
        .correct_answer {
            color: #16a41c!important;
            border: 1px solid #1ab81f!important;
        }

        .wrong_answer {
            color: #fff!important;
            background: #e37475!important;
            border: 1px solid #e37475!important;
        }
        
        .user_answer {
            color: #fff;
            background: #16a41c!important;
            border: 1px solid #16a41c!important;
        }

        .filter-question {
            display: none;
        }

        .show {
            display: block;
        }

        .sidepanel  {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 250px;
            top: 0;
            left: 0;
            background-color: #ffff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #0d0505;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }
        .height500{
            /* height:500px; */
            height: -webkit-fill-available;
        }

        .square {
            height: 26px;
            width: 26px;
            line-height: 20px;
            padding: 3px 3px;
            text-align: center;
            border-radius: 50%;
            color: #eee;
            background: #616970;
            font-size: 12px;
        }

        .mt-n5{
            margin-top:-2.75rem!important
        }
        .btn_active{
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</HEAD>
<BODY bgcolor="#ffffff">
    <div class="container mt-2">
        <!-- Nav  -->
        <div class="row border border-dark">
            <div class="col-4">
                <a tabindex="-1" href="#" target="_parent"><img onerror="this.style.display='none'" class="logo-v mw-100 show_popup_msg navbar-brand" src="https://www.ucertify.com/layout/themes/bootstrap4/images/logo/ucertify_logo.png" alt="uCertify Logo"></a>
            </div>
            <div class="col-8">
                <h1 class="fw-bold mt-0">ucertify Test Prep</h1>
            </div>
        </div> 
    
<?php }
}
