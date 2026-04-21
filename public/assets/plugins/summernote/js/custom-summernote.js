/*=========================================================================================
[Custom Summernote Javascript]

Project	     : Seipkon - Responsive Admin Template
Author       : Hassan Rasu
Author URL   : https://themeforest.net/user/themescare
Version      : 1.0
Primary use  : Seipkon - Responsive Admin Template

Only Use For Demo Purposes.

==========================================================================================*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		/*
		=================================================================
		Summernote JS
		=================================================================
		*/

        $('#summernote').summernote();


        /*
		=================================================================
		Page Editor JS
		=================================================================
		*/

		$('#page-editor-0').summernote({
			tabsize: 2,
			height: 100
		});
		$('#page-editor-1').summernote({
			tabsize: 2,
			height: 100
		});
		$('#page-editor-2').summernote({
			tabsize: 2,
			height: 100
		});
		$('#page-editor-3').summernote({
			tabsize: 2,
			height: 100
		});
		$('#page-editor-4').summernote({
			tabsize: 2,
			height: 100
		});

		$('.page-editor-0').summernote({
			tabsize: 2,
			height: 100
		});
		$('.page-editor-1').summernote({
			tabsize: 2,
			height: 100
		});
		$('.page-editor-2').summernote({
			tabsize: 2,
			height: 100
		});
		$('.page-editor-3').summernote({
			tabsize: 2,
			height: 100
		});
		$('.page-editor-4').summernote({
			tabsize: 2,
			height: 100
		});

	});


}(jQuery));