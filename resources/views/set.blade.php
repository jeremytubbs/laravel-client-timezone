<script src="/js/vendor/jstz.min.js"></script>
<script>
    if (document.readyState === "complete" || (document.readyState !== "loading" && !document.documentElement.doScroll)) {
        callback();
    } else {
        document.addEventListener("DOMContentLoaded", function() {
            callback();
        });
    }

    var callback = function(){
        var token = '{{ csrf_token() }}';
        var tz = jstz.determine();
        var tzName = 'UTC';

        if (typeof (tz) === 'undefined') {
            tzName = 'UTC';
        } else {
            tzName = tz.name();
        }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/timezone-detect');
        xhr.setRequestHeader('X-CSRF-TOKEN', token);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        var formData = 'timezone='+tzName;
        xhr.send(formData);
    };
</script>
