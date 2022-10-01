<?php
/* Smarty version 4.2.0, created on 2022-09-26 19:03:46
  from 'C:\xampp\htdocs\uctest\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6331db7282ccf6_82586697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cfa9f280357b9fc2d739423fd315a86ca0c0398' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\footer.tpl',
      1 => 1664204990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331db7282ccf6_82586697 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
<div class="modal fade" id="endTestModal" tabindex="-1" aria-labelledby="endTestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="endTestModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center m-0 lh-lg ">This action will end your test, do you want to proceed?</p>
                <div class="row mt-2">
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-card-text"></i>
                            </div>
                            <div class="float-left text-nowrap">
                                <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Items</span></div>
                    </div>
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div class="float-left text-nowrap" id="attempt_div">0  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Attempted</span></div>
                    </div>
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-eye-slash"></i>
                            </div>
                            <div class="float-left text-nowrap"  id="unattempt_div">
                                9  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Unattempted</span></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-primary" onclick="showListQuestion();">Go To Item List</button>
                <button type="button" class="btn btn-primary" onclick="generateResult();">End Test</button>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    function filterSelection(options,filter_type=0) {
        var total_element, i;
        total_element = document.getElementsByClassName("filter-question");
        var sr_num=1;
        var add_class="show";
        if(filter_type=="list"){    //when list sorting is calling the function
            add_class+=" d-flex";
            selectActiveClass();
        }
        if (options == "all") options = "";
        for (i = 0; i < total_element.length; i++) {
            tableRemoveClass(total_element[i], add_class);
            if (total_element[i].className.indexOf(options) > -1) {
                tableAddClass(total_element[i], add_class,sr_num);
                sr_num++;
            }
        }
    }

    function tableAddClass(element, name, sr_num) {
        var i, element_1, element_2;
        element_1 = element.className.split(" ");
        element_2 = name.split(" ");
        for (i = 0; i < element_2.length; i++) {
            if (element_1.indexOf(element_2[i]) == -1) {
                // element.childNodes['1'].childNodes['1'].innerHTML=sr_num;
                element.className += " " + element_2[i];
            }
        }
    }

    function tableRemoveClass(element, name) {
        var i, element_1, element_2;
        element_1 = element.className.split(" ");
        element_2 = name.split(" ");
        for (i = 0; i < element_2.length; i++) {
            while (element_1.indexOf(element_2[i]) > -1) {
                element_1.splice(element_1.indexOf(element_2[i]), 1);     
            }
        }
        element.className = element_1.join(" ");
    }

    function selectActiveClass(){
        // Add active class to the current control button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("btn_active");
                // console.log(current)
                // console.log(current[0].className)
                current[0].className = current[0].className.replace(" btn_active", "");
                this.className += " btn_active";
            });
        }
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</BODY>
</HTML>
<?php }
}
