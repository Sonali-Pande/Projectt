

<style>
 div{
      font-family: "Times New Roman", Times, serif;
      font-weight:600;
      font-size:16px;
  }
</style>
</div>
<!-- End Test Modal -->
<div class="modal fade" id="endTestModal" tabindex="-1" aria-labelledby="endTestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="endTestModalLabel">Test Prep Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center m-0 fs-5 ">This action will end your test, do you want to proceed?</p>
                <div class="row mt-2">
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-card-text"></i>
                            </div>
                            <div class="float-left text-nowrap">
                                {$total_data}  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none  d-sm-inline-block">Items</span></div>
                    </div>
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div class="float-left text-nowrap" id="attempt_div">0  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none  d-sm-inline-block">Attempted</span></div>
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
                        <div class="height50 ml-4"><span class="d-none  d-sm-inline-block">Unattempted</span></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-primary" onclick="showListQuestion();">Go To Item List</button>
                <button type="button" class="btn btn-outline-secondary" onclick="generateResult();">End Test</button>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</BODY>
</HTML>
