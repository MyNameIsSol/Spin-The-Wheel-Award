swal({
                    title: "Upgrade processing!",
                    text: "You are about to upgrade to a new level... Do you want to continue?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal({
                                title: "success!",
                                text: "You have been upgraded to a new level.",
                                type:"success",
                                confirmButtonText: "ok",
                                allowOutsideClick: "true"
                            }, function () { 
                              // window.location.href = ctl 
                            })
                        } else {
                               window.location.href = "upgrade.php";
                        }
                    });


                      
      