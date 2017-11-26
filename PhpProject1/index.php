<html>
    <head>
        <!-- Force latest IE rendering engine or ChromeFrame if installed -->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <meta charset="utf-8">
        <title>File Upload</title>
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI styles -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/dark-hive/jquery-ui.css" id="theme">
        <!-- Demo styles -->
        <link rel="stylesheet" href="css/demo.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/demo-ie8.css">
        <![endif]-->
        <style>
            /* Adjust the jQuery UI widget font-size: */
            .ui-widget {
                font-size: 0.95em;
            }
        </style>
        <!-- blueimp Gallery styles -->
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="css/jquery.fileupload.css">
        <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
        <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
    </head>﻿
    <body>
        <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" class="">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="fileupload-buttonbar">
                <div class="fileupload-buttons">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="fileinput-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-plusthick"></span><span class="ui-button-text">
                            <span>Add files...</span>

                        </span><input name="files[]" multiple="" type="file"></span>
                    <button type="submit" class="start ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-circle-arrow-e"></span><span class="ui-button-text">Start upload</span></button>
                    <button type="reset" class="cancel ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-cancel"></span><span class="ui-button-text">Cancel upload</span></button>
                    <button type="button" class="delete ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-trash"></span><span class="ui-button-text">Delete</span></button>
                    <input class="toggle" type="checkbox">
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="fileupload-progress fade" style="display: none;">
                    <!-- The global progress bar -->
                    <div class="progress ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="ui-progressbar-value ui-widget-header ui-corner-left ui-corner-right" style="display: block; width: 0%;"></div></div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation"><tbody class="files"><tr class="template-download fade" style="">
                        <td>
                            <span class="preview">

                            </span>
                        </td>
                        <td>
                            <p class="name">
                                <a href="http://localhost:81/MultipleUpload/server/php/files/dropbox_2015.10.28_amd64.deb" title="dropbox_2015.10.28_amd64.deb" download="dropbox_2015.10.28_amd64.deb">dropbox_2015.10.28_amd64.deb</a>
                            </p>

                        </td>
                        <td>
                            <span class="size">95.24 KB</span>
                        </td>
                        <td>
                            <button class="delete ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" data-type="DELETE" data-url="http://localhost:81/MultipleUpload/server/php/index.php?file=dropbox_2015.10.28_amd64.deb" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-trash"></span><span class="ui-button-text">Delete</span></button>
                            <input name="delete" value="1" class="toggle" type="checkbox">
                        </td>
                    </tr></tbody></table>
        </form>
    </body>
</html>