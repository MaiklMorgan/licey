var editor_config = {
    path_absolute : '',
	language : 'ru',
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern",
        "imagegallery noneditable"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imagegallery",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    image_class_list: [
        {title: 'None', value: ''},
        {title: 'Image Responsive', value: 'img-responsive'}
    ],
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
    extended_valid_elements: '+div[class|data-src|data-retina|tabindex],style[tabindex]',
    valid_children : "+body[style]",
    noneditable_noneditable_class: "mceNonEditable",
    content_style: '.owl-carousel{border: 2px solid; padding: 10px 0 0 10px; overflow: hidden; width: 70%;}.owl-carousel > img{width: 100px; float: left; margin: 0 10px 10px 0;}'
};