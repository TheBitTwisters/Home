<script type="text/javascript">
    $(function() {
        $.fn.feedback = function(feedback) {
            if (feedback) {
                id = "feedback-" + Date.now();
                title = feedback.title ? '<strong>'+feedback.title+'</strong> ' : '';
                alert = '<div class="alert alert-'+feedback.context+' alert-dismissible fade show" ' +
                            'id="'+id+'" role="alert">' +
                             title +
                             feedback.message +
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                 '<span aria-hidden="true">&times;</span>' +
                             '</button>' +
                         '</div>';
                this.append(alert);
                $('#'+id).delay(10000).fadeOut('slow');
            }
            return this;
        };
    });
</script>
