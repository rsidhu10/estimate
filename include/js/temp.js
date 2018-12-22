
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
