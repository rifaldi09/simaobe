import {
    ClassicEditor,
    Essentials,
    Paragraph,
    Bold,
    Italic,
    Font,
    List
} from 'ckeditor5';
ClassicEditor
    .create( document.querySelector( '#materi' ), {
        plugins: [ Essentials, Paragraph, Bold, Italic, Font, List ],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            'bulletedList', 'numberedList'
        ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( '#pustaka-utama' ), {
        plugins: [ Essentials, Paragraph, Bold, Italic, Font, List ],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            'bulletedList', 'numberedList'
        ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( '#pustaka-pendukung' ), {
        plugins: [ Essentials, Paragraph, Bold, Italic, Font, List ],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            'bulletedList', 'numberedList'
        ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( '#perangkat-lunak' ), {
        plugins: [ Essentials, Paragraph, Bold, Italic, Font, List ],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            'bulletedList', 'numberedList'
        ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( '#perangkat-keras' ), {
        plugins: [ Essentials, Paragraph, Bold, Italic, Font, List ],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor',
            'bulletedList', 'numberedList'
        ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );
