// public/assets/js/toastr.js
document.addEventListener('DOMContentLoaded', function() {
    if (typeof toastrData !== 'undefined') {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        };
        toastr[toastrData.type](toastrData.message);
    }
});
