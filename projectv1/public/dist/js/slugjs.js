$(document).ready(function() {
    $('#slug_title, #slug_name').on('input', function() {
        let text = $(this).val();
        let slug = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        
        if ($(this).attr('id') === 'slug_title') {
            $('#slug').val(slug);
        } else if ($(this).attr('id') === 'slug_name') {
            $('#slug').val(slug);
        }
    });
});
