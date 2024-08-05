@extends('adminlte::page')

@isset($article)
    @section('title', 'Editando Articulo #'.$article->id)
@else
    @section('title', 'Crear nuevo articulo')
@endisset

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="container pt-5 overflow-y pb-5">

        @if(session('updated'))
            
        @endif

        <section class="row">
            <section>
                @isset($article)
                <h1>Editanto Articulo #{{ $article->id}}</h1>
                <p style="font-size: 18px; font-style: italic" class="text-muted font-weight-bold">"{{ $article->title}}"</p>
                @else
                <h1>Creando nuevo articulo</h1>
                @endisset
                <p>Complete todos los campos para la creación del nuevo artículo</p>
            </section>
            <hr>
        </section>


        <form action="@isset($article) {{ route('home.blog.update', $article) }} @else {{ route('home.blog.store') }} @endif" method="POST" enctype="multipart/form-data">

            @csrf

            <section class="row border py-4 px-4 shadow-sm bg-white">
                <h3>DETALLES</h3>
                <hr class="w-100 bg-light my-0 mb-3">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control rounded-0 bg-white" name="id" value="@isset($article) {{ $article->id }} @else {{ $lastID }} @endisset" readonly>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="reading_time">Tiempo de lectura</label>
                        <input type="number" class="form-control rounded-0" name="reading_time" @isset($article) value="{{ $article->reading_time}}" @endisset required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="status">Estado del artículo</label>
                        <select name="status" id="status" class="form-control rounded-0">
                            <option value="1" @if(isset($article) && $article->status != 0) selected @endif>Activo</option>
                            <option value="0" @if(!isset($article) || $article->status == 0) selected @endif>Desactivado</option>
                        </select>
                    </div>
                </div>
            </section>
    
            <section class="row border mt-4 p-4 bg-white">
                <h3>SEO</h3>
                <hr class="bg-light w-100 my-0">
                <div class="row mt-3 w-100">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="h1">Etiqueta H1</label>
                            <input name="h1" id="h1" type="text" @isset($article) value="{{ $article->h1 }}" @endisset class="form-control rounded-0" required></input>
                        </div>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="metadescription">Metadescripción</label>
                            <textarea name="metadescription" id="metadescription" rows="4" class="form-control rounded-0" required>@isset($article){{ $article->metadescription }}@endisset</textarea>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="row border mt-4 p-4 bg-white">
                <h3>CONTENIDO DEL ARTÍCULO</h3>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="title">Titulo del articulo</label>
                        <input type="text" class="form-control rounded-0" name="title" @isset($article) value="{{ $article->title }}" @endisset required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea id="editor" name="body_html">@isset($article->body_html) {{ $article->body_html }} @endif</textarea>
                    </div>
                </div>
            </section>
    
            <section class="row border mt-4 p-4 bg-white">
                <h3>MULTIMEDIA</h3>
                <div class="row w-100">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="imagen">Imagen Principal</label>
                            <input type="file" class="form-control rounded-0" name="banner_image">
                        </div>
                    </div>
                    @if(isset($article) && $article->banner_image != null)
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="form-group">
                            <img width="150px" src="{{ asset('uploads/webp/'. $article->banner_image) }}" alt="">
                        </div>
                    </div>
                    @endif
                </div>
            </section>
    
            <section style="position: fixed; bottom: 25px; right: 25px">
                <button title="Guardar Publicacion" style="width: 60px; height: 60px" class="btn btn-success rounded-circle"><i class="fa-sharp fa-solid fa-floppy-disk fa-2x"></i></button>
            </section>

            @if(session('updated'))
                <section style="position: fixed; bottom: 25px; right: 40%">
                    <div class="bg-info rounded-pill px-4 pt-2 pb-2 position-relative">
                        <span class="h5">Articulo Actualizado</span>
                        <span class="position-absolute" style="top: -5px; right: 5px; cursor: pointer" onclick="this.parentElement.parentElement.classList.add('d-none')">
                            <i class="fa-solid fa-circle-xmark border rounded-pill"></i>
                        </span>
                    </div>
                </section>
            @endif

        </form>

    </section>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                placeholder: 'Welcome to CKEditor 5!',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                htmlEmbed: {
                    showPreviews: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                // The "superbuild" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                    'MathType',
                    // The following features are part of the Productivity Pack and require additional license.
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            });
    </script>
@endsection