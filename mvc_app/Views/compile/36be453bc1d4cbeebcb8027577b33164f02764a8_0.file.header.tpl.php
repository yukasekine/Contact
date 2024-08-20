<?php
/* Smarty version 4.3.2, created on 2024-07-30 11:02:22
  from 'C:\xampp\htdocs\mvc_app\Views\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a8ac1eef7226_92113237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36be453bc1d4cbeebcb8027577b33164f02764a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\layout\\header.tpl',
      1 => 1722330134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a8ac1eef7226_92113237 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12 col-xs-10 px-0" style="background-color:lightgray;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:lightgray;">
            <h1 class="index_level1" class="navbar-brand">Casteria</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact/index">お問合せ</a>
                    </li>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-black" type="submit">Search</button>
                    </form>

                                        <?php if ($_smarty_tpl->tpl_vars['auth']->value === false) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/log-in">ログイン</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/my-page">マイページ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/user/log-out" onclick="return confirm('ログアウトしますか?')">ログアウト</a>
                        </li>
                    <?php }?>
                                    </ul>
            </div>
        </nav>
    </div>
</div><?php }
}
