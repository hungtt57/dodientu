
CKEDITOR.editorConfig = function( config )
{
        // Define changes to default configuration here. For example:
    config.language = 'en';
    
        // config.uiColor = '#AADC6E';
        
        config.toolbar_Full = [
           
            ];
        
        config.entities = false;
        //config.entities_latin = false;
        

        config.filebrowserBrowseUrl = 'http://localhost/dodientu/public/admin/ckfinder/ckfinder.html';

        config.filebrowserImageBrowseUrl = 'http://localhost/dodientu/public/admin/ckfinder/ckfinder.html?type=Images';

        config.filebrowserFlashBrowseUrl = 'http://localhost/dodientu/public/admin/ckfinder/ckfinder.html?type=Flash';

        config.filebrowserUploadUrl = 'http://localhost/dodientu/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

        config.filebrowserImageUploadUrl = 'http://localhost/dodientu/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

        config.filebrowserFlashUploadUrl = 'http://localhost/dodientu/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};  