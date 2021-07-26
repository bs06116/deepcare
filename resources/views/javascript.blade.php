   <script>
        $(document).ready(function() {
            $('.gender').on('change', function() {
                if ($(this).val() == 'female') {
                    $("#question_26").show();

                }else{
                    $("#question_26").hide();
                }
            });

            $("input:checkbox").on('click', function() {
                // in the handler, 'this' refers to the box clicked on
                var $box = $(this);

                if ($box.is(":checked")) {
                    //console.info($box.attr("name"));
                    // the name of the box is retrieved using the .attr() method
                    // as it is assumed and expected to be immutable
                    var group = "input:checkbox[name='" + $box.attr("name") + "']";
                    if($box.attr("name") == 'question_22'  && $box.attr("value") == 'yes') {
                        $("#other_answer_22").show();
                    }else if($box.attr("name") == 'question_22'  && $box.attr("value") == 'no'){
                        $("#other_answer_22").hide();
                    }
                    if($box.attr("name") == 'question_25'  && $box.attr("value") == 'yes') {
                        $("#other_answer_25").show();
                    }else if($box.attr("name") == 'question_25'  && $box.attr("value") == 'no'){
                        $("#other_answer_25").hide();
                    }
                    // the checked state of the group/box on the other hand will change
                    // and the current value is retrieved using .prop() method
                    $(group).prop("checked", false);
                    $box.prop("checked", true);
                } else {
                    $box.prop("checked", false);
                }
            });
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function(e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function() {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next()
                    .children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='number']"),
                    isValid = true;
               //  console.info(curStep);
                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    //  console.info(curInputs[i].validity.valid);
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                var j = 1;
                $("input[name='question_" + j + "']:checked").each(function(index, obj) {
                    if (this.value === '') {

                    }
                   // console.info(this.value);
                    // loop all checked items
                });
                // for(let i=1; i<=23 i++){

                // }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).on('click', '#btnSave', function(event) {
            event.preventDefault();
            var phone = $("#phone_number").val();
            if (phone.length == 10) {
                $(".fa-spinner").show();
                  saveData();
              }

            /* Act on the event */


        });
        var saveData = function() {
            $.ajax({
                type: 'POST',
                url: 'save-frm', //Make sure your URL is correct
                dataType: 'json', //Make sure your returning data type dffine as json
                data: $('#main_frm').serialize() + '&_token=<?php echo csrf_token(); ?>',
                success: function(data) {
                    $(".fa-spinner").hide();
                    $(".message").text(data.message)
                     setTimeout(function(){
                       window.location.reload();
                     }, 5000);
                    console.log(data); //Please share cosnole data
                    // if(data.msg) //Check the data.msg isset?
                    // {
                    //     $("#msg").html(data.msg); //replace html by data.msg
                    // }

                }
            });
        }

    </script>

    <!-- script link end here  -->
</body>

</html>
