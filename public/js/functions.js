/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $('.form-control').on('change', function(e){
    $(this).closest('form').submit();
    });
    
    $( ".assessment_item" ).click(function() {
        //$('#report').val($('#report').val() + $(this).text()); 
        tinymce.activeEditor.execCommand('mceInsertContent', false, $(this).text());
    });
    
    tinymce.init({ selector:'textarea' });
    
    
    
    
});
