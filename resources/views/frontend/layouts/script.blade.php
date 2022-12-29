<script>
    (function() {
        function maybePrefixUrlField() {
            if (this.value.trim() !== "" && this.value.indexOf("http") !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll(
            '.mc4wp-form input[type="url"]'
        );
        if (urlFields) {
            for (var j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener("blur", maybePrefixUrlField);
            }
        }
    })();
</script>
<style>
    .wp-container-1>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .wp-container-1>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .wp-container-1>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript"
    src="https://www.3forty.media/zosia/demo-2/wp-content/themes/zosia/js/slick.min.js?ver=1.0.0" id="slick-js">
</script>
<script type="text/javascript"
    src="https://www.3forty.media/zosia/demo-2/wp-content/plugins/tfm-hero/js/hero.js?ver=1.0.0" id="tfm-hero-js">
</script>
<script type="text/javascript" defer
    src="https://www.3forty.media/zosia/demo-2/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.10"
    id="mc4wp-forms-api-js"></script>

{{-- font-awesome --}}
<script src="https://kit.fontawesome.com/622cc589c6.js" crossorigin="anonymous"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

<script>
    var search = $('.search-2')
    var search1 = $('.search-1 ul')
    // search1.on('click',function(){
    //     alert('ok')
    // })
    let myurl = `{{ route('search') }}`
    search.on('keyup', function() {
        var value = $(this).val();
        setTimeout(() => {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                url: myurl,
                type: 'POST',
                data: {
                    searchValue: value,
                },
                success: function(response) {
                    let results = response
                    let lists = []
                    $.each(results, function(key, v) {
                        var list = `<li><a href="/blog/details/${v.id}" style="text-decoration:none; color:#000">${v.title}</a></li>`;
                        lists.push(list)
                    });
                    search1.html('')
                    search1.html(lists)
                },
                error: function(){
                    search1.html(" ")
                }
            })
        }, 500);
    })
</script>
