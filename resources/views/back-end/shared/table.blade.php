

<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
               
                <div class="panel-body">
                <!--Table Wrapper Start-->
                    <div class="ls-editable-table table-responsive ls-table">
                            {{  $slot }}
                    </div>
                <!--Table Wrapper Finish-->
                </div>
            </div>
        </div>
</div>                       
@push('js')
     <!--botbox library script-->
  <script src="{{asset('panel/assets/js/bootbox.min.js')}}"></script>
  <script type="text/javascript">
          function check() {
            $('form').submit(function(e) {
                var currentForm = this;
               
                e.preventDefault();
                //console.log("should go to " + currentForm);
                bootbox.dialog({
                message: "هل أنت متأكد من أنك تريد القيام بهذه العملية؟",
                title: "تأكيد القيام بالعملية",
                buttons: {
                  success: {
                        label: "نعم!",
                        className: "btn-success",
                        callback: function() {

                            
                            currentForm.submit();
                           
                        }
                    },
                    danger: {
                        label: "لا!",
                        className: "btn-danger",
                        callback: function() {
                            //Example.show("uh oh, look out!");
                        }
                    },

                  }
                  });
                // bootbox.confirm("Are you sure?", function(result) {
                //     if (result) {
                //         currentForm.submit();
                //     }
                // });
             });
      }
</script>


@endpush
