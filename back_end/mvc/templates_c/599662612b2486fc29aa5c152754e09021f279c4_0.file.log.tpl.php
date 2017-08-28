<?php
/* Smarty version 3.1.30, created on 2017-08-12 13:53:39
  from "C:\xampp\htdocs\templates\log.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '3.1.30',
    'unifunc' => 'content_598ede334805c7_73453864',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '599662612b2486fc29aa5c152754e09021f279c4' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\templates\\log.tpl',
                    1 => 1502535206,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_598ede334805c7_73453864(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
        <html>
    <head>
        <title> Logs </title>
    </head>
    <body>
    <table border="1">
        <thead>
        <th>Message</th>
        <th>Logged In</th>
        </thead>
        <tbody>
        <?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
                ?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['error']->value['message']; ?>
                    </td>
                    <td><?php echo date("Y-m-D H:i:s", $_smarty_tpl->tpl_vars['error']->value['time']); ?>
                    </td>
                </tr>
                <?php
            }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
        ?>

        </tbody>
    </table>

    <table border="1">
        <thead>
        <th>Message</th>
        <th>Logged In</th>
        </thead>
        <tbody>
        <?php
        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
        if ($_from !== null) {
            foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
                ?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['message']; ?>
                    </td>
                    <td><?php echo date("Y-m-D H:i:s", $_smarty_tpl->tpl_vars['log']->value['time']); ?>
                    </td>
                </tr>
                <?php
            }
        }
        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
        ?>

        </tbody>
    </table>
    </body>
        </html><?php }
}
