$('#confirm_payment_modal').modal();
    $("#confirm_post_account").html(account_num);
    $("#confirm_post_amount").html("&#8377; " + post_amount + ".00");
    $("#confirm_post_date").html(post_date);
    // this is the final balance
    // new_balance = Current Balance + Current Bill - Payment
    $("#confirm_post_arrears").html("&#8377; " + new_balance + ".00");

    $("#final_payment_confirm_btn").unbind('click');
    $("#final_payment_confirm_btn").bind('click', function (cev) {
        $("#final_payment_confirm_btn").attr('disabled', 'disabled');
        //console.log(account_num);
        require(['models/payment'], function (paymentModel) {
            var newPayment = new paymentModel;
            newPayment.set({
                'account_number':account_num,
                'payment_amount':post_amount,
                'payment_date':post_date
            });
//                                        console.log('saving new payment');
            console.log(newPayment);
            newPayment.save({}, {
                error:function (m, r) {
                    $("#final_payment_confirm_btn").removeClass('btn-primary');
                    $("#final_payment_confirm_btn").addClass('btn-warning');
                    $("#final_payment_confirm_btn").val('Failed!');
                    setTimeout(function () {
                        $("#final_payment_confirm_btn").removeAttr('disabled');
                    }, 2000);
                    console.log("error, response: " + JSON.stringify(r));
                },
                success:function (m, r) {
                    $("#final_payment_confirm_btn").removeClass('btn-primary');
                    $("#final_payment_confirm_btn").addClass('btn-success');
                    $("#final_payment_confirm_btn").text('Saved!');
                    var timeoutID = window.setTimeout(function () {
                        $('#confirm_payment_modal').modal('hide');
                        require(['views/desktop/payment/main'], function (aView) {
                            var myView = new aView({
                                'main_el':'#content_body',
                                'sidebar_el':'#content_sidebar',
                                'topbar_el':'#content_topbar'
                            });
                        });
                        window.app_router.navigate('#payment', {trigger:true});
//                                                    window.location.replace("#payment");
//                                                    window.location.href = "#payment";
                    }, 1000);
                    //console.log("Payment saved to database, response: " + JSON.stringify(r));
//
//
                }
            });
        });
    });
};
